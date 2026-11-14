
@extends('layouts.app')

@section('title', 'Form Langganan')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card shadow-sm border-0">
                <div class="card-body p-4">

                    <h3 class="fw-bold text-center mb-4" style="color: #0756a5;">
                        Form Langganan Internet
                    </h3>

                    <div class="bg-light rounded p-3 mb-4">
                        <h5 class="fw-bold">{{ $product->name }}</h5>
                        <p class="mb-1">Kecepatan: {{ $product->speed }}</p>
                        <h5 class="text-primary fw-bold">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </h5>
                    </div>

                    <form action="{{ route('langganan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control"
                                value="{{ old('nama', auth()->user()->name) }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control"
                                value="{{ old('email', auth()->user()->email) }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nomor WhatsApp</label>
                            <input type="text" name="no_telepon" class="form-control"
                                value="{{ old('no_telepon') }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Alamat Pemasangan</label>
                            <textarea name="alamat" class="form-control" rows="3" required>{{ old('alamat') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Metode Pembayaran</label>
                            <select name="metode_pembayaran" class="form-select" required>
                                <option value="">Pilih Pembayaran</option>
                                <option value="Transfer Bank">Transfer Bank</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Upload Bukti Pembayaran</label>
                            <input type="file" name="bukti_pembayaran"
                                class="form-control"
                                accept=".jpg,.jpeg,.png"
                                required>
                            <small class="text-secondary">
                                Format JPG, JPEG, PNG. Maksimal 2 MB.
                            </small>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Kirim Pengajuan Langganan
                        </button>

                        <a href="/produk" class="btn btn-outline-secondary w-100 mt-2">
                            Kembali
                        </a>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
