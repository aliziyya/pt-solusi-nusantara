<?php

namespace App\Filament\Resources\Pesans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class PesanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->label('Nama Pengirim')
                    ->required(),

                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required(),

                TextInput::make('no_telepon')
                    ->label('Nomor Telepon'),

                Textarea::make('pesan')
                    ->label('Isi Pesan')
                    ->rows(5)
                    ->required(),
            ]);
    }
}
