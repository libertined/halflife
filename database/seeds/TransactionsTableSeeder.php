<?php

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<100; $i++) {
            factory(Transaction::class)->create([
                'transport_id' => rand(1,100),
                'user_id' => rand(1,100),
                'tariff_id' => 1,
            ]);
        }
    }
}
