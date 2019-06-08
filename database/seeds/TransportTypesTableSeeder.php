<?php

use App\Models\TransportType;
use Illuminate\Database\Seeder;

class TransportTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // фейкер типов трансопртов
        $items = ['Автобус', 'Троллейбус', 'Трамвай', 'Электробус', 'Водное такси'];

        foreach ($items as $name) {
            factory(TransportType::class)->create(['name' => $name, 'title' => $name]);
        }
    }
}
