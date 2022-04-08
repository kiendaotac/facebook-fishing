<?php

namespace App\Http\Livewire\Admin\Media;

use App\Models\Media;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $title;

    public $description;

    public $type = 'image';

    public $link;

    public $status = 'inactive';

    public $file;

    public $filePoster;

    public $poster;

    public function render()
    {
        return view('livewire.admin.media.create')->layout('components.layouts.app');
    }

    public function save()
    {
        if ($this->file) {
            $this->link = $this->file->storePublicly('media', 'public');
        }
        if ($this->filePoster) {
            $this->poster = $this->filePoster->storePublicly('media', 'public');
        }

        Media::create([
            'title'       => $this->title,
            'description' => $this->description,
            'type'        => $this->type,
            'link'        => strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' ? Str::start($this->link,
                'storage/') : $this->link,
            'poster'         => strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' ? Str::start($this->poster,
                'storage/') : $this->poster,
            'status'      => $this->status
        ]);

        return redirect()->route('media.index');
    }
}
