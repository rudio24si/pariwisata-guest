<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    protected $table = 'warga';
    protected $primaryKey = 'warga_id';
    public $timestamps = true;

    protected $fillable = [
        'no_ktp',
        'nama',
        'jenis_kelamin',
        'agama',
        'pekerjaan',
        'telp',
        'email',
        'foto',
        'deskripsi', // tambahan untuk deskripsi pemandu
        'pengalaman', // lama pengalaman jadi pemandu
        'bahasa', // bahasa yang dikuasai
        'status' // aktif/tidak aktif
    ];
}
