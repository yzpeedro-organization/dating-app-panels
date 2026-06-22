<?php

namespace App\Filament\Resources\Api\Users\Pages;

use App\Filament\Resources\Api\Users\UserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
