<?php

namespace App\Filament\Resources\Api\Boosts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BoostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID')->sortable()->searchable(),
                TextColumn::make('name')->label('Name')->sortable()->searchable(),
                TextColumn::make('price_in_cents')->label('Price')
                    ->sortable()
                    ->searchable()
                    ->money('BRL', 100, 'pt-br'),
                TextColumn::make('description')->label('Description')
                    ->sortable()
                    ->searchable()
                    ->limit(20)
                    ->tooltip(fn ($record) => $record->description),
                TextColumn::make('duration_in_hours')
                    ->label('Duration')
                    ->sortable()
                    ->searchable()
                    ->suffix(' Hrs.'),
                IconColumn::make('is_active')
                    ->label('Active')
                    ->searchable()
                    ->icon(fn (bool $state): Heroicon => match ($state) {
                        true => Heroicon::CheckCircle,
                        false => Heroicon::XMark
                    })
                    ->color(fn (bool $state) => match ($state) {
                        true => 'success',
                        false => 'danger',
                    }),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
