
@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-sm border-0">
                <div class="card-body p-4">

                    <h3 class="text-center fw-bold mb-2" style="color: #0756a5;">
                        Login
                    </h3>

                    <p class="text-center text-secondary mb-4">
                        Masuk ke akun PT Solusi Net Nusantara.
                    </p>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="/login" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control"
                                value="{{ old('email') }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password"
                                class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Login
                        </button>
                    </form>

                    <p class="text-center mt-3 mb-0">
                        Belum punya akun?
                        <a href="/register">Register</a>
                    </p>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
