<?php

namespace App\View\Components\Common\Grid;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SandboxAction extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $icon,
        public string $name,
        public string $description,
        public string $color,
        public string $to = '',
        public $disabled = false
    )
    {
        if ($this->disabled) $this->disabled = 'pointer-events-none';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.common.grid.sandbox-action');
    }
}
