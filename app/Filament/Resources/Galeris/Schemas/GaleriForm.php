<?php

namespace App\Filament\Resources\Galeris\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;

class GaleriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->label('Judul Foto')
                    ->required(),

                Textarea::make('deskripsi')
                    ->label('Deskripsi Galeri')
                    ->rows(3),

                FileUpload::make('foto')
                    ->label('Foto Galeri')
                    ->image()
                    ->disk('public')
                    ->directory('galeri')
                    ->required(),
            ]);
    }
}
