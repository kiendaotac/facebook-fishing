<?php

namespace App\Http\Livewire\Admin\Redirect;

use App\Models\Redirect;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $redirect;

    public $type = 'video';

    public $url;

    public $data;

    public $status = 'active';

    public $file;

    public function render()
    {
        return view('livewire.admin.redirect.create')->layout('components.layouts.app');
    }

    public function save()
    {
        if ($this->file && $this->type !== 'link') {
            $this->url = $this->file->storePublicly('files', 'public');
        }
        Redirect::create([
            'type'   => $this->type,
            'url'    => $this->url,
            'data'   => $this->data,
            'status' => $this->status
        ]);

        return redirect()->route('redirect.index');
    }
}
