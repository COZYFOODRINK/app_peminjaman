<?php

namespace Database\Seeders;

use App\Models\UserModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            [
                'name' => 'Rafael',
                'email' => 'rafaell@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ],
            [
                'name' => 'Andi',
                'email' => 'andii@gmail.com',
                'password' => Hash::make('Andi12'),
                'role' => 'petugas',
            ],
            [
                'name' => 'Sandi',
                'email' => 'sandii@gmail.com',
                'password' => Hash::make('Sandi12'),
                'role' => 'peminjam',
            ],
        ]);
    }
}
