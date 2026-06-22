<?php

namespace App\Filament\Resources\Api\BlockedWords\Pages;

use App\Filament\Resources\Api\BlockedWords\BlockedWordResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBlockedWords extends ListRecords
{
    protected static string $resource = BlockedWordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
