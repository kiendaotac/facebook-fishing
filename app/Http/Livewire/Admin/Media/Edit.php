<?php

namespace App\Http\Livewire\Admin\Media;

use App\Models\Media;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $media;

    public $title;

    public $description;

    public $type;

    public $link;

    public $status;

    public $file;

    public $filePoster;

    public $poster;

    public function mount(Media $media)
    {
        $this->media       = $media;
        $this->title       = $media->title;
        $this->description = $media->description;
        $this->type        = $media->type;
        $this->link        = $media->link;
        $this->status      = $media->status;
        $this->poster      = $media->poster;
    }

    public function render()
    {
        return view('livewire.admin.media.edit')->layout('components.layouts.app');
    }

    public function save()
    {
        if ($this->file) {
            $this->link = $this->file->storePublicly('media', 'public');
        }
        if ($this->filePoster) {
            $this->poster = $this->filePoster->storePublicly('media', 'public');
        }
        $this->media->update([
            'title'       => $this->title,
            'description' => $this->description,
            'type'        => $this->type,
            'url'         => strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' ? Str::start($this->link,
                'storage/') : $this->link,
            'poster'         => strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' ? Str::start($this->poster,
                'storage/') : $this->poster,
            'status'      => $this->status
        ]);

        return redirect()->route('media.index');
    }
}
