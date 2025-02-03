<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bean;

class BeanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Data contoh untuk tabel beans
        Bean::create([
            'name' => 'Cubita',
            'description' => 'Cubita Coffee is sun dried and hand sorted. It originates from an elevation of over 2000 meters in the Andes Mountains of Ecuador, which is located closest to the sun on the Equator. Superb aroma and rich Flavor.',
            'price' => 12,
        ]);

        Bean::create([
            'name' => 'Colombian Supremo',
            'description' => 'This smooth, full-flavored coffe from Columbia.',
            'price' => 13.5,
        ]);

        Bean::create([
            'name' => 'Pure Kona Fancy',
            'description' => 'Grown on the big island of Hawaii, this coffe known for its tantalizing aroma.',
            'price' => 15.9,
        ]);
    }
};
