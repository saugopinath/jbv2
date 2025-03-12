<?php

namespace App\Filament\Resources\IncompletDetailsResource\Pages;

use App\Filament\Resources\IncompletDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIncompletDetails extends EditRecord
{
    protected static string $resource = IncompletDetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
