<?php

namespace App\Filament\Resources\Langganans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;

class LanggananForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('status')
                    ->label('Status Langganan')
                    ->options([
                        'Menunggu' => 'Menunggu',
                        'Disetujui' => 'Disetujui',
                        'Berlangganan' => 'Berlangganan',
                        'Nonaktifkan Langganan' => 'Nonaktifkan Langganan',
                    ])
                    ->required(),
            ]);
    }
}
