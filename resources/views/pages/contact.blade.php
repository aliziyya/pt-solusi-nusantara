@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">
        <h2 class="fw-bold" style="color: #0756a5;">
            Hubungi Kami
        </h2>
        <p class="text-secondary">
            Silakan kirim pesan atau pertanyaan kepada kami.
        </p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-7">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    Mohon periksa kembali data yang dimasukkan.
                </div>
            @endif

            <div class="card shadow-sm border-0">
                <div class="card-body p-4">

                    <form action="/contact" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control"
                                value="{{ old('nama') }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control"
                                value="{{ old('email') }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nomor Telepon</label>
                            <input type="text" name="no_telepon" class="form-control"
                                value="{{ old('no_telepon') }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Pesan</label>
                            <textarea name="pesan" class="form-control" rows="5"
                                required>{{ old('pesan') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Kirim Pesan
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection