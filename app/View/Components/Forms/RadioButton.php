<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RadioButton extends Component
{
    // public $name;
    // public $label;
    // public $options;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // $this->name = $name;
        // $this->label = $label;
        // $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.radio-button');
    }
}
