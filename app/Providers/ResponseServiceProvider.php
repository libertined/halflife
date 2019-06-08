<?php

namespace App\Providers;

use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;
use Illuminate\Contracts\Support\Arrayable;

class ResponseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->setResponseApiErrorMacro();
        $this->setResponseApiSuccessMacro();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Расширяем фасад Response методом 'apiSuccess', который формирует и возвращает
     * инстанс JsonResponse со структурой, соответвующей стандартному ответу
     * API в случае успеха.
     *
     * @return void
     */
    private function setResponseApiSuccessMacro()
    {
        /**
         * Api success response macro.
         *
         * @param  mixed  $result
         * @param  int  $code
         * @return \Illuminate\Http\JsonResponse
         */
        $macro = function ($result = null, int $code = 200) {
            return ResponseFactory::json([
                'success' => 1,
                'result' => $result,
            ], $code);
        };

        Response::macro('apiSuccess', $macro);
    }

    /**
     * Расширяем фасад Response методом 'apiError', который формирует и возвращает
     * инстанс JsonResponse со структурой, соответвующей стандартному ответу
     * API в случае ошибки.
     *
     * @return void
     */
    private function setResponseApiErrorMacro()
    {
        /**
         * Api error response macro.
         *
         * @param  array|\Illuminate\Contracts\Support\Arrayable  $errors
         * @param  int  $code
         * @return \Illuminate\Http\JsonResponse
         */
        $macro = function ($errors = [], int $code = 400) {
            if ($errors instanceof Arrayable) {
                $errors = $errors->toArray();
            }

            return Response::json([
                'success' => 0,
                'error' => count($array = array_wrap($errors)) ? $array : null,
            ], $code);
        };

        Response::macro('apiError', $macro);
    }
}
