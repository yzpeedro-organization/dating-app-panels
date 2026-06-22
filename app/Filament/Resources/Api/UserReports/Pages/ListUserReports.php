<?php

namespace App\Filament\Resources\Api\UserReports\Pages;

use App\Filament\Resources\Api\UserReports\UserReportResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUserReports extends ListRecords
{
    protected static string $resource = UserReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}
