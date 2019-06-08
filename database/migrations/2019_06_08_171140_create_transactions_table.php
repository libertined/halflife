<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('transport_id')->unsigned();
            $table->foreign('transport_id')->references('id')->on('transports')->onDelete('cascade');
            //Стоимость платежа
            $table->float('cost');
            //Пользователь совершивший оплату
            $table->bigInteger('user_id')->nullable();
            //Гео данные платежа
            $table->json('geo_data');
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
        Schema::dropIfExists('transactions');
    }
}
