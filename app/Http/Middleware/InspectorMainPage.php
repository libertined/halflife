<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

class InspectorMainPage
{
    public function handle($request)
    {
        if (Auth::check()) {
            return redirect('/inspector/cabinet');
        } else {
            return redirect('/inspector/login');
        }
    }
}
