<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Distributor;

class DistributorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Data contoh untuk tabel distributors
        $distributors = [
            ['name' => 'Beans R Us', 'city' => 'Brisbane'],
            ['name' => 'The Buzz', 'city' => 'Munich'],
            ['name' => 'Coffee Galore', 'city' => 'Capelle aan den IJssel'],
            ['name' => 'Perk Plus', 'city' => 'Salem'],
            ['name' => 'Café Colombian', 'city' => 'Hawthorne'],
            ['name' => 'Jumpin\' Java', 'city' => 'Sydney'],
            ['name' => 'Coffee 2000', 'city' => 'Munich'],
            ['name' => 'The Whole Bean', 'city' => 'Alton'],
            ['name' => 'Roast Resellers', 'city' => 'Vancouver'],
        ];

        // Simpan data ke database
        foreach ($distributors as $distributor) {
            Distributor::create($distributor);
        }
    }
};
