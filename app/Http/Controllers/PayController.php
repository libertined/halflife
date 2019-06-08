<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Illuminate\Http\Request;

class Pay extends Controller
{
    public function show($id)
    {
        return view('cabinet.buy');
    }
}
