<?php

namespace App\Filament\Resources\Langganans;

use App\Filament\Resources\Langganans\Pages\EditLangganan;
use App\Filament\Resources\Langganans\Pages\ListLangganans;
use App\Filament\Resources\Langganans\Schemas\LanggananForm;
use App\Filament\Resources\Langganans\Tables\LangganansTable;
use App\Models\Langganan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LanggananResource extends Resource
{
    protected static ?string $model = Langganan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocumentList;

    protected static ?string $navigationLabel = 'Langganan';

    protected static ?string $modelLabel = 'Langganan';

    protected static ?string $pluralModelLabel = 'Langganan';

    public static function form(Schema $schema): Schema
    {
        return LanggananForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LangganansTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListLangganans::route('/'),
            'edit' => EditLangganan::route('/{record}/edit'),
        ];
    }
}
