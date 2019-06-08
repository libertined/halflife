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

        /** @var TransportCompany $transportCompany */
        for ($i=0;$i<10;$i++) {
            $transportCompany = factory(TransportCompany::class)->create();

            //Привязка тарифа маршрута
            $transportCompany->routes()->attach(rand(1,100));

            if (rand(0,1)) {
                //Привязка обслуживаемого маршрута
                $transportCompany->routes()->attach(rand(1,100));
            }

            if (rand(0,1)) {
                //Привязка обслуживаемого маршрута
                $transportCompany->routes()->attach(rand(1,100));
            }
        }
    }
}
