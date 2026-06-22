<?php

namespace App\Filament\Resources\Api\PersonalAccessTokens\Pages;

use App\Filament\Resources\Api\PersonalAccessTokens\PersonalAccessTokenResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPersonalAccessTokens extends ListRecords
{
    protected static string $resource = PersonalAccessTokenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}
