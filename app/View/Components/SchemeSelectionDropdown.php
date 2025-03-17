<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Scheme;
class SchemeSelectionDropdown extends Component
{
    /**
     * Create a new component instance.
     */
    public $options;
    public function __construct()
    {
        $this->options = Scheme::where('is_active', 1)->pluck('name', 'id')->toArray();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.scheme-selection-dropdown');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> origin/featured-multilevelmenu
