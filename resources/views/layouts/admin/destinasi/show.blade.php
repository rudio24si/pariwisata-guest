<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Destinasi - {{ $destinasi->nama }}</title>
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

        .header-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 0 0 20px 20px;
        }

        .content-section {
            margin-top: -50px;
            position: relative;
            z-index: 10;
        }

        .info-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 2rem;
        }

        .destinasi-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 1rem;
        }

        .info-box {
            background: linear-gradient(135deg, var(--primary-color), #3CB371);
            color: white;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .info-item {
            display: flex;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-icon {
            width: 40px;
            height: 40px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
        }

        .info-label {
            font-weight: 600;
            color: #666;
            min-width: 150px;
        }

        .info-value {
            color: #333;
            font-weight: 500;
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

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 20;
            background: white;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            text-decoration: none;
            color: var(--primary-dark);
        }

        .back-button:hover {
            background: var(--primary-color);
            color: white;
        }

        .badge-price {
            background-color: #ffc107;
            color: #000;
            font-size: 1.5rem;
            padding: 1rem 1.5rem;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="position-relative">
        <a href="{{ route('destinasi.index') }}" class="back-button">
            <i class="fas fa-arrow-left fa-lg"></i>
        </a>

        @if($destinasi->gambar)
        <img src="{{ asset('uploads/destinasi/' . $destinasi->gambar) }}"
            class="header-image" alt="{{ $destinasi->nama }}">
        @else
        <img src="https://via.placeholder.com/1200x400?text=No+Image"
            class="header-image" alt="No Image">
        @endif
    </div>

    <div class="container content-section mb-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="info-card">
                    <h1 class="destinasi-title">{{ $destinasi->nama }}</h1>

                    <div class="info-box mb-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-1"><i class="fas fa-ticket-alt"></i> Harga Tiket</h5>
                                <h2 class="mb-0">Rp {{ number_format($destinasi->tiket, 0, ',', '.') }}</h2>
                            </div>
                            <div class="text-end">
                                <h5 class="mb-1"><i class="fas fa-clock"></i> Jam Buka</h5>
                                <h4 class="mb-0">{{ $destinasi->jam_buka }}</h4>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h4 class="mb-3"><i class="fas fa-info-circle text-primary"></i> Deskripsi</h4>
                        <p class="text-justify" style="line-height: 1.8; font-size: 1.1rem;">
                            {{ $destinasi->deskripsi }}
                        </p>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="info-label">Alamat</div>
                            <div class="info-value">
                                {{ $destinasi->alamat }}
                                @if($destinasi->rt && $destinasi->rw)
                                <br><small class="text-muted">RT {{ $destinasi->rt }} / RW {{ $destinasi->rw }}</small>
                                @endif
                            </div>
                        </div>
                    </div>

                    @if($destinasi->kontak)
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="info-label">Kontak</div>
                            <div class="info-value">
                                <a href="tel:{{ $destinasi->kontak }}" class="text-decoration-none">
                                    {{ $destinasi->kontak }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="info-label">Terakhir Diupdate</div>
                            <div class="info-value">
                                {{ $destinasi->updated_at->format('d F Y, H:i') }} WIB
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-2 mt-4">
                    <a href="{{ route('destinasi.edit', $destinasi->destinasi_id) }}" class="btn btn-warning btn-lg">
                        <i class="fas fa-edit"></i> Edit Destinasi
                    </a>
                    <form action="{{ route('destinasi.destroy', $destinasi->destinasi_id) }}" method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus destinasi ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-lg">
                            <i class="fas fa-trash"></i> Hapus Destinasi
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="info-card sticky-top" style="top: 20px;">
                    <h5 class="mb-3"><i class="fas fa-map"></i> Lokasi</h5>
                    <div class="ratio ratio-16x9 mb-3">
                        <iframe
                            src="https://www.google.com/maps?q={{ urlencode($destinasi->alamat) }}&output=embed"
                            style="border:0; border-radius: 10px;"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    </div>
                    <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($destinasi->alamat) }}"
                        target="_blank" class="btn btn-primary w-100">
                        <i class="fas fa-directions"></i> Buka di Google Maps
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>