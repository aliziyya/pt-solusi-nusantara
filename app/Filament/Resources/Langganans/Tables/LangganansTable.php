<?php

namespace App\Filament\Resources\Langganans\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class LangganansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Pelanggan')
                    ->searchable(),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),

                TextColumn::make('no_telepon')
                    ->label('WhatsApp'),

                TextColumn::make('alamat')
                    ->label('Alamat Pemasangan')
                    ->limit(30),

                TextColumn::make('product.name')
                    ->label('Nama Paket'),

                TextColumn::make('product.speed')
                    ->label('Kecepatan'),

                TextColumn::make('product.price')
                    ->label('Harga')
                    ->money('IDR'),

                TextColumn::make('metode_pembayaran')
                    ->label('Metode Pembayaran')
                    ->badge(),

                TextColumn::make('bukti_pembayaran')
                    ->label('Bukti Pembayaran')
                    ->formatStateUsing(fn ($state) => $state ? 'Lihat Bukti' : 'Belum Ada')
                    ->url(fn ($record) => $record->bukti_pembayaran
                        ? asset('storage/' . $record->bukti_pembayaran)
                        : null)
                    ->openUrlInNewTab(),

                TextColumn::make('status')
                    ->label('Status Pengajuan')
                    ->badge(),

                TextColumn::make('created_at')
                    ->label('Tanggal Pengajuan')
                    ->dateTime('d M Y, H:i'),
            ])
            ->recordActions([
                EditAction::make()
                    ->label('Ubah Status'),
            ]);
    }
}
