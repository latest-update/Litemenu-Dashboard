<?php

namespace App\View\Components\Common\Sidebar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SettingItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $icon,
        public string $currentPage
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.common.sidebar.setting-item');
    }
}
