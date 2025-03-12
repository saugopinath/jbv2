<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Scheme;
class SchemeSelectionDropdown12 extends Component
{
    public $selectedOption;
    public $options = [];

    public function mount()
    {
        $this->options = Scheme::where('is_active', 1)->pluck('name', 'id')->toArray();
    }

    public function updatedSelectedOption($value)
    {
        $this->emit('dropdownUpdated', $value);
    }
    public function render()
    {
        return view('livewire.scheme-selection-dropdown');
    }
}
