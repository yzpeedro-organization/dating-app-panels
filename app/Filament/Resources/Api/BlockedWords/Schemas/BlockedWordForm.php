<?php

namespace App\Filament\Resources\Api\BlockedWords\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BlockedWordForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('word')
                    ->required()
                    ->maxLength(255),
                Select::make('type')
                    ->options([
                        'generic' => 'Generic',
                        'offensive' => 'Offensive',
                        'sexual' => 'Sexual',
                        'political' => 'Political',
                        'spam' => 'Spam',
                    ])
                    ->default('generic')
                    ->required(),
                Toggle::make('is_active')
                    ->default(true)
                    ->required()
            ]);
    }
}
