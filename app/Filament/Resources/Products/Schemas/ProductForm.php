<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Paket')
                    ->required(),

                TextInput::make('speed')
                    ->label('Kecepatan Internet')
                    ->placeholder('Contoh: 20 Mbps')
                    ->required(),

                TextInput::make('price')
                    ->label('Harga')
                    ->numeric()
                    ->prefix('Rp')
                    ->required(),

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->rows(3),

                FileUpload::make('image')
                    ->label('Foto Paket')
                    ->image()
                    ->disk('public')
                    ->directory('products'),
            ]);
    }
}