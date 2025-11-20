@extends('layouts.guest.app')

@section('content')
    <main id="mxd-page-content" class="mxd-page-content inner-page-content">

        <!-- Judul Halaman -->
        <div class="mxd-section mxd-section-inner-headline padding-default">
            <div class="mxd-container grid-container">
                <div class="container-fluid px-0">
                    <div class="row gx-0">
                        <div class="col-12 col-xl-10 no-margin">
                            <h1 class="inner-headline__title">Tambah Booking Homestay</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FORM -->
        <div class="mxd-section mxd-section-inner-headline padding-default">
            <div class="mxd-container grid-container">
                <div class="container-fluid px-0">

                    <form action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Data Warga -->
                        <div class="mb-3">
                            <label class="form-label">Pilih Warga <span class="text-danger">*</span></label>
                            <select name="warga_id" class="form-control @error('warga_id') is-invalid @enderror" required>
                                <option value="">-- Pilih Warga --</option>
                                @foreach ($warga as $w)
                                    <option value="{{ $w->warga_id }}">{{ $w->nama }} ({{ $w->no_ktp }})</option>
                                @endforeach
                            </select>
                            @error('warga_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Homestay -->
                        <div class="mb-3">
                            <label class="form-label">Pilih Homestay <span class="text-danger">*</span></label>
                            <select id="homestaySelect" class="form-control" required>
                                <option value="">-- Pilih Homestay --</option>
                                @foreach ($homestay as $h)
                                    <option value="{{ $h->homestay_id }}">{{ $h->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Kamar -->
                        <div class="mb-3">
                            <label class="form-label">Pilih Kamar <span class="text-danger">*</span></label>
                            <select name="kamar_id" id="kamarSelect"
                                class="form-control @error('kamar_id') is-invalid @enderror" required>
                                <option value="">-- Pilih Kamar --</option>
                            </select>
                            @error('kamar_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Checkin & Checkout -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Check-in <span class="text-danger">*</span></label>
                                <input type="date" id="checkin" name="checkin" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Check-out <span class="text-danger">*</span></label>
                                <input type="date" id="checkout" name="checkout" class="form-control" required>
                            </div>
                        </div>

                        <!-- Total -->
                        <div class="mb-3">
                            <label class="form-label">Total Pembayaran (Rp)</label>
                            <input type="number" id="total" name="total" class="form-control" readonly>
                        </div>

                        <!-- Metode Bayar -->
                        <div class="mb-3">
                            <label class="form-label">Metode Pembayaran <span class="text-danger">*</span></label>
                            <select name="metode_bayar" class="form-control" required>
                                <option value="transfer">Transfer Bank</option>
                                <option value="cash">Cash</option>
                            </select>
                        </div>

                        <!-- Bukti Bayar -->
                        <div class="mb-3">
                            <label class="form-label">Upload Bukti Pembayaran <span class="text-danger">*</span></label>
                            <input type="file" name="bukti_bayar" class="form-control" accept="image/*" required>
                            <div class="form-text">jpg / png / max 2MB</div>
                        </div>

                        <div class="d-flex gap-3 mt-5">
                            <button type="submit" class="btn btn-anim btn-default btn-accent slide-right-up">
                                <span class="btn-caption">Simpan Booking</span>
                                <i class="ph-bold ph-plus"></i>
                            </button>

                            <a href="{{ route('dashboard') }}" class="btn btn-anim btn-default btn-outline slide-right-up">
                                <span class="btn-caption">Batal</span>
                                <i class="ph-bold ph-x"></i>
                            </a>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </main>

@endsection

@push('scripts')
    <script>
        // AJAX untuk load kamar berdasarkan homestay
        document.getElementById('homestaySelect').addEventListener('change', function () {
            let homestayId = this.value;

            fetch('/booking/get-kamar/' + homestayId)
                .then(response => response.json())
                .then(data => {
                    let kamarSelect = document.getElementById('kamarSelect');
                    kamarSelect.innerHTML = '<option value="">-- Pilih Kamar --</option>';

                    data.forEach(k => {
                        kamarSelect.innerHTML += `<option value="${k.kamar_id}" data-harga="${k.harga_per_malam}">${k.nama_kamar} (Rp ${k.harga_per_malam})</option>`;
                    });
                });
        });

        // Hitung total otomatis
        document.getElementById('kamarSelect').addEventListener('change', hitungTotal);
        document.getElementById('checkin').addEventListener('change', hitungTotal);
        document.getElementById('checkout').addEventListener('change', hitungTotal);

        function hitungTotal() {
            let kamar = document.getElementById('kamarSelect');
            let harga = kamar.options[kamar.selectedIndex]?.dataset?.harga || 0;

            let checkin = new Date(document.getElementById('checkin').value);
            let checkout = new Date(document.getElementById('checkout').value);

            if (!harga || !checkin || !checkout) return;

            let selisihHari = (checkout - checkin) / (1000 * 3600 * 24);

            if (selisihHari > 0) {
                document.getElementById('total').value = selisihHari * harga;
            }
        }
    </script>
@endpush