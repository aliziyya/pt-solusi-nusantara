
@extends('layouts.app')

@section('title', 'Produk')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">
        <h2 class="fw-bold" style="color: #0756a5;">
            Paket Internet
        </h2>
        <p class="text-secondary">
            Pilih paket internet sesuai kebutuhan Anda.
        </p>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">

        @forelse ($products as $product)

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">

                @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}"
                        class="card-img-top"
                        alt="{{ $product->name }}"
                        style="height: 220px; object-fit: contain; padding: 15px;">
                @endif

                <div class="card-body text-center">

                    <h5 class="fw-bold">
                        {{ $product->name }}
                    </h5>

                    <h3 class="fw-bold my-3" style="color: #0756a5;">
                        {{ $product->speed }}
                    </h3>

                    <h5 class="text-primary">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </h5>

                    <p class="text-secondary">
                        {{ $product->description }}
                    </p>

                    @auth
                        <a href="{{ url('/langganan/' . $product->id) }}"
                            class="btn btn-primary w-100">
                            Berlangganan
                        </a>
                    @else
                        <a href="/login" class="btn btn-primary w-100">
                            Berlangganan
                        </a>
                    @endauth

                </div>
            </div>
        </div>

        @empty

        <div class="col-12 text-center">
            <p class="text-secondary">
                Belum ada paket internet tersedia.
            </p>
        </div>

        @endforelse

    </div>

</div>
@endsection
