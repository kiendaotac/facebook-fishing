<?php

namespace App\Http\Livewire\Admin\BlackList;

use App\Models\BlackList;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Edit extends Component
{
    public BlackList $blacklist;
    public $password;
    public function mount(BlackList $blacklist)
    {
        $this->blacklist = $blacklist;
        $this->password = $blacklist->content;
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'password' => 'required|'. Rule::unique('App\\Models\\BlackList', 'content')->ignore($this->blacklist->id),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.black-list.edit')->layout('components.layouts.app');
    }

    public function updatePassword()
    {
        $this->validate([
            'password' => 'required|'. Rule::unique('App\\Models\\BlackList', 'content')->ignore($this->blacklist->id),
        ]);

        $this->blacklist->update(['content' => $this->password]);

        return redirect()->route('black-list.index');
    }
}
