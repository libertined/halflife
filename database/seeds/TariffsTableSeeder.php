<?php

use App\Models\Tariff;
use Illuminate\Database\Seeder;

class TariffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Генератор фейковых тарифов
        factory(Tariff::class, 20)->create();
    }
}
