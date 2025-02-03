<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bean;

class CatalogueController extends Controller
{
    /**
     * Menampilkan halaman catalogue.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Ambil semua data beans dari database
        $beans = Bean::all();

        return view('catalogue', compact('beans'));
    }
};
