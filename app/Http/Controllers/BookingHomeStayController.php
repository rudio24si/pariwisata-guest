<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\Warga;
use App\Models\Homestay;
use App\Models\KamarHomestay;
use App\Models\BookingHomestay;
use App\Models\Media;

class BookingHomeStayController extends Controller
{
    /**
     * Tampilkan form booking
     * Optional: ?kamar_id=xx or ?homestay_id=xx
     */
    public function create(Request $request)
    {
        $homestay = Homestay::all();
        $warga = Warga::orderBy('nama', 'asc')->get();

        // Ambil semua kamar, bukan find()
        $kamar = KamarHomestay::orderBy('nama_kamar', 'asc')->get();

        return view('pages.booking.create', compact('homestay', 'warga', 'kamar'));
    }


    /**
     * AJAX: ambil kamar berdasarkan homestay id
     * Return JSON: [{kamar_id, nama_kamar, harga_per_malam}, ...]
     */
    public function getKamar($homestayId)
    {
        $kamarList = KamarHomestay::where('homestay_id', $homestayId)
            ->get(['kamar_id', 'nama_kamar', 'harga_per_malam']);

        return response()->json($kamarList);
    }

    /**
     * Proses simpan booking
     */
    public function store(Request $request)
    {
        $rules = [
            // Warga (semua wajib sesuai permintaan)
            'no_ktp' => 'required|string',
            'nama' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'agama' => 'required|string',
            'pekerjaan' => 'required|string',
            'telp' => 'required|string',
            'email' => 'required|email',

            // Booking
            'homestay_id' => 'required|integer|exists:homestay,homestay_id',
            'kamar_id' => 'required|integer|exists:kamar_homestay,kamar_id',
            'checkin' => 'required|date',
            'checkout' => 'required|date|after:checkin',
            'metode_bayar' => 'nullable|string',
            'bukti_bayar' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120'
        ];

        $validator = Validator::make($request->all(), $rules, [
            'bukti_bayar.required' => 'Bukti bayar wajib diupload.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Ambil kamar & harga per malam
        $kamar = KamarHomestay::find($request->input('kamar_id'));
        if (!$kamar) {
            return redirect()->back()->with('error', 'Kamar tidak ditemukan.')->withInput();
        }

        // Cek overlapping booking (sama seperti sebelumnya)
        $checkin = Carbon::parse($request->input('checkin'))->startOfDay();
        $checkout = Carbon::parse($request->input('checkout'))->startOfDay();

        $conflict = BookingHomestay::where('kamar_id', $kamar->kamar_id)
            ->where(function ($q) use ($checkin, $checkout) {
                $q->whereRaw('? < checkout', [$checkout->toDateString()])
                    ->whereRaw('? > checkin', [$checkin->toDateString()]);
            })->exists();

        if ($conflict) {
            return redirect()->back()->with('error', 'Tanggal yang dipilih bertabrakan dengan booking lain untuk kamar ini.')->withInput();
        }

        // Create or update warga by no_ktp
        $wargaData = $request->only(['no_ktp', 'nama', 'jenis_kelamin', 'agama', 'pekerjaan', 'telp', 'email']);
        $warga = Warga::where('no_ktp', $wargaData['no_ktp'])->first();
        if ($warga) {
            $warga->update($wargaData);
        } else {
            $warga = Warga::create($wargaData);
        }

        // Hitung nights & total
        $nights = $checkin->diffInDays($checkout);
        $harga_per_malam = floatval($kamar->harga_per_malam);
        $total = $nights * $harga_per_malam;

        // Create booking
        $booking = BookingHomestay::create([
            'kamar_id' => $kamar->kamar_id,
            'warga_id' => $warga->warga_id,
            'checkin' => $checkin->toDateString(),
            'checkout' => $checkout->toDateString(),
            'total' => $total,
            'status' => 'pending',
            'metode_bayar' => $request->input('metode_bayar', 'transfer')
        ]);

        // Upload bukti_bayar
        if ($request->hasFile('bukti_bayar')) {
            $file = $request->file('bukti_bayar');
            $path = $file->store('media/bukti_bayar', 'public'); // simpan di storage/app/public/media/...
            $fileUrl = Storage::disk('public')->url($path);

            Media::create([
                'ref_table' => 'booking_homestay',
                'ref_id' => $booking->booking_id,
                'file_url' => $fileUrl,
                'caption' => 'bukti bayar booking #' . $booking->booking_id,
                'mime_type' => $file->getClientMimeType(),
                'sort_order' => 0
            ]);
        }

        return redirect()->route('dashboard')->with('success', 'Booking berhasil dibuat. Status: pending.');
    }
}
