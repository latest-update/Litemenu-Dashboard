<?php

namespace App\View\Components\Common\Grid;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Company extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $address,
        public string $uuid
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.common.grid.company');
    }
}
