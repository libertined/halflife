<?php

use App\Models\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Генерация фейковых городов с различными регионами
        for ($i=0;$i<=200;$i++) {
            factory(City::class)->create([
                'region_id' => rand(1, 100)
            ]);
        }
    }
}
