<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    /**
     * Menampilkan halaman upload.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $uploads = Upload::all();
        return view('uploads.index', compact('uploads'));
    }

    /**
     * Menampilkan form tambah dokumen.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('uploads.create');
    }

    /**
     * Menyimpan data dokumen baru.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'document_file' => 'required|file|mimes:pdf,doc,docx|max:2048', // Maksimal 2MB
            'author' => 'required|string|max:255',
        ]);

        // Simpan file ke storage
        $filePath = $request->file('document_file')->store('uploads','public');

        // Simpan data ke database
        Upload::create([
            'title' => $request->title,
            'document_file' => $filePath,
            'author' => $request->author,
        ]);

        return redirect()->route('uploads.index')->with('success', 'Document uploaded successfully!');
    }
};
