<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DailyBean;
use Carbon\Carbon;

class DailyBeanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Data contoh untuk tabel daily_beans
        DailyBean::create([
            'bean_id' => 1,
            'sale_price' => 11.00,
            'date' => Carbon::today(), // Tanggal hari ini
        ]);

        DailyBean::create([
            'bean_id' => 2,
            'sale_price' => 9.50,
            'date' => Carbon::today()->subDay(), // Tanggal kemarin
        ]);

        DailyBean::create([
            'bean_id' => 3,
            'sale_price' => 8.00,
            'date' => Carbon::today()->subDays(2), // Tanggal 2 hari yang lalu
        ]);
    }
};
