<?php

namespace App\Filament\Resources\Api\Users\Schemas;

use App\Enums\GenderEnum;
use App\Enums\LookingForEnum;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Slider;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Fieldset::make('User')
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('email')
                            ->label('Email address')
                            ->email()
                            ->required(),
                        TextInput::make('phone')
                            ->label('Phone number')
                            ->required()
                            ->mask('+99 (99) 99999-9999'),
                        TextInput::make('status')
                            ->label('Status')
                            ->readonly()
                            ->dehydrated(false)
                            ->disabled(),
                        TextInput::make('subscription')
                            ->label('Active Subscription')
                            ->placeholder('N/A')
                            ->readonly()
                            ->disabled()
                            ->dehydrated(false)
                            ->formatStateUsing(fn ($record) => $record->activeSubscription?->name),
                        TextInput::make('boost')
                            ->label('Active Boost')
                            ->placeholder('N/A')
                            ->readonly()
                            ->disabled()
                            ->dehydrated(false)
                            ->formatStateUsing(fn ($record) => $record->boost?->name),
                        TextInput::make('reports_received_count')
                            ->label('Reports Received')
                            ->placeholder('0')
                            ->readonly()
                            ->disabled()
                            ->dehydrated(false)
                            ->formatStateUsing(fn ($record) => $record->reportsReceived()?->count()),
                        TextInput::make('reports_made_count')
                            ->label('Reports Made')
                            ->placeholder('0')
                            ->readonly()
                            ->disabled()
                            ->dehydrated(false)
                            ->formatStateUsing(fn ($record) => $record->reportsMade()?->count()),
                    ]),
                Fieldset::make('Details')
                    ->columnSpanFull()
                    ->schema([
                        Group::make()
                            ->relationship('details')
                            ->columnSpanFull()
                            ->columns()
                            ->schema([
                                Textarea::make('biography')
                                    ->label('Biography')
                                    ->nullable()
                                    ->maxLength(450)
                                    ->columnSpanFull()
                                    ->autosize(),
                                DateTimePicker::make('born_date')
                                    ->label('Born Date')
                                    ->minDate(now()->subYears(19))
                                    ->required(),
                                Select::make('gender')
                                    ->required()
                                    ->label('Gender')
                                    ->options(GenderEnum::all())
                                    ->enum(GenderEnum::class),
                                Slider::make('height')
                                    ->required()
                                    ->label('Height (centimetres)')
                                    ->range(0, 280)
                                    ->step(1)
                                    ->reactive()
                                    ->afterStateUpdated(function ($set, $state) {
                                        $set('height_display', $state . 'cm');
                                    }),
                                TextEntry::make('height_display')
                                    ->label('Height (centimetres)')
                                    ->state(function ($get) {
                                        $value = $get('height_display', 'default') ?? $get('height');

                                        return "{$value}cm";
                                    }),
                                Select::make('looking_for')
                                    ->required()
                                    ->label('Looking For')
                                    ->options(LookingForEnum::all())
                                    ->enum(LookingForEnum::class),
                                TextInput::make('city')
                                    ->required()
                                    ->label('City'),
                                TextInput::make('state')
                                    ->required()
                                    ->label('State'),
                                TextInput::make('country')
                                    ->required()
                                    ->label('Country'),
                                TextInput::make('latitude')
                                    ->required()
                                    ->label('Latitude')
                                    ->numeric(),
                                TextInput::make('longitude')
                                    ->required()
                                    ->label('Longitude')
                                    ->numeric(),
                                Toggle::make('anonymous')
                                    ->label('Anonymous User'),
                            ]),
                    ]),
                Fieldset::make('Interests')
                    ->columnSpanFull()
                    ->schema([
                        Group::make()
                            ->relationship('interests')
                            ->columnSpanFull()
                            ->columns()
                            ->schema([
                                Select::make('gender_interested')
                                    ->required()
                                    ->label('Gender')
                                    ->multiple()
                                    ->columnSpanFull()
                                    ->options(GenderEnum::all())
                                    ->enum(GenderEnum::class),
                                TextInput::make('min_age')
                                    ->required()
                                    ->label('Min Age')
                                    ->minValue(18)
                                    ->numeric(),
                                TextInput::make('max_age')
                                    ->required()
                                    ->label('Max Age')
                                    ->numeric(),
                                Slider::make('max_distance')
                                    ->required()
                                    ->label('Max Distance (kilometers)')
                                    ->range(2, 10_000)
                                    ->step(1)
                                    ->reactive()
                                    ->afterStateUpdated(function ($set, $state) {
                                        $set('max_distance_display', $state . 'km');
                                    })
                                    ->minValue(2)
                                    ->maxValue(10_000),
                                TextEntry::make('max_distance_display')
                                    ->label('Max Distance (kilometers)')
                                    ->state(function ($get) {
                                        $value = $get('max_distance_display', 'default') ?? $get('max_distance');

                                        return "{$value}km";
                                    }),
                            ])
                    ]),
                Fieldset::make('Photos')
                    ->columnSpanFull()
                    ->schema([
                        Repeater::make('photos')
                            ->relationship('photos')
                            ->schema([
                                ImageEntry::make('path')
                                    ->label('Photo')
                                    ->columnSpanFull()
                                    ->imageWidth(360)
                                    ->imageHeight(640)
                                    ->columnSpanFull()
                            ])
                            ->hiddenLabel()
                            ->addable(false)
                            ->grid()
                            ->columnSpanFull()
                    ])
            ]);
    }
}
