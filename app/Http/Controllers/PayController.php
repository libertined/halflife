<?php

namespace App\Http\Controllers;

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
}
