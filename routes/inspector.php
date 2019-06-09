<?php

/*
|--------------------------------------------------------------------------
| Inspector Routes
|--------------------------------------------------------------------------
|
| Роутинг для инспекторов
|
*/

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group([
    'prefix' => 'inspector',
    'as' => 'inspector.',
], function () {

// Главная страница
    Route::get('/', function () {
    })->middleware('auth.inspector.mainpage');

//Авторизация страница с формой
    Route::get('/login', function () {
        return view('inspector.auth');
    });

//авторизация пользователя (непосредственно)
    Route::post('/auth', 'Auth\LoginController@loginInspector');

    Route::get('/cabinet', function () {
        return view('inspector.control');
    });

});


