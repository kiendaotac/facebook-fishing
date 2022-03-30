<?php

namespace App\Http\Livewire\Admin\Media;

use App\Models\Media;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $media = Media::orderBy('status')->orderBy('updated_at', 'desc')->paginate(10);

        return view('livewire.admin.media.index', compact('media'))->layout('components.layouts.app');
    }

    public function delete(Media $blackList)
    {
        $blackList->delete();
    }
}
