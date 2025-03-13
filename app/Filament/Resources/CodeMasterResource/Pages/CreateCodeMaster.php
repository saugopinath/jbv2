<?php

namespace App\Filament\Resources\CodeMasterResource\Pages;

use App\Filament\Resources\CodeMasterResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CreateCodeMaster extends CreateRecord
{
    protected static string $resource = CodeMasterResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
        {
            if (!empty($data['is_parent'])) { // If is_parent is checked
                $data['parent_id'] = null; // Set parent_id to NULL
            }

            return $data;
        }
        protected function getRedirectUrl(): string
        {
            return $this->getResource()::getUrl('index');
        }
    
    
    // protected function mutateFormDataBeforeCreate(array $data): array
    // {
    //     if (!empty($data['is_parent'])) { // If is_parent is checked
    //         $data['parent_id'] = null; // Set parent_id to NULL
    //     }

    //     // dd('Inserted Data:', $data); 
    //     // return $data;
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
    //     DB::enableQueryLog();

    //     // Filament will handle the actual insert
    //     $queryData = $data;
    
    //     // Wait until the record is actually inserted
    //      $insertedRecord = \App\Models\CodeMaster::create($data);
    
    //     // Retrieve the executed queries
    //     $queries = DB::getQueryLog();
    
    //     // Log and print queries
    //     Log::info('Executed Queries:', $queries);
    //     dd('Inserted Data:', $data, 'Executed Queries:', $queries);
    
    //     return $data;
    // }
    // // protected function mutateFormDataBeforeCreate(array $data): array
    // // {
    // //     if (!empty($data['is_parent'])) { // If is_parent is checked
    // //         $data['parent_id'] = null; // Set parent_id to NULL
    // //     }

    // //     return $data;
    // // }
}
