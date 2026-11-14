
@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-sm border-0">
                <div class="card-body p-4">

                    <h3 class="text-center fw-bold mb-2" style="color: #0756a5;">
                        Register
                    </h3>

                    <p class="text-center text-secondary mb-4">
                        Buat akun untuk mulai berlangganan internet.
                    </p>

                    <form action="/register" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control"
                                value="{{ old('name') }}" required>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control"
                                value="{{ old('email') }}" required>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation"
                                class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Daftar
                        </button>
                    </form>

                    <p class="text-center mt-3 mb-0">
                        Sudah punya akun?
                        <a href="/login">Login</a>
                    </p>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
