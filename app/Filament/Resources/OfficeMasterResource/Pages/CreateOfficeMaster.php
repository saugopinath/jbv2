<?php

namespace App\Filament\Resources\OfficeMasterResource\Pages;

use App\Filament\Resources\OfficeMasterResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOfficeMaster extends CreateRecord
{
    protected static string $resource = OfficeMasterResource::class;
    // protected function mutateFormDataBeforeCreate(array $data): array
    // {

    //      dd('Inserted Data:', $data); 
    //     return $data;
    // }
    //     // return $data;
    //     // DB::enableQueryLog();

    //     // // Insert the data (Filament will handle the actual insert)
    //     // $queryData = $data;
    
    //     // // Get the executed queries
    //     // $queries = DB::getQueryLog();
    
    //     // // Log the SQL query
    //     // Log::info('Executed Queries:', $queries);
    
    //     // // Print the queries on screen
    //     // dd('Inserted Data:', $data, 'Executed Queries:', $queries);
    
    //     // return $data;
}
