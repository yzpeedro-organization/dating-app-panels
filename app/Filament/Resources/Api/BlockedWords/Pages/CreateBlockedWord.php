<?php

namespace App\Filament\Resources\Api\BlockedWords\Pages;

use App\Filament\Resources\Api\BlockedWords\BlockedWordResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBlockedWord extends CreateRecord
{
    protected static string $resource = BlockedWordResource::class;
}
