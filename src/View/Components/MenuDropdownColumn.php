<?php

namespace Backpack\ThemeTabler\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuDropdownColumn extends Component
{   
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('backpack.theme-tabler::components.menu-dropdown-column');
    }
}
