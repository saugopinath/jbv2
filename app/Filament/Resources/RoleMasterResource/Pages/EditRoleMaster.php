<?php

namespace App\Filament\Resources\RoleMasterResource\Pages;

use App\Filament\Resources\RoleMasterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRoleMaster extends EditRecord
{
    protected static string $resource = RoleMasterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
