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

    public function read_data_alat()
    {
        $alat = AlatModels::with('kategori')->get();
        return view('admin.dataalat', compact('alat'));
    }
}
