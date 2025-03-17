<?php

namespace App\Filament\Resources\CodeMasterResource\Pages;

use App\Filament\Resources\CodeMasterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCodeMaster extends EditRecord
{
    protected static string $resource = CodeMasterResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\DeleteAction::make(),
    //     ];
    // }
}
