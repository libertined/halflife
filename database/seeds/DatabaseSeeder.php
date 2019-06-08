<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RegionsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(InspectorsTableSeeder::class);
        $this->call(TransportCompaniesTableSeeder::class);
        $this->call(TariffsTableSeeder::class);
        $this->call(RoutesTableSeeder::class);
        $this->call(TransportTypesTableSeeder::class);
        $this->call(TransportTableSeeder::class);
    }
}
