<?php

namespace App\Http\Livewire\Admin\Redirect;

use App\Models\Redirect;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $redirect;

    public $type;

    public $url;

    public $data;

    public $status;

    public $file;

    public function mount(Redirect $redirect)
    {
        $this->redirect = $redirect;
        $this->type     = $redirect->type;
        $this->url      = $redirect->url;
        $this->data     = $redirect->data;
        $this->status   = $redirect->status;
    }

    public function render()
    {
        return view('livewire.admin.redirect.edit')->layout('components.layouts.app');
    }

    public function save(Redirect $redirect)
    {
        if ($this->file && $this->type !== 'link') {
            $this->url = $this->file->storePublicly('files', 'public');
        }
        $redirect->update([
            'type'   => $this->type,
            'url'    => $this->url,
            'data'   => $this->data,
            'status' => $this->status
        ]);

        return redirect()->route('redirect.index');
    }
}
