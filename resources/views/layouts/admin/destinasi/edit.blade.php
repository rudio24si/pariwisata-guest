<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Destinasi Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2E8B57;
            --primary-dark: #1F5E3D;
        }

        body {
            background-color: #f8f9fa;
        }

        .header-section {
            background: linear-gradient(135deg, var(--primary-color), #3CB371);
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: 600;
            color: #333;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(46, 139, 87, 0.25);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 0.75rem 2rem;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }

        .image-preview {
            max-width: 300px;
            margin-top: 10px;
            border-radius: 8px;
            display: none;
        }

        .required {
            color: red;
        }
    </style>
</head>

<body>
    <div class="header-section">
        <div class="container">
            <div class="d-flex align-items-center">
                <a href="{{ route('destinasi.index') }}" class="btn btn-light me-3">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <div>
                    <h1 class="mb-0"><i class="fas fa-plus-circle"></i> Edit Destinasi Wisata</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body p-4">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <h6 class="alert-heading"><i class="fas fa-exclamation-triangle"></i> Terdapat kesalahan:</h6>
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('destinasi.update', $destinasi->destinasi_id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Destinasi <span class="required">*</span></label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    id="nama" name="nama" value="{{ $destinasi->nama }}"
                                    placeholder="Contoh: Pantai Kuta" required>
                                @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi <span class="required">*</span></label>
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror"
                                    id="deskripsi" name="deskripsi" rows="4"
                                    placeholder="Jelaskan tentang destinasi wisata ini..." required>{{$destinasi->deskripsi}}</textarea>
                                @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-8 mb-3">
                                    <label for="alamat" class="form-label">Alamat <span class="required">*</span></label>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                        id="alamat" name="alamat" value="{{ $destinasi->alamat}}"
                                        placeholder="Contoh: Jl. Pantai Kuta No. 123" required>
                                    @error('alamat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="rt" class="form-label">RT</label>
                                    <input type="text" class="form-control @error('rt') is-invalid @enderror"
                                        id="rt" name="rt" value="{{ $destinasi->rt}}" placeholder="001">
                                    @error('rt')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="rw" class="form-label">RW</label>
                                    <input type="text" class="form-control @error('rw') is-invalid @enderror"
                                        id="rw" name="rw" value="{{ $destinasi->rw}}" placeholder="002">
                                    @error('rw')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="jam_buka" class="form-label">Jam Buka <span class="required">*</span></label>
                                    <input type="text" class="form-control @error('jam_buka') is-invalid @enderror"
                                        id="jam_buka" name="jam_buka" value="{{$destinasi->jam_buka}}"
                                        placeholder="Contoh: 08:00 - 17:00" required>
                                    @error('jam_buka')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="tiket" class="form-label">Harga Tiket (Rp) <span class="required">*</span></label>
                                    <input type="number" class="form-control @error('tiket') is-invalid @enderror"
                                        id="tiket" name="tiket" value="{{$destinasi->tiket}}"
                                        placeholder="50000" min="0" step="1000" required>
                                    @error('tiket')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="kontak" class="form-label">Kontak</label>
                                <input type="text" class="form-control @error('kontak') is-invalid @enderror"
                                    id="kontak" name="kontak" value="{{$destinasi->kontak}}"
                                    placeholder="Contoh: 0812-3456-7890">
                                @error('kontak')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="gambar" class="form-label">
                                    Foto Destinasi <span class="required">*</span>
                                </label>

                                <input
                                    type="file"
                                    class="form-control @error('gambar') is-invalid @enderror"
                                    id="gambar"
                                    name="gambar"
                                    accept="image/*"
                                    onchange="previewImage(this)">
                                <small class="text-muted">Format: JPG, PNG, GIF. Maksimal 2MB</small>

                                @error('gambar')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                {{-- ✅ Preview gambar lama --}}
                                @if(!empty($destinasi->gambar))
                                <div class="mt-3">
                                    <p class="text-muted mb-1">Gambar saat ini:</p>
                                    <img
                                        src="{{ asset('uploads/destinasi/' . $destinasi->gambar) }}"
                                        alt="Foto Destinasi Lama"
                                        class="image-preview"
                                        style="max-width: 200px; border-radius: 8px;">
                                </div>
                                @endif

                                {{-- ✅ Preview gambar baru --}}
                                <img id="preview" class="image-preview mt-2" alt="Preview" style="max-width: 200px; display: none; border-radius: 8px;">
                            </div>


                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Simpan Destinasi
                                </button>
                                <a href="{{ route('indexAdmin') }}" class="btn btn-secondary">
                                    <i class="fas fa-times"></i> Batal
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function previewImage(input) {
            const preview = document.getElementById('preview');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>

</html>