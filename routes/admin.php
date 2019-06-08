<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Роутинг для административной панели
 */
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
], function () {

    // маршруты
    Route::resource('routes', 'RoutesController');

    // инспектора (контролеры) на маршрутах
    Route::resource('inspectors', 'InspectorController');

    // города
    Route::resource('cities', 'CitiesController');

    // виды транспорта
    Route::resource('transport-types', 'TransportTypesController');

    //Транспорт (подвижной состав на маршруте автобус/трамвай/троллейбус)
    Route::resource('transports', 'TransportsController');
});


