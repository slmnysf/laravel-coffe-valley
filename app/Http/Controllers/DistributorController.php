<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distributor;

class DistributorController extends Controller
{
    /**
     * Menampilkan halaman distributor.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Ambil semua data distributor dari database
        $distributors = Distributor::all();

        return view('distributors.index', compact('distributors'));
    }

    public function create()
    {
        return view('distributors.add');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state_region' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
        ]);

        // Simpan data ke database
        Distributor::create($request->all());

        return redirect()->route('distributors')->with('success', 'Distributor added successfully!');
    }

    public function edit($id)
    {
        $distributor = Distributor::findOrFail($id);
        return view('distributors.edit', compact('distributor'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state_region' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
        ]);

        // Temukan distributor berdasarkan ID
        $distributor = Distributor::findOrFail($id);

        // Update data distributor
        $distributor->update($request->all());

        return redirect()->route('distributors')->with('success', 'Distributor updated successfully!');
    }
};
