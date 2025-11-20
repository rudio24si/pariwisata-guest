<?php

// app/Models/Homestay.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{
    use HasFactory;

    // Definisikan nama tabel
    protected $table = 'homestay';

    // Definisikan Primary Key
    protected $primaryKey = 'homestay_id';

    // Kolom yang dapat diisi
    protected $fillable = [
        'pemilik_warga_id',
        'nama',
        'alamat',
        'rt',
        'rw',
        'fasilitas_json',
        'harga_per_malam',
        'status',
    ];

    protected $casts = [
        'fasilitas_json' => 'array', // Otomatis mengubah JSON menjadi array PHP saat diakses
        'harga_per_malam' => 'decimal:2',
    ];

    // --- Relasi ke Warga (One-to-Many Inverse) ---
    /**
     * Homestay dimiliki oleh satu Warga.
     */
    public function pemilik()
    {
        // Relasi belongsTo menggunakan Foreign Key 'pemilik_warga_id'
        return $this->belongsTo(Warga::class, 'pemilik_warga_id', 'warga_id');
    }

    // --- Relasi ke Media (Polymorphic One-to-Many) ---
    /**
     * Homestay memiliki banyak Media (Foto).
     * ('mediable') adalah nama relasi morphTo di Model Media.
     */
    public function media()
    {
        // Menggunakan morphMany untuk relasi polimorfik, 
        // dengan menentukan nama relasi dan kolom kustom ('ref_table' dan 'ref_id').
        return $this->morphMany(Media::class, 'mediable', 'ref_table', 'ref_id');
    }
}
