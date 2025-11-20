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
                                        <h1 class="inner-headline__title">Tambah Booking Baru</h1>
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
                        <form action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- Warga --}}
                            <div class="mb-3">
                                <label class="form-label">Pilih Warga <span class="text-danger">*</span></label>
                                <select name="warga_id" class="form-select @error('warga_id') is-invalid @enderror"
                                    required>
                                    <option value="">-- Pilih Warga --</option>
                                    @foreach ($warga as $w)
                                        <option value="{{ $w->warga_id }}">{{ $w->nama }} ({{ $w->no_ktp }})</option>
                                    @endforeach
                                </select>
                                @error('warga_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Homestay --}}
                            <div class="mb-3">
                                <label class="form-label">Pilih Homestay <span class="text-danger">*</span></label>
                                <select id="homestaySelect" class="form-select">
                                    <option value="">-- Pilih Homestay --</option>
                                    @foreach ($homestay as $h)
                                        <option value="{{ $h->homestay_id }}">{{ $h->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Kamar --}}
                            <div class="mb-3">
                                <label class="form-label">Pilih Kamar <span class="text-danger">*</span></label>
                                <select name="kamar_id" id="kamarSelect"
                                    class="form-select @error('kamar_id') is-invalid @enderror" required>
                                    <option value="">-- Pilih Kamar --</option>

                                    @foreach ($kamar as $k)
                                        <option value="{{ $k->kamar_id }}" data-harga="{{ $k->harga }}">
                                            {{ $k->nama_kamar }} — Rp{{ number_format($k->harga) }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('kamar_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Check-in --}}
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Check-in <span class="text-danger">*</span></label>
                                    <input type="date" name="checkin" id="checkin" class="form-control" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Check-out <span class="text-danger">*</span></label>
                                    <input type="date" name="checkout" id="checkout" class="form-control" required>
                                </div>
                            </div>

                            {{-- Total --}}
                            <div class="mb-3">
                                <label class="form-label">Total Pembayaran (Rp)</label>
                                <input type="number" name="total" id="total" class="form-control" readonly>
                            </div>

                            {{-- Metode bayar --}}
                            <div class="mb-3">
                                <label class="form-label">Metode Pembayaran <span class="text-danger">*</span></label>
                                <select name="metode_bayar" class="form-select" required>
                                    <option value="transfer">Transfer Bank</option>
                                    <option value="cash">Cash</option>
                                </select>
                            </div>

                            {{-- Bukti bayar --}}
                            <div class="mb-3">
                                <label class="form-label">Upload Bukti Pembayaran <span class="text-danger">*</span></label>
                                <input type="file" name="bukti_bayar" class="form-control" accept="image/*" required>
                                <div class="form-text">jpg / png / max 2MB</div>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan Booking</button>
                            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Batal</a>
                        </form>

                    </div>
                </div>
                <!-- Block - Form End -->
            </div>
        </div>
        <!-- Section - Form Content End -->
    </main>
    <!-- Page Content End -->

    <style>
        .booking-form {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .form-label {
            margin-bottom: 8px;
            color: #2c3e50;
            font-size: 15px;
        }

        .custom-select-wrapper {
            position: relative;
        }

        .custom-select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            padding: 12px 16px;
            border: 1px solid #e1e5e9;
            border-radius: 8px;
            background-color: #fff;
            font-size: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.03);
            cursor: pointer;
        }

        .custom-select:focus {
            border-color: #4361ee;
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.15);
            outline: none;
        }

        .select-arrow {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            color: #6c757d;
            transition: transform 0.3s ease;
        }

        .custom-select:focus+.select-arrow {
            transform: translateY(-50%) rotate(180deg);
        }

        .date-input-group {
            position: relative;
            margin-bottom: 8px;
        }

        .date-input {
            padding: 12px 16px;
            border: 1px solid #e1e5e9;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
            background-color: white;
            color: #2c3e50;
        }

        .date-input:focus {
            border-color: #4361ee;
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.15);
            outline: none;
        }

        .date-icon {
            background-color: #f8f9fa;
            border: 1px solid #e1e5e9;
            border-left: none;
            color: #6c757d;
            cursor: pointer;
        }

        .date-input:focus+.date-icon {
            border-color: #4361ee;
        }

        .selected-date {
            padding: 8px 12px;
            background-color: #f8f9fa;
            border: 1px solid #e1e5e9;
            border-radius: 6px;
            font-size: 14px;
            color: #495057;
            margin-top: 5px;
            min-height: 36px;
            display: flex;
            align-items: center;
        }

        /* Styling untuk browser yang support input date */
        .date-input::-webkit-calendar-picker-indicator {
            background: transparent;
            bottom: 0;
            color: transparent;
            cursor: pointer;
            height: auto;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            width: auto;
        }

        /* Fallback untuk browser yang tidak support input date dengan baik */
        .date-input-group.fallback .date-input {
            padding-right: 40px;
        }

        .date-input-group.fallback .date-icon {
            pointer-events: none;
        }

        .total-input {
            padding: 12px 16px;
            background-color: #f8f9fa;
            border: 1px solid #e1e5e9;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            color: #2c3e50;
        }

        .file-upload-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
            width: 100%;
        }

        .file-input {
            position: absolute;
            left: -9999px;
            opacity: 0;
        }

        .file-upload-label {
            display: block;
            padding: 12px 20px;
            background: #f8f9fa;
            border: 2px dashed #dee2e6;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            color: #6c757d;
        }

        .file-upload-label:hover {
            background: #e9ecef;
            border-color: #4361ee;
            color: #4361ee;
        }

        .file-text {
            margin-left: 8px;
        }

        .btn-primary {
            background-color: #4361ee;
            border-color: #4361ee;
            padding: 12px 24px;
            font-weight: 600;
            border-radius: 8px;
        }

        .btn-primary:hover {
            background-color: #3a56d4;
            border-color: #3a56d4;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(67, 97, 238, 0.3);
        }

        .btn-outline-secondary {
            padding: 12px 24px;
            font-weight: 600;
            border-radius: 8px;
        }

        .inner-headline__title {
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        @media (max-width: 768px) {
            .booking-form {
                padding: 20px;
            }

            .d-flex {
                flex-direction: column;
            }

            .d-flex .btn {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const kamarSelect = document.getElementById('kamarSelect');
            const checkin = document.getElementById('checkin');
            const checkout = document.getElementById('checkout');
            const total = document.getElementById('total');

            function hitungTotal() {

                const harga = parseInt(kamarSelect.selectedOptions[0]?.dataset.harga || 0);
                if (!harga || !checkin.value || !checkout.value) {
                    total.value = "";
                    return;
                }

                const t1 = new Date(checkin.value);
                const t2 = new Date(checkout.value);

                const malam = (t2 - t1) / 86400000;

                total.value = malam > 0 ? malam * harga : "";
            }

            kamarSelect.onchange = hitungTotal;
            checkin.onchange = hitungTotal;
            checkout.onchange = hitungTotal;
        });
    </script>
@endpush