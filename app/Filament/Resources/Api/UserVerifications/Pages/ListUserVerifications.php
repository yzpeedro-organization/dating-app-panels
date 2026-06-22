<?php

namespace App\Filament\Resources\Api\UserVerifications\Pages;

use App\Filament\Resources\Api\UserVerifications\UserVerificationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUserVerifications extends ListRecords
{
    protected static string $resource = UserVerificationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}
