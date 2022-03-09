<?php

namespace App\Http\Livewire\Admin\Notification;

use App\Models\Notification;
use Livewire\Component;

class Edit extends Component
{
    public $title;

    public $content;

    public $status;

    public $notification;

    public function mount(Notification $notification)
    {
        $this->title        = $notification->title;
        $this->content      = $notification->content;
        $this->status       = $notification->status;
        $this->notification = $notification;
    }

    public function render()
    {
        return view('livewire.admin.notification.edit')->layout('components.layouts.app');
    }

    public function editNotification()
    {
        $this->notification->update([
            'title'   => $this->title,
            'content' => $this->content,
            'status'  => $this->status
        ]);

        return redirect()->route('notification.index');
    }
}
