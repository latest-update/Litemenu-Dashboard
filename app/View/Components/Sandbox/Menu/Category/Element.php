<?php

namespace App\View\Components\Sandbox\Menu\Category;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Element extends Component
{
    public string $name;
    public string $description;
    public string $image;
    /**
     * Create a new component instance.
     */
    public function __construct(array $catalog)
    {
        $this->name = $catalog['name'];
        $this->description = $catalog['description'];
        $this->image = $catalog['image'][0] ?? 'https://www.clipartmax.com/png/small/138-1380617_organic-food-category-icons-organic-icon-png.png';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sandbox.menu.category.element');
    }
}
