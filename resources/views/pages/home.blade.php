@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container py-5">
    <div class="row align-items-center">

        <div class="col-md-6">
            <h1 class="fw-bold mb-3" style="color: #0756a5;">
                Internet Cepat untuk Semua Kebutuhan
            </h1>

            <p class="text-secondary mb-4">
                Nikmati koneksi internet cepat dan stabil
                bersama PT Solusi Net Nusantara.
                Mendukung aktivitas belajar, bekerja,
                dan hiburan setiap hari.
            </p>

            <a href="/produk" class="btn btn-primary px-4">
                Lihat Paket Internet
            </a>
        </div>

        <div class="col-md-6 text-center mt-4 mt-md-0">
            <img src="{{ asset('image/banner.jpeg') }}"
                alt="Internet PT Solusi Net Nusantara"
                class="img-fluid">
        </div>

    </div>
</div>

<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold" style="color: #0756a5;">
            Mengapa Memilih Kami?
        </h2>

        <p class="text-secondary">
            Memberikan layanan internet untuk kebutuhan Anda.
        </p>
    </div>

    <div class="row text-center">

        <div class="col-md-4 mb-4">
            <h5 class="fw-bold">Internet Cepat</h5>
            <p class="text-secondary">
                Koneksi internet untuk mendukung aktivitas sehari-hari.
            </p>
        </div>

        <div class="col-md-4 mb-4">
            <h5 class="fw-bold">Koneksi Stabil</h5>
            <p class="text-secondary">
                Menunjang kebutuhan internet di rumah maupun bisnis.
            </p>
        </div>

        <div class="col-md-4 mb-4">
            <h5 class="fw-bold">Layanan Terpercaya</h5>
            <p class="text-secondary">
                Berusaha memberikan pelayanan terbaik bagi pelanggan.
            </p>
        </div>

    </div>
</div>

@endsection
