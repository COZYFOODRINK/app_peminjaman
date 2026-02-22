<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlatModels extends Model
{
    protected $table = 'alat';
    protected $fillable = [
        'kategori_id', 
        'nama_alat', 
        'jumlah_alat',  
        'harga'];

    public function kategori()
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id');
    }
}
