<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormSection extends Component
{
    public $sectionName;
    /**
     * Create a new component instance.
     */
    public function __construct($sectionName)
    {
        $this->sectionName = $sectionName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.form-section');
    }
}
