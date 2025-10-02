<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinasiWisataController extends Controller
{
    /**
     * Display a listing of the resource.s
     */
    public function index()
    {
        $profilDesa = [
            'nama' => 'Desa Wisata',
            'deskripsi' => 'Desa wisata yang menawarkan keindahan alam dan budaya lokal.',
            'gambar' => 'desa.jpg',
        ];

        $objekWisata = [
            [
                'nama' => 'Pantai Indah',
                'deskripsi' => 'Pantai dengan pasir putih dan air jernih.',
                'gambar' => 'homestay.jpg',
            ],
            [
                'nama' => 'Gunung Hijau',
                'deskripsi' => 'Gunung dengan pemandangan yang menakjubkan.',
                'gambar' => 'homestay.jpg',
            ],
            [
                'nama' => 'Air Terjun Segar',
                'deskripsi' => 'Air terjun yang menyegarkan di tengah hutan.',
                'gambar' => 'homestay.jpg',
            ],
        ];
        return view('index', compact('profilDesa', 'objekWisata'));
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
