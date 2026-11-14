<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RiwayatStatusLangganan extends Model
{
    protected $fillable = [
        'langganan_id',
        'status',
    ];

    public function langganan(): BelongsTo
    {
        return $this->belongsTo(Langganan::class);
    }
}
