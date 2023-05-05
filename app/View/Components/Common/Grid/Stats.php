<?php

namespace App\View\Components\Common\Grid;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Stats extends Component
{

    public function __construct(
        public string $icon,
        public string $name,
        public string $stat,
        public bool $up,
        public string $index,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.common.grid.stats');
    }
}
