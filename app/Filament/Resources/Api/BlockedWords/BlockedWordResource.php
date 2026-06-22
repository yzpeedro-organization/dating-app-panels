<?php

namespace App\Filament\Resources\Api\BlockedWords;

use App\Filament\Resources\Api\BlockedWords\Pages\CreateBlockedWord;
use App\Filament\Resources\Api\BlockedWords\Pages\EditBlockedWord;
use App\Filament\Resources\Api\BlockedWords\Pages\ListBlockedWords;
use App\Filament\Resources\Api\BlockedWords\Schemas\BlockedWordForm;
use App\Filament\Resources\Api\BlockedWords\Tables\BlockedWordsTable;
use App\Models\Api\BlockedWord;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class BlockedWordResource extends Resource
{
    protected static ?string $model = BlockedWord::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::NoSymbol;

    protected static string | UnitEnum | null $navigationGroup = 'Api';

    public static function form(Schema $schema): Schema
    {
        return BlockedWordForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BlockedWordsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBlockedWords::route('/'),
        ];
    }
}
