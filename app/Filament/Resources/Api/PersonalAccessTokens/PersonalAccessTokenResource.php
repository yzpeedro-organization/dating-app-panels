<?php

namespace App\Filament\Resources\Api\PersonalAccessTokens;

use App\Filament\Resources\Api\PersonalAccessTokens\Pages\CreatePersonalAccessToken;
use App\Filament\Resources\Api\PersonalAccessTokens\Pages\EditPersonalAccessToken;
use App\Filament\Resources\Api\PersonalAccessTokens\Pages\ListPersonalAccessTokens;
use App\Filament\Resources\Api\PersonalAccessTokens\Schemas\PersonalAccessTokenForm;
use App\Filament\Resources\Api\PersonalAccessTokens\Tables\PersonalAccessTokensTable;
use App\Models\Api\PersonalAccessToken;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class PersonalAccessTokenResource extends Resource
{
    protected static ?string $model = PersonalAccessToken::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::ServerStack;

    protected static string | UnitEnum | null $navigationGroup = 'Api';

    public static function form(Schema $schema): Schema
    {
        return PersonalAccessTokenForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PersonalAccessTokensTable::configure($table);
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
            'index' => ListPersonalAccessTokens::route('/'),
        ];
    }
}
