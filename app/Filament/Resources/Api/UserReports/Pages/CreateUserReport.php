<?php

namespace App\Filament\Resources\Api\UserReports\Pages;

use App\Filament\Resources\Api\UserReports\UserReportResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUserReport extends CreateRecord
{
    protected static string $resource = UserReportResource::class;
}
