<?php

namespace App\Http\Livewire\Admin\BlackList;

use App\Models\BlackList;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $blacklists = BlackList::orderBy('updated_at', 'desc')->paginate(10);
        return view('livewire.admin.black-list.index', compact('blacklists'))->layout('components.layouts.app');
    }

    public function delete(BlackList $blackList)
    {
        $blackList->delete();
    }
}
