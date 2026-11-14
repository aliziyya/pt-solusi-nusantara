@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">
        <h2 class="fw-bold" style="color: #0756a5;">
            Profile Perusahaan
        </h2>
        <p class="text-secondary">
            Mengenal lebih dekat PT Solusi Net Nusantara
        </p>
    </div>

    <div class="row align-items-center">

        <div class="col-md-6 mb-4">
            <img src="{{ asset('image/profile.jpeg') }}"
                alt="PT Solusi Net Nusantara"
                class="img-fluid rounded">
        </div>

        <div class="col-md-6">
            <h3 class="fw-bold mb-3" style="color: #0756a5;">
                PT Solusi Net Nusantara
            </h3>

            <p>
                PT Solusi Net Nusantara merupakan perusahaan
                yang bergerak di bidang penyedia layanan internet.
                Kami hadir untuk membantu memenuhi kebutuhan
                koneksi internet bagi masyarakat.
            </p>

            <p>
                Dengan mengutamakan kualitas layanan dan
                koneksi yang stabil, kami berusaha memberikan
                pengalaman internet yang nyaman bagi pelanggan.
            </p>
        </div>

    </div>

    <div class="row mt-5">

        <div class="col-md-6 mb-4">
            <h4 class="fw-bold" style="color: #0756a5;">Visi</h4>
            <p>
                Menjadi penyedia layanan internet yang
                terpercaya dan mampu memenuhi kebutuhan
                masyarakat.
            </p>
        </div>

        <div class="col-md-6 mb-4">
            <h4 class="fw-bold" style="color: #0756a5;">Misi</h4>
            <p>
                Memberikan layanan internet yang berkualitas,
                meningkatkan pelayanan pelanggan, serta
                mengikuti perkembangan teknologi.
            </p>
        </div>

    </div>

</div>

@endsection
