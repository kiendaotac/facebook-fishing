<?php

namespace App\Http\Livewire\Admin\Redirect;

use App\Models\Redirect;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $redirects = Redirect::orderBy('status')->orderBy('updated_at', 'desc')->paginate(10);

        return view('livewire.admin.redirect.index', compact('redirects'))->layout('components.layouts.app');
    }
}
