<?php

namespace App\Filament\Resources\Pengaturans\Pages;

use App\Filament\Resources\Pengaturans\PengaturanResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePengaturan extends CreateRecord
{
    protected static string $resource = PengaturanResource::class;

    protected function getRedirectUrl(): string
    {
        return PengaturanResource::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Pengaturan berhasil ditambahkan!';
    }
}
