<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use App\Models\Rental;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $faker->seed(123);

        for($i=0;$i<10;$i++){
            Customer::create([
                'no_hp' => $faker->unique()->numerify('08#########'),
                'nama' => $faker->firstName." ".$faker->lastName,
            ]);
        }

        Rental::create([
            'kode' => 'A0001',
            'merk' => 'Mitsubishi',
            'tipe' => 'Pajero Sport'
        ]);
        Rental::create([
            'kode' => 'A0002',
            'merk' => 'Toyota',
            'tipe' => 'Fortuner'
        ]);
        Rental::create([
            'kode' => 'A0003',
            'merk' => 'Hyundai',
            'tipe' => 'Ioniq 5'
        ]);
    }
}
