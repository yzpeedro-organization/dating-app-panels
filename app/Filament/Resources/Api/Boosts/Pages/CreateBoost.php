<?php

namespace App\Filament\Resources\Api\Boosts\Pages;

use App\Filament\Resources\Api\Boosts\BoostResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBoost extends CreateRecord
{
    protected static string $resource = BoostResource::class;
}
