<?php

use App\Models\Transport;
use Illuminate\Database\Seeder;

class TransportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<=100; $i++) {
            factory(Transport::class)->create([
                'route_id' => rand(1, 100),
                'transport_type_id' => rand(1, 5)
            ]);
        }
    }
}
