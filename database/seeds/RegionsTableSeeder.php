<?php

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Генерация фейковых регионов
        factory(Region::class, 100)->create();
    }
}
