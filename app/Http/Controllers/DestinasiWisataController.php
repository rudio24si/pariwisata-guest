<?php

namespace App\Http\Controllers;

use App\Models\DestinasiWisata;
use App\Models\Warga;
use Illuminate\Http\Request;

class DestinasiWisataController extends Controller
{
    /**
     * Display a listing of the resource.s
     */
    public function index()
    {
        $destinasi = DestinasiWisata::latest()->get();
        $pemandu = Warga::where('status', 'Aktif')->latest()->take(6)->get();

        return view('pages.destinasi.index', compact('destinasi', 'pemandu'));
    }

    public function IndexAdmin()
    {
        $destinasi = DestinasiWisata::latest()->paginate(10);
        return view('layouts.admin.destinasi.index', compact('destinasi'));
    }

    public function tentang()
    {
        $destinasi = DestinasiWisata::latest()->get();
        $pemandu = Warga::where('status', 'Aktif')->latest()->take(6)->get();

        return view('pages.tentang.tentang', compact('destinasi', 'pemandu'));
    }

    public function create()
    {
        return view('pages.destinasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'alamat' => 'required|string',
            'rt' => 'nullable|string|max:10',
            'rw' => 'nullable|string|max:10',
            'jam_buka' => 'required|string|max:100',
            'tiket' => 'required|numeric|min:0',
            'kontak' => 'nullable|string|max:50',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
        ], [
            'nama.required' => 'Nama destinasi wajib diisi',
            'deskripsi.required' => 'Deskripsi wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'jam_buka.required' => 'Jam buka wajib diisi',
            'tiket.required' => 'Harga tiket wajib diisi',
            'tiket.numeric' => 'Harga tiket harus berupa angka',
            'gambar.required' => 'Gambar wajib diupload',
            'gambar.image' => 'File harus berupa gambar',
            'gambar.mimes' => 'Gambar harus format: jpeg, png, jpg, gif',
            'gambar.max' => 'Ukuran gambar maksimal 2MB',
        ]);

        $data = $request->all();

        // Upload gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/destinasi'), $filename);
            $data['gambar'] = $filename;
        }

        DestinasiWisata::create($data);

        return redirect()->route('dashboard')
            ->with('success', 'Destinasi wisata berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $destinasi = DestinasiWisata::findOrFail($id);
        return view('pages.destinasi.detail', compact('destinasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $destinasi = DestinasiWisata::findOrFail($id);
        return view('pages.destinasi.edit', compact('destinasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $destinasi = DestinasiWisata::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'alamat' => 'required|string',
            'rt' => 'nullable|string|max:10',
            'rw' => 'nullable|string|max:10',
            'jam_buka' => 'required|string|max:100',
            'tiket' => 'required|numeric|min:0',
            'kontak' => 'nullable|string|max:50',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5000',
        ]);

        $data = $request->all();

        // Upload gambar baru jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($destinasi->gambar && file_exists(public_path('uploads/destinasi/' . $destinasi->gambar))) {
                unlink(public_path('uploads/destinasi/' . $destinasi->gambar));
            }

            // Upload gambar baru
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/destinasi'), $filename);
            $data['gambar'] = $filename;
        } else {
            $data['gambar'] = $destinasi->gambar;
        }

        $destinasi->update($data);

        return redirect('/')
            ->with('success', 'Destinasi wisata berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destinasi = DestinasiWisata::findOrFail($id);

        // Hapus gambar
        if ($destinasi->gambar && file_exists(public_path('uploads/destinasi/' . $destinasi->gambar))) {
            unlink(public_path('uploads/destinasi/' . $destinasi->gambar));
        }

        $destinasi->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Destinasi wisata berhasil dihapus!');
    }
}
