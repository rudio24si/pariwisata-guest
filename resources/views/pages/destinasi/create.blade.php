@extends('layouts.guest.app')

@section('content')
<!-- Page Content Start -->
<main id="mxd-page-content" class="mxd-page-content inner-page-content">
    <!-- Section - Inner Page Headline Start -->
    <div class="mxd-section mxd-section-inner-headline padding-default">
        <div class="mxd-container grid-container">
            <div class="mxd-block loading-wrap">
                <div class="container-fluid px-0">
                    <div class="row gx-0">
                        <div class="col-12 col-xl-10 mxd-grid-item no-margin">
                            <div class="mxd-block__content">
                                <div class="mxd-block__inner-headline loading__item">
                                    <h1 class="inner-headline__title">Tambah Destinasi Baru</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section - Inner Page Headline End -->

    <!-- Section - Form Content Start -->
    <div class="mxd-section mxd-section-inner-headline padding-default">
        <div class="mxd-container grid-container">
            <!-- Block - Form Start -->
            <div class="mxd-block loading-wrap">
                <div class="container-fluid px-0">
                    <!-- Form Action diarahkan ke route 'destinasi.store' dengan method POST -->
                    <form action="{{ route('destinasi.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Tidak perlu @method('PUT') karena ini adalah operasi CREATE (POST) -->

                        <!-- Nama Destinasi -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Destinasi <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                                value="{{ old('nama') }}" placeholder="Contoh: Pantai Kuta" required>
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Deskripsi -->
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi"
                                rows="4" placeholder="Jelaskan tentang destinasi wisata ini..." required>{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Alamat -->
                        <div class="mb-3">
                            <label class="form-label">Alamat <span class="text-danger">*</span></label>
                            <div class="row">
                                <div class="col-md-8 mb-2">
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"
                                        value="{{ old('alamat') }}" placeholder="Jl. Contoh No. 123" required>
                                    @error('alamat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-2 mb-2">
                                    <input type="text" class="form-control @error('rt') is-invalid @enderror" id="rt" name="rt"
                                        value="{{ old('rt') }}" placeholder="RT">
                                    @error('rt')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-2 mb-2">
                                    <input type="text" class="form-control @error('rw') is-invalid @enderror" id="rw" name="rw"
                                        value="{{ old('rw') }}" placeholder="RW">
                                    @error('rw')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Jam Buka & Harga Tiket -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="jam_buka" class="form-label">Jam Buka <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('jam_buka') is-invalid @enderror" id="jam_buka" name="jam_buka"
                                    value="{{ old('jam_buka') }}" placeholder="08:00 - 17:00" required>
                                @error('jam_buka')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="tiket" class="form-label">Harga Tiket (Rp) <span class="text-danger">*</span></label>
                                <input type="number" class="form-control @error('tiket') is-invalid @enderror" id="tiket" name="tiket"
                                    value="{{ old('tiket') }}" placeholder="50000" min="0" step="1000" required>
                                @error('tiket')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Kontak -->
                        <div class="mb-3">
                            <label for="kontak" class="form-label">Kontak</label>
                            <input type="text" class="form-control @error('kontak') is-invalid @enderror" id="kontak" name="kontak"
                                value="{{ old('kontak') }}" placeholder="0812-3456-7890">
                            @error('kontak')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Foto Destinasi -->
                        <div class="mb-4">
                            <label for="gambar" class="form-label">Foto Destinasi <span class="text-danger">*</span></label>
                            <!-- Input gambar diatur required untuk form Tambah -->
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar"
                                accept="image/*" onchange="previewImage(this)" required>
                            <div class="form-text">Format: JPG, PNG, GIF. Maksimal 2MB</div>
                            @error('gambar')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex gap-3 mt-5">
                            <button type="submit" class="btn btn-anim btn-default btn-accent slide-right-up">
                                <span class="btn-caption">Tambah Destinasi</span>
                                <i class="ph-bold ph-plus"></i>
                            </button>
                            <!-- Tombol Batal diarahkan ke halaman index (list destinasi) -->
                            <a href="{{ route('destinasi.index') }}" class="btn btn-anim btn-default btn-outline slide-right-up">
                                <span class="btn-caption">Batal</span>
                                <i class="ph-bold ph-x"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Block - Form End -->
        </div>
    </div>
    <!-- Section - Form Content End -->

</main>

<!-- Page Content End -->
@endsection