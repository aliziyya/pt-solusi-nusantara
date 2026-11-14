<?php

namespace App\Filament\Resources\Pengaturans\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;

class PengaturansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('whatsapp')
                    ->label('Nomor WhatsApp')
                    ->searchable(),

                TextColumn::make('instagram')
                    ->label('Link Instagram')
                    ->searchable(),
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }
}
