<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        //Cek apakah email ditemukan
        $data = DB::table('users')->where('email', $credentials['email'])->first();

        //cek jika email tidak ditemukan
        if(!$data) {
            return redirect()->back()->with('error', 'Email tidak ditemukan.');
        }

        //cek jika password salah
        if(!Hash::check($credentials['password'], $data->password)) {
            return redirect()->back()->with('error', 'Password salah.');
        }

        //cek role admin
        if($data->role == 'admin') {

        //jika berhasil login, simpan data user ke session
        session([
            'user_id' => $data->id,
            'user_name' => $data->name,
            'user_email' => $data->email,
            'user_role' => $data->role,
        ]);
            return redirect()->route('admin.dashboard')->with('success', 'Login berhasil. Selamat datang, Admin!');

        } 
        
        //cek role petugas
        elseif($data->role == 'petugas') {
        //jika berhasil login, simpan data user ke session
        session([
            'user_id' => $data->id,
            'user_name' => $data->name,
            'user_email' => $data->email,
            'user_role' => $data->role,
        ]);
            return redirect()->route('petugas.dashboard')->with('success', 'Login berhasil. Selamat datang, Petugas!');
        } 

        //cek role peminjam
        elseif($data->role == 'peminjam') {
        //jika berhasil login, simpan data user ke session
        session([
            'user_id' => $data->id,
            'user_name' => $data->name,
            'user_email' => $data->email,
            'user_role' => $data->role,
        ]);
            return redirect()->route('peminjam.dashboard')->with('success', 'Login berhasil. Selamat datang, Peminjam!');
        }


        // if (auth()->attempt($credentials)) {
        //     $request->session()->regenerate();

        //     return redirect()->intended('/dashboard');
        // }

        return redirect('/dashboard')->with('success', 'Login berhasil. ');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat login. Silakan coba lagi.');
        }
    }

    public function logout(Request $request)
    {
        // Hapus data user dari session
        $request->session()->forget(['user_id', 'user_name', 'user_email', 'user_role']);
        $request->session()->invalidate();
        

        // Redirect ke halaman login
        return redirect('/login')->with('success', 'Logout berhasil.');
    }
}