<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Transport;
use App\Models\Tariff;
use Illuminate\Http\Request;

class PayController extends Controller
{
    public function show(Transport $transport)
    {
        $data = $this->getDataByTransport($transport);
        $data["link"] = $this->getTransactionLink($data);

        return view('cabinet.buy', $data);
    }

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

    protected function getTransactionLink($data)
    {
        $linkData = [
            "transport" => $data['id'],
            "tariff" => $data['tariff']['id'],
        ];

        return route('pay.transaction', $linkData);
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
                'transport' => $transaction->transport->toArray(),
                'route' => $transaction->transport->route->toArray(),
                'tariff' => $transaction->tariff->toArray(),
            ]
        ];
    }
}
