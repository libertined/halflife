<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Transport;
use Illuminate\Http\Request;

class PayController extends Controller
{
    public function show($id)
    {
        return view('cabinet.buy');
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
