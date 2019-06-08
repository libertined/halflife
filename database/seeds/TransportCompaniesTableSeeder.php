<?php

use App\Models\TransportCompany;
use Illuminate\Database\Seeder;

class TransportCompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // фекер тарнспортных компаний
        factory(TransportCompany::class, 10)->create();
    }
}
