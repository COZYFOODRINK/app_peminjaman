<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('datapeminjaman', function (Blueprint $table) {
            $table->id(); //primary key
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('alat_id')->constrained('alat')->cascadeOnDelete();
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');
            // $table->string('status_peminjaman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datapeminjaman');
    }
};
