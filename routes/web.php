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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Главная страница
Route::get('/', function () {
})->middleware('auth.mainpage');

//Авторизация страница с формой
Route::get('/login', function () {
    return view('auth.auth');
});

//авторизация пользователя (непосредственно)
Route::post('/auth', 'Auth\LoginController@login');


Route::get('/cabinet', function () {
    return view('cabinet.cabinet');
});

Route::get('/scan', function () {
    return view('cabinet.scan');
});

Route::get('/register', function () {
    return view('auth.register');
});

// Загрузить страницу с данными для оплаты
/**
 * Данные для заполнения оплаты:
 *  - для транзакции: id транпорта (отправляется в запросе на оплату вместе с платежными реквизитами)
 *  - для отображения: номер маршрута, уникальный номер транспорта, стоимость проезда
 */
Route::get('/pay/{transport_id}', 'Pay@show');

// Обработка транзакции оплаты
Route::get('/pay/{transport_id}/transaction', function () {
    /**
     * Принимаемые данные:
     * - id транспорта
     * - данные транзакции (карта и т.д.)
     */

    /**
     * Возвращаемые данные:
     * - результат транзакции
     * - id транзакции (номер билетика)
     * - дата оплаты
     * - сигнатура оплаты (подпись данных для верификации платежа)
     */
    return view('cabinet.ticket');
});

/**
 * Верификация оплаты
 * ( не обязательно т.к. ключ проверки сигнатуры можно загружать каждый день контролеру и хранить егое в локал сторадже, проверку делать на фронте)
 */
Route::get('/pay/verify/{transaction}', 'PayController@verify');

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
