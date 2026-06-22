<?php

namespace App\Filament\Resources\Api\BlockedWords\Pages;

use App\Filament\Resources\Api\BlockedWords\BlockedWordResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBlockedWord extends EditRecord
{
    protected static string $resource = BlockedWordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
