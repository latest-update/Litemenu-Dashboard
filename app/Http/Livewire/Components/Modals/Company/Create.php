<?php

namespace App\Http\Livewire\Components\Modals\Company;

use App\Models\Company;
use Livewire\Component;
use WireUi\Traits\Actions;

class Create extends Component
{
    use Actions;

    public string $name;
    public string $address;
    public string $phone;
    public string $description;

    protected $rules = [
        'name' => ['required', 'min:3', 'max:128'],
        'address' => ['required', 'min:5', 'max:128'],
        'phone' => ['required', 'min:7', 'max:20'],
        'description' => ['nullable']
    ];

    public function save()
    {
        $company = $this->validate();
        $user = auth()->user();

        $created = Company::create([
            ...$company,
            'owner_id' => $user->id
        ]);

        if (!$created) $this->notification()->error(
            'Something goes wrong',
            "Couldn't create"
        );

        $user->giveOwner();

//        $this->notification()->success(
//            'Company created',
//            "You have successfully created a new company"
//        );
        session()->flash('created', "You have successfully created a new company");
        return redirect()->to('/');
    }
    public function render()
    {
        return view('livewire.components.modals.company.create');
    }
}
