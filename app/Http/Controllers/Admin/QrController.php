<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers;
use App\Models\Transport;
use Illuminate\View\View;

class QrController extends Controllers\Controller
{
    /**
     * Отобразить информацию о платеже.
     * @param Transport $transport
     * @return View
     */
    public function show(Transport $transport)
    {
        return view('admin.qr', [
            "transport" => $transport,
            "tariff" => $transport->getTariffs()->first()
        ]);
    }
}
