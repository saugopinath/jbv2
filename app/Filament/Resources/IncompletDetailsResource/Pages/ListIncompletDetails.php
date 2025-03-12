<?php

namespace App\Filament\Resources\IncompletDetailsResource\Pages;

use App\Filament\Resources\IncompletDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIncompletDetails extends ListRecords
{
    protected static string $resource = IncompletDetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
