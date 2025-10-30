<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pemandu Lokal</title>
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
            margin-bottom: 1.5rem;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .warga-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }

        .badge-status {
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
        }

        .action-buttons .btn {
            margin: 0 0.2rem;
        }

        .info-text {
            color: #666;
            font-size: 0.9rem;
        }

        .table-responsive {
            border-radius: 10px;
            overflow: hidden;
        }

        .table thead {
            background-color: var(--primary-color);
            color: white;
        }

        .table tbody tr:hover {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
    <div class="header-section">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="mb-0"><i class="fas fa-users"></i> Pemandu Lokal</h1>
                    <p class="mb-0 mt-2">Kelola data pemandu wisata lokal</p>
                </div>
                <a href="{{ route('warga.create') }}" class="btn btn-light btn-lg">
                    <i class="fas fa-plus"></i> Tambah Pemandu
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

        @if($warga->count() > 0)
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="10%">Foto</th>
                                <th width="20%">Nama</th>
                                <th width="15%">Kontak</th>
                                <th width="15%">Pekerjaan</th>
                                <th width="12%">Pengalaman</th>
                                <th width="8%">Status</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($warga as $index => $item)
                            <tr>
                                <td class="align-middle">{{ $warga->firstItem() + $index }}</td>
                                <td class="align-middle">
                                    @if($item->foto)
                                    <img src="{{ asset('uploads/warga/' . $item->foto) }}"
                                        class="warga-img" alt="{{ $item->nama }}">
                                    @else
                                    <img src="https://ui-avatars.com/api/?name={{ urlencode($item->nama) }}&size=100&background=2E8B57&color=fff"
                                        class="warga-img" alt="{{ $item->nama }}">
                                    @endif
                                </td>
                                <td class="align-middle">
                                    <strong>{{ $item->nama }}</strong><br>
                                    <small class="text-muted">
                                        <i class="fas fa-id-card"></i> {{ $item->no_ktp }}
                                    </small>
                                </td>
                                <td class="align-middle">
                                    <i class="fas fa-phone text-primary"></i> {{ $item->telp }}<br>
                                    @if($item->email)
                                    <small class="text-muted">
                                        <i class="fas fa-envelope"></i> {{ $item->email }}
                                    </small>
                                    @endif
                                </td>
                                <td class="align-middle">
                                    {{ $item->pekerjaan }}<br>
                                    @if($item->bahasa)
                                    <small class="text-muted">
                                        <i class="fas fa-language"></i> {{ $item->bahasa }}
                                    </small>
                                    @endif
                                </td>
                                <td class="align-middle">
                                    @if($item->pengalaman)
                                    <span class="badge bg-info">
                                        <i class="fas fa-medal"></i> {{ $item->pengalaman }}
                                    </span>
                                    @else
                                    <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td class="align-middle">
                                    @if($item->status == 'Aktif')
                                    <span class="badge bg-success badge-status">
                                        <i class="fas fa-check-circle"></i> Aktif
                                    </span>
                                    @else
                                    <span class="badge bg-secondary badge-status">
                                        <i class="fas fa-times-circle"></i> Tidak Aktif
                                    </span>
                                    @endif
                                </td>
                                <td class="align-middle">
                                    <div class="action-buttons">
                                        <a href="{{ route('warga.show', $item->warga_id) }}"
                                            class="btn btn-info btn-sm" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('warga.edit', $item->warga_id) }}"
                                            class="btn btn-warning btn-sm" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('warga.destroy', $item->warga_id) }}"
                                            method="POST" class="d-inline"
                                            onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Hapus">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $warga->links() }}
        </div>
        @else
        <div class="text-center py-5">
            <i class="fas fa-users fa-5x text-muted mb-3"></i>
            <h3 class="text-muted">Belum ada data pemandu lokal</h3>
            <p class="text-muted">Klik tombol "Tambah Pemandu" untuk menambahkan data baru</p>
            <a href="{{ route('warga.create') }}" class="btn btn-primary btn-lg mt-3">
                <i class="fas fa-plus"></i> Tambah Pemandu Pertama
            </a>
        </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>