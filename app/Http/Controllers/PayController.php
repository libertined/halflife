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
     * @return View
     */
    public function transaction(Request $request, Transport $transport, Tariff $tariff)
    {
        return view('cabinet.ticket');
    }

    /**
     * Верификация платежа.
     *
     * @param Request $request
     * @param Transaction $transaction
     * @return array
     */
    public function verify(Request $request, Transaction $transaction)
    {
        $valid = $transaction->getSignature() == $request->get('secret');

        return [
            'success' => 1,
            'date' => [
                'valid' => $valid,
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
