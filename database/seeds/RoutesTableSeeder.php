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
            /** @var Route $route */
            $route = factory(Route::class)->create([
                'city_id' => rand(1, 100),
            ]);

            //Привязка тарифа маршрута
            $route->tariffs()->attach(rand(1,20));

            if (rand(0,1)) {
                //Привязка тарифа маршрута
                $route->tariffs()->attach(rand(1,20));
            }

            if (rand(0,1)) {
                //Привязка тарифа маршрута
                $route->tariffs()->attach(rand(1,20));
            }
        }

    }
}
