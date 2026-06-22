<?php

namespace App\Filament\Resources\Api\Subscriptions;

use App\Filament\Resources\Api\Subscriptions\Pages\CreateSubscription;
use App\Filament\Resources\Api\Subscriptions\Pages\EditSubscription;
use App\Filament\Resources\Api\Subscriptions\Pages\ListSubscriptions;
use App\Filament\Resources\Api\Subscriptions\Schemas\SubscriptionForm;
use App\Filament\Resources\Api\Subscriptions\Tables\SubscriptionsTable;
use App\Models\Api\Subscription;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class SubscriptionResource extends Resource
{
    protected static ?string $model = Subscription::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Banknotes;

    protected static ?string $recordTitleAttribute = 'Subscription';

    protected static string | UnitEnum | null $navigationGroup = 'Api';

    public static function form(Schema $schema): Schema
    {
        return SubscriptionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SubscriptionsTable::configure($table);
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
            'index' => ListSubscriptions::route('/'),
            'create' => CreateSubscription::route('/create'),
            'edit' => EditSubscription::route('/{record}/edit'),
        ];
    }
}
