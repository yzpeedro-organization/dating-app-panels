<?php

namespace App\Filament\Resources\Api\UserVerifications\Schemas;

use Filament\Schemas\Schema;

class UserVerificationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
            ]);
    }
}
