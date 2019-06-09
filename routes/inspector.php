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

// Главная страница
Route::get('/inspector', function () {
})->middleware('auth.inspector.mainpage');

//Авторизация страница с формой
Route::get('/inspector/login', function () {
    return view('inspector.auth');
});

//авторизация пользователя (непосредственно)
Route::post('/inspector/auth', 'Auth\LoginController@loginInspector');

Route::get('/inspector/cabinet', function () {
    return view('inspector.control');
});
