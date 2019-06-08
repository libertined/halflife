<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesTariffsTable extends Migration
{
    /**
     * Тарифы маршрутов
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes_tariffs', function (Blueprint $table) {
            $table->bigIncrements('id');

            //маршрут
            $table->bigInteger('route_id')->unsigned();
            $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');

            //тариф
            $table->bigInteger('tariff_id')->unsigned();
            $table->foreign('tariff_id')->references('id')->on('tariffs')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes_tariffs');
    }
}
