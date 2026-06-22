<?php

namespace App\Filament\Resources\Api\PersonalAccessTokens\Pages;

use App\Filament\Resources\Api\PersonalAccessTokens\PersonalAccessTokenResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePersonalAccessToken extends CreateRecord
{
    protected static string $resource = PersonalAccessTokenResource::class;
}
