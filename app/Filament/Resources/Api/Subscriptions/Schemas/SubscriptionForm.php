<?php

namespace App\Filament\Resources\Api\Subscriptions\Schemas;

use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Schema;

class SubscriptionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Group::make()
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('name')
                            ->columnSpanFull()
                            ->required()
                            ->maxLength(255),
                        TextArea::make('description')
                            ->columnSpanFull()
                            ->required()
                            ->autosize(),
                        TextInput::make('duration_in_months')
                            ->label('Duration in months')
                            ->numeric()
                            ->minValue(1)
                            ->required(),
                        Toggle::make('is_active')
                            ->label('Active'),
                        KeyValue::make('features')
                            ->required(),
                        TextInput::make('provider')
                            ->columnSpanFull()
                            ->required()
                            ->maxLength(255),
                        TextInput::make('provider_product_id')
                            ->columnSpanFull()
                            ->required()
                            ->maxLength(255),
                    ])

            ]);
    }
}
