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

    //Buat read data kategori
    public function read_data_kategori()
    {
        $kategori = KategoriModel::get();

        return view('datakategori', compact('kategori'));
    }

    //Buat Update data kategori
    public function edit_data_kategori(Request $request, $id) {
        $kategori = KategoriModel::findOrFail($id);

        return view('form_update_kategori', compact('kategori'));
    }

    //Buat Proses Update data kategori
    public function update_data_kategori(Request $request, $id) {
        try {
            $validated = $request->validate([
                'nama_kategori' => 'required|string|max:255',
            ]);

            $kategori = KategoriModel::findOrFail($id);
            $kategori->update($validated);

            return redirect()->back()->with('success', 'Data kategori berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui data kategori.');
        }
    }

    //Buat Delete data kategori
    public function delete_data_kategori($id) {
        try {
            $kategori = KategoriModel::findOrFail($id);
            $kategori->delete();

            return redirect()->back()->with('success', 'Data kategori berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus data kategori.');
        }
    }
}   