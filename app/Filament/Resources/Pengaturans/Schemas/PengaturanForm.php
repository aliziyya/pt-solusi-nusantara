<?php

namespace App\Filament\Resources\Pengaturans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class PengaturanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('whatsapp')
                    ->label('Nomor WhatsApp')
                    ->tel()
                    ->default('6281572937242')
                    ->required(),

                TextInput::make('instagram')
                    ->label('Link Instagram')
                    ->url()
                    ->default('https://www.instagram.com/kau_kautsara/')
                    ->required(),
            ]);
    }
}
