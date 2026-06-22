<?php

namespace App\Filament\Resources\Api\Boosts\Pages;

use App\Filament\Resources\Api\Boosts\BoostResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBoosts extends ListRecords
{
    protected static string $resource = BoostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
