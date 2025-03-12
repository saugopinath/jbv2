<?php

namespace App\Filament\Resources\CodeMasterResource\Pages;

use App\Filament\Resources\CodeMasterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCodeMasters extends ListRecords
{
    protected static string $resource = CodeMasterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
