<?php

namespace App\Http\Livewire\Components\Modals\Branch;

use App\Models\Branch;
use App\Models\Company;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public int $admin_id;
    public string $name;
    public string $address;
    public string $company_uuid;

    protected $rules = [
        'name' => ['required', 'min:3', 'max:128'],
        'address' => ['required', 'min:5', 'max:128'],
        'admin_id' => ['required', 'integer'],
        'company_uuid' => ['required', 'uuid']
    ];


    public function save()
    {
        $branch = $this->validate();

        $created = Branch::create($branch);

        if (!$created) $this->notification()->error(
            'Something goes wrong',
            "Couldn't create"
        );

        $user = User::find($this->admin_id);
        $user->giveManager();

//        $this->notification()->success(
//            'Company created',
//            "You have successfully created a new company"
//        );
        session()->flash('created', "You have successfully created a new branch");
        return redirect()->to("/company/$this->company_uuid/branches");
    }

    public function render()
    {
        return view('livewire.components.modals.branch.create');
    }
}
