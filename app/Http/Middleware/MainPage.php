<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

class MainPage
{
    public function handle($request)
    {
        if (Auth::check()) {
            return redirect('/cabinet');
        } else {
            return redirect('/login');
        }
    }
}
