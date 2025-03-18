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

        //   $this->beneficiaryPersonal = BeneficiaryPersonal::with('beneficiaryIdserial')->get();

         $this->beneficiaryPersonal = BeneficiaryPersonal::with('beneficiaryIdserial.incompletList.codemaster')->where('is_active',1)->get();

         foreach ($this->beneficiaryPersonal as $beneficiary) {
            $tooltipContent = '';

            foreach ($beneficiary->beneficiaryIdserial->incompletList as $incomplete) {
                $tooltipContent .= $incomplete->codemaster->name . '  ,  ';
            }
            // Store tooltip content back to each beneficiary (for use in the view)
            $beneficiary->tooltipContent = rtrim($tooltipContent, ' ,');
        }
        // dd($this->beneficiaryPersonal );
        //  $this->applications = IncompleteBenList::with(['scheme','codemaster','beneficiaryIdserial'])
        //  ->get();


    }

    public function getDropdownOptions(): array
    {
        return Codemaster::where('parent_id', 79)->pluck('name', 'id')->toArray();
    }
}
