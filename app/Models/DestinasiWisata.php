<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinasiWisata extends Model
{
    use HasFactory;

    protected $table = 'destinasi_wisata';
    protected $primaryKey = 'destinasi_id';
    public $timestamps = true;

    protected $fillable = [
        'nama',
        'deskripsi',
        'alamat',
        'rt',
        'rw',
        'jam_buka',
        'tiket',
        'kontak',
        'gambar' // untuk foto destinasi
    ];

    protected $casts = [
        'tiket' => 'decimal:2',
        'jam_buka' => 'string',
    ];
}