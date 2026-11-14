<?php

namespace App\Filament\Resources\Pesans\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class PesansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Pengirim')
                    ->searchable(),

                TextColumn::make('email')
                    ->label('Email'),

                TextColumn::make('no_telepon')
                    ->label('Nomor Telepon'),

                TextColumn::make('pesan')
                    ->label('Isi Pesan')
                    ->wrap(),

                TextColumn::make('created_at')
                    ->label('Tanggal Masuk')
                    ->dateTime('d M Y, H:i'),
            ]);
    }
}
