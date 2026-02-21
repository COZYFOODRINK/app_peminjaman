<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriModel;

class Kategori extends Controller
{
    public function proses_data_kategori(Request $request)
    {
        try {
            $validated = $request->validate([
                'nama_kategori' => 'required|string|max:255',

            ]);

            // Simpan data kategori ke database
            KategoriModel::create($validated);

            return redirect()->back()->with('success', 'Data kategori berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data kategori.');
        }
    }
}
