<?php

namespace App\Http\Controllers;

use App\Models\Tariff;
use App\Models\Transaction;
use App\Models\Transport;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PayController extends Controller
{
    /**
     * Отобразить информацию о платеже.
     * @param Transport $transport
     * @return View
     */
    public function show(Transport $transport)
    {
        return view('cabinet.buy', [
            "transport" => $transport,
            "tariff" => $transport->getTariffs()->first()
        ]);
    }

    /**
     * Форма оплаты (эквайринговая система).
     * @param Request $request
     * @param Transport $transport
     * @param Tariff $tariff
     * @return array
     */
    public function card(Request $request, Transport $transport, Tariff $tariff)
    {
        return view('cabinet.card', [
            "transport" => $transport,
            "tariff" => $tariff
        ]);
    }

    /**
     * Принимаемые данные:
     * - id транспорта
     * - данные транзакции (карта и т.д.)
     * Возвращаемые данные:
     * - результат транзакции
     * - id транзакции (номер билетика)
     * - дата оплаты
     * - сигнатура оплаты (подпись данных для верификации платежа)
     * @param Request $request
     * @param Transport $transport
     * @param Tariff $tariff
     * @return array
     */
    public function transaction(Request $request, Transport $transport, Tariff $tariff)
    {
        $transaction = new Transaction();

        $transaction->transport_id = $transport->id;
        $transaction->tariff_id = $tariff->id;
        $transaction->cost = $tariff->cost;
        $transaction->geo_data = json_encode([
            'lat' => rand(30,36) . '.123456',
            'lon' => rand(30,36) . '.654321',
        ]);
        $transaction->save();

        return json_encode([
            "response" => "ok",
            "postaction" => "redirect",
            "location" => route('pay.ticket', [
                'transaction' => $transaction->id,
                'signature' => $transaction->getSignature()
            ])
        ]);
    }

    /**
     * Страница отображения купленого билета
     * @param Request $request
     * @param Transaction $transaction
     * @param string $signature
     * @return View
     */
    public function ticket(Request $request, Transaction $transaction, string $signature)
    {
        //Если сигнатура не валидная, то отображаем, что страница не найдена
        if (!$transaction->isValidSignature($signature)) {
            abort(404);
        }

        //Отображаем чек транзакции
        return view('cabinet.ticket', [
            'transaction' => $transaction,
            'verifyLink' => route('pay.verify', [
                'transaction' => $transaction->id,
                'signature' => $transaction->getSignature()
            ])
        ]);
    }

    /**
     * Верификация платежа.
     *
     * @param Request $request
     * @param Transaction $transaction
     * @param string $signature
     * @return array
     */
    public function verify(Request $request, Transaction $transaction, string $signature)
    {
        return [
            'success' => 1,
            'date' => [
                'valid' => $transaction->isValidSignature($signature),
                'transaction' => $transaction->toArray(),
            ]
        ];
    }

    /**
     * @param Transport $transport
     * @return array
     */
    protected function getDataByTransport(Transport $transport)
    {
        $tariffs = $transport->getTariffs()->toArray();
        $data = [
            "id" => $transport->id,
            "type" => $transport->type->title,
            "route" => $transport->route->number,
            "tariff" => reset($tariffs),
        ];

        return $data;
    }

}