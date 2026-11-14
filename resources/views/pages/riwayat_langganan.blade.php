
@extends('layouts.app')

@section('title', 'Riwayat Langganan')

@section('content')

<div class="container py-5">
    <div class="mb-4">
        <h2 class="fw-bold" style="color: #0756a5;">Riwayat Langganan</h2>
        <p class="text-secondary">Lihat status pengajuan dan perkembangan langganan internet kamu.</p>
    </div>

    @forelse ($langganans as $langganan)
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-4">

                <div class="d-flex justify-content-between align-items-start flex-wrap gap-3">
                    <div>
                        <h5 class="fw-bold mb-1">{{ $langganan->product->name }}</h5>
                        <p class="text-secondary mb-1">
                            Kecepatan: {{ $langganan->product->speed }}
                        </p>
                        <p class="text-secondary mb-0">
                            Tanggal pengajuan:
                            {{ $langganan->created_at->format('d M Y, H:i') }}
                        </p>
                    </div>

                    <div>
                        <small class="text-secondary d-block">Status Terbaru</small>
                        <span class="badge bg-primary fs-6">
                            {{ $langganan->status }}
                        </span>
                    </div>
                </div>

                <hr>

                <h6 class="fw-bold mb-3">Riwayat Perubahan Status</h6>

                @forelse ($langganan->riwayatStatus as $riwayat)
                    <div class="d-flex gap-3 mb-3">
                        <div>
                            <span class="d-inline-block rounded-circle bg-primary"
                                style="width: 12px; height: 12px; margin-top: 5px;"></span>
                        </div>

                        <div>
                            <div class="fw-semibold">{{ $riwayat->status }}</div>
                            <small class="text-secondary">
                                {{ $riwayat->created_at->format('d M Y, H:i') }}
                            </small>
                        </div>
                    </div>
                @empty
                    <p class="text-secondary">Belum ada riwayat perubahan status.</p>
                @endforelse

            </div>
        </div>
    @empty
        <div class="card border-0 shadow-sm">
            <div class="card-body text-center py-5">
                <h5 class="fw-bold">Belum Ada Pengajuan</h5>
                <p class="text-secondary">Kamu belum memiliki riwayat langganan internet.</p>
                <a href="{{ url('/produk') }}" class="btn btn-primary">
                    Lihat Paket Internet
                </a>
            </div>
        </div>
    @endforelse
</div>

@endsection
