<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KamarHomestay extends Model
{
    protected $table = 'kamar_homestay';
    protected $primaryKey = 'kamar_id';
    public $timestamps = false;

    protected $fillable = [
        'homestay_id',
        'nama_kamar',
        'kapasitas',
        'fasilitas_json',
        'harga'
    ];

    public function homestay()
    {
        return $this->belongsTo(Homestay::class, 'homestay_id', 'homestay_id');
    }

    public function bookings()
    {
        return $this->hasMany(BookingHomestay::class, 'kamar_id', 'kamar_id');
    }
}
