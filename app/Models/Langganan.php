<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Langganan extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'nama',
        'email',
        'no_telepon',
        'alamat',
        'metode_pembayaran',
        'bukti_pembayaran',
        'status',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function riwayatStatus(): HasMany
    {
        return $this->hasMany(RiwayatStatusLangganan::class);
    }

    protected static function booted(): void
    {
        static::created(function (Langganan $langganan) {
            $langganan->riwayatStatus()->create([
                'status' => $langganan->status,
            ]);
        });

        static::updated(function (Langganan $langganan) {
            if ($langganan->wasChanged('status')) {
                $langganan->riwayatStatus()->create([
                    'status' => $langganan->status,
                ]);
            }
        });
    }
}
