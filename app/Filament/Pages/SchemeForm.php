<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
/*use App\Models\Scheme;
use Illuminate\Support\Facades\Crypt;*/
class SchemeForm extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static bool $shouldRegisterNavigation = false;
    protected static string $view = 'filament.pages.scheme-form';
    /*public $scheme;

    public function mount()
    {
        $encryptedId = request()->query('scheme_id');
        if ($encryptedId) {
            $schemeId = Crypt::decrypt($encryptedId);
            $this->scheme = Scheme::find($schemeId);
        }
    }*/
}
