<?php

namespace App\Http\Livewire\Admin\Notification;

use App\Models\Notification;
use Livewire\Component;

class Edit extends Component
{
    public $title;

    public $content;

    public $status;

    public $time_start;

    public $time_redirect;

    public $notification;

    public function mount(Notification $notification)
    {
        $this->title         = $notification->title;
        $this->content       = $notification->content;
        $this->status        = $notification->status;
        $this->time_start    = $notification->time_start;
        $this->time_redirect = $notification->time_redirect;
        $this->notification  = $notification;
    }

    public function render()
    {
        return view('livewire.admin.notification.edit')->layout('components.layouts.app');
    }

    public function editNotification()
    {
        $this->notification->update([
            'title'         => $this->title,
            'content'       => $this->content,
            'time_start'    => $this->time_start,
            'time_redirect' => $this->time_redirect,
            'status'        => $this->status
        ]);

        return redirect()->route('notification.index');
    }
}
