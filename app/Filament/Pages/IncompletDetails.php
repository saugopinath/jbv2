<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\Codemaster;
use App\Models\IncompleteBenList;
use App\Models\BeneficiaryPersonal;

class IncompletDetails extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'List Of Application';
    protected static ?string $navigationGroup = 'Incomplet Details';

    protected static ?string $slug = 'incomplet-details';

    protected static ?string $title = '';
    protected static string $view = 'filament.pages.incomplet-details';

    public array $codemaster = [];
    public $applications;
    public $beneficiaryPersonal;

    public function mount()
    {
        $this->codemaster = $this->getDropdownOptions();
         $this->beneficiaryPersonal = BeneficiaryPersonal::get();
         $this->applications = IncompleteBenList::with(['scheme','codemaster'])
         ->get();


    }
    public function getDropdownOptions(): array
    {
        return Codemaster::where('parent_id', 79)->pluck('name', 'id')->toArray();
    }
}
