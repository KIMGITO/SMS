<?php

namespace App\View\Components\Nav;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menu extends Component
{
    public $href;
    public $icon;
    public $label;
    /**
     * Create a new component instance.
     */
    public function __construct($href, $icon, $label, )
    {
        $this->href = $href;
        $this->icon = $icon;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav.menu');
    }
}
