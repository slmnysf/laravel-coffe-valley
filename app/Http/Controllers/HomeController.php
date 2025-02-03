<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DailyBean;
use App\Models\Bean;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil data Bean of the Day dengan sale_price >= 0.00
        $beanOfTheDay = DailyBean::where('sale_price', '>=', 0.00)
            ->whereDate('date', today()) // Filter berdasarkan tanggal hari ini
            ->with('bean') // Eager load relationship ke Bean
            ->first();

        return view('home', compact('beanOfTheDay'));
    }
};
