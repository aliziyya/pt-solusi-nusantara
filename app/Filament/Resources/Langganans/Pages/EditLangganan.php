<?php

namespace App\Filament\Resources\Langganans\Pages;

use App\Filament\Resources\Langganans\LanggananResource;
use Filament\Resources\Pages\EditRecord;

class EditLangganan extends EditRecord
{
    protected static string $resource = LanggananResource::class;

    protected function getRedirectUrl(): string
    {
        return LanggananResource::getUrl('index');
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Status pengajuan berhasil diperbarui!';
    }
}
