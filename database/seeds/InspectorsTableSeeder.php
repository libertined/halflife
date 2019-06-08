<?php

use App\Models\Inspector;
use Illuminate\Database\Seeder;

class InspectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Генерация фейковых инспекторов
        for ($i=0; $i<=200; $i++) {
            factory(Inspector::class)->create([
                'city_id' => rand(1, 100)
            ]);
        }
    }
}
