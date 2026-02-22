<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlatModels;
use App\Models\KategoriModel;
use Illuminate\Support\Facades\Log;

class Alat extends Controller
{

    public function index()
    {
        $kategori = KategoriModel::all();
        return view('admin.formalat', compact('kategori'));
    }

    public function proses_data_alat(Request $request)
    {
        try {
            $validated = $request->validate([
                'kategori_id' => 'required|exists:kategori,id',
                'nama_alat' => 'required|string|max:255',
                'jumlah_alat' => 'required|integer',
                'harga' => 'required|numeric',
            ]);

            AlatModels::create($validated);

            return redirect()->back()->with('success', 'Data alat berhasil disimpan.');
        } catch (\Exception $e) {
            Log::error('Error menyimpan alat: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data alat: ' . $e->getMessage());
        }
    }

    //Buat read data alat
    public function read_data_alat()
    {
        $alat = AlatModels::with('kategori')->get();
        return view('admin.dataalat', compact('alat'));
    }

    //Buat Update data alat
    public function edit_data_alat(Request $request, $id) {
        $alat = AlatModels::findOrFail($id);
        $kategori = KategoriModel::all();

        return view('admin.form_update_alat', compact('alat', 'kategori'));
    }

    //Buat Proses Update data alat
    public function update_data_alat(Request $request, $id) {
        try {
            $validated = $request->validate([
                'kategori_id' => 'required|exists:kategori,id',
                'nama_alat' => 'required|string|max:255',
                'jumlah_alat' => 'required|integer',
                'harga' => 'required|numeric',
            ]);
            $alat = AlatModels::findOrFail($id);
            $alat->update($validated);
            return redirect()->route('read.data.alat')->with('success', 'Data alat berhasil diperbarui.');
        } catch (\Exception $e) {
            Log::error('Error memperbarui alat: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui data alat: ' . $e->getMessage());
        }
    }

    //Buat Delete data alat
    public function delete_data_alat($id) {
        try {
            $alat = AlatModels::findOrFail($id);
            $alat->delete();    
            return redirect()->route('read.data.alat')->with('success', 'Data alat berhasil dihapus.');
        } catch (\Exception $e) {
            Log::error('Error menghapus alat: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus data alat: ' . $e->getMessage());
        }
    }
}