<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\Transaction;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Главная страница
Route::get('/', function () {
})->middleware('auth.mainpage');

//Авторизация страница с формой
Route::get('/login', ['as' => 'login', 'uses' => function () {
    return view('auth.auth');
}]);

//авторизация пользователя (непосредственно)
Route::post('/auth', 'Auth\LoginController@login');

//авторизация пользователя (непосредственно)
Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::get('/cabinet', ['as' => 'cabinet', 'uses' => function () {

    if (!Auth::check()) {
        return redirect(route('login'));
    }

    return view('cabinet.cabinet', [
        'transaction' => Transaction::where('user_id', Auth::user()->getAuthIdentifier())->first()
    ]);
}]);

Route::get('/scan', ['as' => 'scan', 'uses' =>  function () {
    return view('cabinet.scan');
}]);

Route::get('/register', ['as' => 'register', 'uses' => function () {
    return view('auth.register');
}]);

// Загрузить страницу с данными для оплаты
Route::group([
    'prefix' => 'pay',
    'as' => 'pay.',
], function () {
    // Отобразить страницу оплаты
    Route::get('/show/{transport}/{tariff_id?}', [
        'as' => 'show',
        'uses' => 'PayController@show'
    ]);

    //ПОдготовка транзакции, перенаправление
    Route::post('/prepare/{transport}/{tariff}', [
        'as' => 'prepare',
        'uses' => 'PayController@prepare'
    ]);

    // Форма оплаты (эквайринг)
    Route::get('/card/{transport}/{tariff}', [
        'as' => 'card',
        'uses' => 'PayController@card'
    ]);

    // Обработка транзакции оплаты
    Route::post('/transaction/{transport}/{tariff}', [
        'as' => 'transaction',
        'uses' => 'PayController@transaction'
    ]);

    // Обработка транзакции оплаты
    Route::get('/ticket/{transaction}/{signature}', [
        'as' => 'ticket',
        'uses' => 'PayController@ticket'
    ]);

    /**
     * Верификация оплаты контролером
     * ( не обязательно т.к. ключ проверки сигнатуры можно загружать каждый день контролеру и хранить егое в локал сторадже, проверку делать на фронте)
     */
    Route::get('/verify/{transaction}/{signature}', [
        'as' => 'verify',
        'uses' =>'PayController@verify',
        //'middleware' => 'auth.inspector'
    ]);
});








//регистрация

//восстановление доступа

//разлогин

// профиль
Route::group([
    'prefix' => 'profile',
    'namespace'=> 'Profile',
    'as' => 'profile.',
], function () {

    // Главная страница профиля
    Route::get('/', function () {

    });

    // Отображение баланса
    Route::get('/balance', function () {

    });

    //Пополнение баланса
    Route::get('/balance/pay', function () {

    });
});

// Подтверждение оплаты для сервиса оплаты (callback)
Route::get('/pay/handler', ['as' => 'pay.handler', 'uses' => function() {

}]);

Route::get('setlocale/{locale}', function ($locale) {

    if (in_array($locale, \Config::get('app.locales'))) {
        Session::put('locale', $locale);
    }

    return redirect()->back();

});

/**
1. Авторизация по телефону/паролю (смс код один для всех)
2. Регистрация нового по телефону/паролю с ролью пассажир
3. Пополнение бюджета (просто добавление суммы к текущему без проверок)
4. Покупка билета (передаётся сигнатура автобуса и $uid
5. Проверка билета (передаётся сигнатура билета и проверяется валидность и количество проверок)
6. Добавление автобуса
7. Добавление юзера с ролью.
8. Ограничение ролей по своим "страницам"
9. Отдача данных "личного кабинета"
10. Отдача данных билета (+ сигнатура).
 */
