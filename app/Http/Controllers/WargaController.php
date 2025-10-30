<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $warga = Warga::latest()->paginate(10);
        return view('admin.warga.index', compact('warga'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.warga.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_ktp' => 'required|string|unique:warga,no_ktp|min:16|max:16',
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'agama' => 'required|string',
            'pekerjaan' => 'required|string',
            'telp' => 'required|string|max:20',
            'email' => 'nullable|email|unique:warga,email',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi' => 'nullable|string',
            'pengalaman' => 'nullable|string',
            'bahasa' => 'nullable|string',
            'status' => 'required|in:Aktif,Tidak Aktif',
        ], [
            'no_ktp.required' => 'No KTP wajib diisi',
            'no_ktp.unique' => 'No KTP sudah terdaftar',
            'no_ktp.min' => 'No KTP harus 16 digit',
            'no_ktp.max' => 'No KTP harus 16 digit',
            'nama.required' => 'Nama wajib diisi',
            'jenis_kelamin.required' => 'Jenis kelamin wajib dipilih',
            'agama.required' => 'Agama wajib diisi',
            'pekerjaan.required' => 'Pekerjaan wajib diisi',
            'telp.required' => 'No telepon wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'foto.image' => 'File harus berupa gambar',
            'foto.mimes' => 'Format foto: jpeg, png, jpg',
            'foto.max' => 'Ukuran foto maksimal 2MB',
            'status.required' => 'Status wajib dipilih',
        ]);

        $data = $request->all();

        // Upload foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/warga'), $filename);
            $data['foto'] = $filename;
        }

        Warga::create($data);

        return redirect()->route('indexAdmin')
            ->with('success', 'Data pemandu lokal berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $warga = Warga::findOrFail($id);
        return view('warga.show', compact('warga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $warga = Warga::findOrFail($id);
        return view('warga.edit', compact('warga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $warga = Warga::findOrFail($id);

        $request->validate([
            'no_ktp' => 'required|string|min:16|max:16|unique:warga,no_ktp,' . $id . ',warga_id',
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'agama' => 'required|string',
            'pekerjaan' => 'required|string',
            'telp' => 'required|string|max:20',
            'email' => 'nullable|email|unique:warga,email,' . $id . ',warga_id',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi' => 'nullable|string',
            'pengalaman' => 'nullable|string',
            'bahasa' => 'nullable|string',
            'status' => 'required|in:Aktif,Tidak Aktif',
        ]);

        $data = $request->all();

        // Upload foto baru jika ada
        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if ($warga->foto && file_exists(public_path('uploads/warga/' . $warga->foto))) {
                unlink(public_path('uploads/warga/' . $warga->foto));
            }

            // Upload foto baru
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/warga'), $filename);
            $data['foto'] = $filename;
        } else {
            $data['foto'] = $warga->foto;
        }

        $warga->update($data);

        return redirect()->route('warga.index')
            ->with('success', 'Data pemandu lokal berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $warga = Warga::findOrFail($id);

        // Hapus foto
        if ($warga->foto && file_exists(public_path('uploads/warga/' . $warga->foto))) {
            unlink(public_path('uploads/warga/' . $warga->foto));
        }

        $warga->delete();

        return redirect()->route('warga.index')
            ->with('success', 'Data pemandu lokal berhasil dihapus!');
    }
}