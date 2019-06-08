<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('phone');
            $table->string('password');

            // ФИО
            $table->text('firstname')->nullable();
            $table->text('lastname')->nullable();
            $table->text('surname')->nullable();

            // Дата рождения
            $table->date('birth')->nullable();

            // Идентификатор социальной карты
            $table->date('social_id')->nullable();

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
        Schema::dropIfExists('users');
    }
}
