<?php

namespace App\Filament\Resources\Api\UserVerifications\Pages;

use App\Filament\Resources\Api\UserVerifications\UserVerificationResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUserVerification extends CreateRecord
{
    protected static string $resource = UserVerificationResource::class;
}
