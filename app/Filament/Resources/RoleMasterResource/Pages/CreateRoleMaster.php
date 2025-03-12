<?php

namespace App\Filament\Resources\RoleMasterResource\Pages;

use App\Filament\Resources\RoleMasterResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRoleMaster extends CreateRecord
{
    protected static string $resource = RoleMasterResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
