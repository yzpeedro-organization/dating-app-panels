<?php

namespace App\Filament\Resources\Api\Boosts;

use App\Filament\Resources\Api\Boosts\Pages\CreateBoost;
use App\Filament\Resources\Api\Boosts\Pages\EditBoost;
use App\Filament\Resources\Api\Boosts\Pages\ListBoosts;
use App\Filament\Resources\Api\Boosts\Schemas\BoostForm;
use App\Filament\Resources\Api\Boosts\Tables\BoostsTable;
use App\Models\Api\Boost;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class BoostResource extends Resource
{
    protected static ?string $model = Boost::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::RocketLaunch;

    protected static string | UnitEnum | null $navigationGroup = 'Api';

    public static function form(Schema $schema): Schema
    {
        return BoostForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BoostsTable::configure($table);
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
            'index' => ListBoosts::route('/'),
            'create' => CreateBoost::route('/create'),
            'edit' => EditBoost::route('/{record}/edit'),
        ];
    }
}
