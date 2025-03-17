<?php

namespace App\Filament\Resources\OfficeMasterResource\Pages;

use App\Filament\Resources\OfficeMasterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOfficeMaster extends EditRecord
{
    protected static string $resource = OfficeMasterResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\DeleteAction::make(),
    //     ];
    // }
}
