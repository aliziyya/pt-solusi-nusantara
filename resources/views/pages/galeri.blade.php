
@extends('layouts.app')

@section('title', 'Galeri')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">
        <h2 class="fw-bold" style="color: #0756a5;">
            Galeri
        </h2>

        <p class="text-secondary">
            Dokumentasi kegiatan dan layanan PT Solusi Net Nusantara.
        </p>
    </div>

    <div class="row">

        @forelse ($galeris as $galeri)

        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card h-100 shadow-sm">

                @if ($galeri->foto)
                    <img src="{{ asset('storage/' . $galeri->foto) }}"
                        class="card-img-top"
                        alt="{{ $galeri->judul }}"
                        onerror="this.onerror=null; this.src='{{ asset('image/no-image.png') }}';"
                        style="height: 130px; width: 100%; object-fit: cover;">
                @else
                    <img src="{{ asset('image/no-image.png') }}"
                        class="card-img-top"
                        alt="Foto tidak tersedia"
                        style="height: 130px; width: 100%; object-fit: cover;">
                @endif

                <div class="card-body">

                    <h6 class="fw-bold">
                        {{ $galeri->judul }}
                    </h6>

                    <p class="small">
                        <span id="ringkas-{{ $galeri->id }}">
                            {{ \Illuminate\Support\Str::limit($galeri->deskripsi, 100) }}
                        </span>

                        <span id="lengkap-{{ $galeri->id }}" style="display: none;">
                            {{ $galeri->deskripsi }}
                        </span>
                    </p>

                    @if (strlen($galeri->deskripsi ?? '') > 100)
                        <button
                            type="button"
                            class="btn btn-link btn-sm p-0 text-decoration-none"
                            onclick="bacaGaleri({{ $galeri->id }}, this)">
                            Baca Selengkapnya
                        </button>
                    @endif

                </div>
            </div>
        </div>

        @empty

        <div class="col-12 text-center">
            <p class="text-secondary">
                Belum ada foto galeri tersedia.
            </p>
        </div>

        @endforelse

    </div>

</div>

<script>
    function bacaGaleri(id, tombol) {
        const ringkas = document.getElementById('ringkas-' + id);
        const lengkap = document.getElementById('lengkap-' + id);

        if (lengkap.style.display === 'none') {
            ringkas.style.display = 'none';
            lengkap.style.display = 'inline';
            tombol.innerText = 'Tampilkan Lebih Sedikit';
        } else {
            ringkas.style.display = 'inline';
            lengkap.style.display = 'none';
            tombol.innerText = 'Baca Selengkapnya';
        }
    }
</script>

@endsection
