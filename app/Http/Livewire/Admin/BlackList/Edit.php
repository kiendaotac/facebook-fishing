<?php

namespace App\Http\Livewire\Admin\BlackList;

use App\Models\BlackList;
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

    public function render()
    {
        return view('livewire.admin.black-list.edit')->layout('components.layouts.app');
    }

    public function updatePassword()
    {
        $this->blacklist->update(['content' => $this->password]);

        return redirect()->route('black-list.index');
    }
}
