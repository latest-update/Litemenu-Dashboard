<?php

namespace App\View\Components\Start;

use App\Models\Company;
use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public User $user;
    public string $companyName;
    public string $accountVerified;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->user = auth()->user();
        if ($this->user->hasRole(['Owner', 'Administrator', 'Guest']))
            $this->companyName = $this->user->companies()->first()->name ?? 'Company not found';
        else
            $this->companyName = $this->user->branch()->first()->name ?? 'Branch not found';
        $this->accountVerified = false;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.start.header');
    }
}
