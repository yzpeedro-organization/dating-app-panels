<?php

namespace App\Filament\Resources\Api\PersonalAccessTokens\Pages;

use App\Filament\Resources\Api\PersonalAccessTokens\PersonalAccessTokenResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPersonalAccessToken extends EditRecord
{
    protected static string $resource = PersonalAccessTokenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
