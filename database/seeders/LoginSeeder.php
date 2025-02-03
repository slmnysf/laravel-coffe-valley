<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Login;
use Illuminate\Support\Facades\Hash;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan data login ke tabel `logins`
        Login::create([
            'user_id' => 'admin',
            'password' => Hash::make('admin123'), // Enkripsi password
        ]);
    }
};
