<?php

namespace App\Http\Livewire\Components\Modals\Employees;

use App\Models\Access;
use App\Models\Branch;
use App\Models\User;
use Livewire\Component;

class AddEmployee extends Component
{
    public Branch $branch;
    public int $user_id;
    public array $roles = ['Kitchener', 'Waiter'];
    public ?string $role = null;

    protected $rules = [
        'user_id' => ['required', 'integer'],
    ];

    public function save()
    {
        $this->validate();
        $user = User::find($this->user_id);

        if (in_array($this->role, $this->roles)) {
            Access::create([
                'position' => $this->role,
                'branch_uuid' => $this->branch->uuid,
                'user_id' => $user->id
            ]);
            $user->giveSpecified($this->role);
        }

        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        return view('livewire.components.modals.employees.add-employee');
    }
}
