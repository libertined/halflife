<?php

use App\Models\Route;
use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //фуйкер маршрутов
        for ($i=0; $i<=100; $i++) {
            factory(Route::class)->create([
                'city_id' => rand(1, 200),
                'tariff_id' => rand(1, 20)
            ]);
        }

    }
}
