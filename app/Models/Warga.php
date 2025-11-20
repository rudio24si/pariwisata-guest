<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table = 'warga';
    protected $primaryKey = 'warga_id';
    public $timestamps = false; // ubah jika pakai timestamps

    protected $fillable = [
        'no_ktp',
        'nama',
        'jenis_kelamin',
        'agama',
        'pekerjaan',
        'telp',
        'email'
    ];

    public function bookings()
    {
        return $this->hasMany(BookingHomestay::class, 'warga_id', 'warga_id');
    }
}
