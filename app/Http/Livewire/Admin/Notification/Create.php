<?php

namespace App\Http\Livewire\Admin\Notification;

use App\Models\Notification;
use Livewire\Component;

class Create extends Component
{
    public $title = '';

    public $content = '';

    public $time_start = 0;

    public $time_redirect = 0;

    public $status = 'active';

    public function render()
    {
        return view('livewire.admin.notification.create')->layout('components.layouts.app');
    }

    public function createNotification()
    {
        Notification::create([
            'title'         => $this->title,
            'content'       => $this->content,
            'time_start'    => $this->time_start,
            'time_redirect' => $this->time_redirect,
            'status'        => $this->status
        ]);

        return redirect()->route('notification.index');
    }
}
