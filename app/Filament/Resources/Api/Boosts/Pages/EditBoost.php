<?php

namespace App\Filament\Resources\Api\Boosts\Pages;

use App\Filament\Resources\Api\Boosts\BoostResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBoost extends EditRecord
{
    protected static string $resource = BoostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
