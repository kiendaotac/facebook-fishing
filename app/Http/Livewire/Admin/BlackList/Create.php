<?php

namespace App\Http\Livewire\Admin\BlackList;

use App\Models\BlackList;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Create extends Component
{
    public $password;

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'password' => 'required|unique:App\\Models\\BlackList,content',
        ]);
    }

    public function render()
    {
        return view('livewire.admin.black-list.create')->layout('components.layouts.app');
    }

    public function createPassword()
    {
        $this->validate([
            'password' => 'required|unique:App\\Models\\BlackList,content',
        ]);

        BlackList::create([
            'content' => $this->password
        ]);

        $this->reset('password');
    }
}
