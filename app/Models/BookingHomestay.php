<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingHomestay extends Model
{
    protected $table = 'booking_homestay';
    protected $primaryKey = 'booking_id';
    public $timestamps = false;

    protected $fillable = [
        'kamar_id',
        'warga_id',
        'checkin',
        'checkout',
        'total',
        'status',
        'metode_bayar'
    ];

    public function kamar()
    {
        return $this->belongsTo(KamarHomestay::class, 'kamar_id', 'kamar_id');
    }

    public function warga()
    {
        return $this->belongsTo(Warga::class, 'warga_id', 'warga_id');
    }
}
