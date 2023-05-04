<?php

namespace App\Http\Livewire\Dashboard;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;
use Livewire\Component;
use WireUi\Traits\Actions;

class Content extends Component
{
    use Actions;

    public string $content = 'dashboard.pages.start';

    protected $listeners = ['changeContent'];

    public function changeContent(string $route): void
    {
        $router = app(Router::class);
        $routes = $router->getRoutes()->match(Request::create($route))->action['controller'];
        $view = Str::of($routes)->after('Livewire\\')->replace('\\', '.')->lower();
        $this->content = $view;
        session(['currentPath' => $route]);
    }

    public function mount()
    {
        $requestUri = app(\Illuminate\Http\Request::class)->getRequestUri();
        $this->changeContent( $requestUri );
    }


    public function render()
    {
        return view('livewire.dashboard.content');
    }
}
