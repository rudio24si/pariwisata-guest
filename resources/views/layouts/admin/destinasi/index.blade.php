<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Destinasi Wisata</title>
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
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .destinasi-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }

        .badge-price {
            background-color: #ffc107;
            color: #000;
            font-size: 1rem;
            padding: 0.5rem 1rem;
        }

        .action-buttons .btn {
            margin: 0 0.2rem;
        }
    </style>
</head>

<body>
    <div class="header-section">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="mb-0"><i class="fas fa-map-marked-alt"></i> Destinasi Wisata</h1>
                    <p class="mb-0 mt-2">Kelola data destinasi wisata Anda</p>
                </div>
                <a href="{{ route('destinasi.create') }}" class="btn btn-light btn-lg">
                    <i class="fas fa-plus"></i> Tambah Destinasi
                </a>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        @if($destinasi->count() > 0)
        <div class="row">
            @foreach($destinasi as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($item->gambar)
                    <img src="{{ asset('uploads/destinasi/' . $item->gambar) }}" class="destinasi-img" alt="{{ $item->nama }}">
                    @else
                    <img src="https://via.placeholder.com/400x200?text=No+Image" class="destinasi-img" alt="No Image">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $item->nama }}</h5>
                        <p class="card-text text-muted">
                            <i class="fas fa-map-marker-alt"></i> {{ $item->alamat }}
                            @if($item->rt && $item->rw)
                            RT {{ $item->rt }}/RW {{ $item->rw }}
                            @endif
                        </p>
                        <p class="card-text">{{ Str::limit($item->deskripsi, 100) }}</p>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge badge-price">
                                <i class="fas fa-ticket-alt"></i> Rp {{ number_format($item->tiket, 0, ',', '.') }}
                            </span>
                            <span class="text-muted">
                                <i class="fas fa-clock"></i> {{ $item->jam_buka }}
                            </span>
                        </div>

                        <div class="action-buttons d-flex gap-2">
                            <a href="{{ route('destinasi.show', $item->destinasi_id) }}" class="btn btn-info btn-sm flex-fill">
                                <i class="fas fa-eye"></i> Detail
                            </a>
                            <a href="{{ route('destinasi.edit', $item->destinasi_id) }}" class="btn btn-warning btn-sm flex-fill">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('destinasi.destroy', $item->destinasi_id) }}" method="POST" class="d-inline flex-fill" onsubmit="return confirm('Yakin ingin menghapus destinasi ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm w-100">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $destinasi->links() }}
        </div>
        @else
        <div class="text-center py-5">
            <i class="fas fa-map-marked-alt fa-5x text-muted mb-3"></i>
            <h3 class="text-muted">Belum ada destinasi wisata</h3>
            <p class="text-muted">Klik tombol "Tambah Destinasi" untuk menambahkan data baru</p>
            <a href="{{ route('destinasi.create') }}" class="btn btn-primary btn-lg mt-3">
                <i class="fas fa-plus"></i> Tambah Destinasi Pertama
            </a>
        </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>