<?php

namespace App\Http\Livewire\Dashboard\Pages\Company;

use App\Models\Company;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Livewire\Component;
use Livewire\ImplicitRouteBinding;
use Illuminate\Routing\Route;

class Home extends Component
{

    public function mount()
    {
//        $router = app(Route::class);
//        try {
//            $componentParams = (new ImplicitRouteBinding(app()))
//                ->resolveAllParameters($router, $this);
//        } catch (ModelNotFoundException $exception) {
//            if (method_exists($router,'getMissing') && $router->getMissing()) {
//                return $router->getMissing()(request());
//            }
//
//            throw $exception;
//        }
//

        

    }

    public function render()
    {
        return view('livewire.dashboard.pages.company.home');
    }
}
