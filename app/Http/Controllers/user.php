<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class user extends Controller
{
    // // untuk form
    // public function proses_data_user(Request $request)
    // {
    //     try {
    //         $validated = $request->validate([
    //             'name' => 'required|string|max:255',
    //             'email' => 'required|string|email|max:255|unique:users',
    //             'role' => 'required|string|max:255',
    //             'password' => 'required|string|min:8|confirmed',
    //         ]);

    //         UserModel::create($validated);

    //         return redirect()->back()->with('success', 'Data user berhasil disimpan.');

    //     } catch (\Exception $e) {
    //         return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data user.');
    //     }
    // }

    // //Buat read data user
    // public function read_data_user()
    // {
    //     $users = UserModel::all();
    //     return view('datauser', compact('users'));
    // }

    // //Buat Update data user
    // public function update_data_user(Request $request, $id)
    // {
    //     try {
    //         $validated = $request->validate([
    //             'name' => 'required|string|max:255',
    //             'email' => 'required|string|email|max:255|unique:users,email,' . $id,
    //             'role' => 'required|string|max:255',
    //             'password' => 'nullable|string|min:8|confirmed',
    //         ]);

    //         $user = UserModel::findOrFail($id);
    //         $user->update($validated);

    //         return redirect()->back()->with('success', 'Data user berhasil diperbarui.');

    //     } catch (\Exception $e) {
    //         return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui data user.');
    //     }
    // }
}
