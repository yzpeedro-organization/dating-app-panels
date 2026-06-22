<?php

namespace App\Filament\Resources\Api\UserVerifications\Pages;

use App\Filament\Resources\Api\UserVerifications\UserVerificationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUserVerification extends EditRecord
{
    protected static string $resource = UserVerificationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
