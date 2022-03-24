<?php

namespace App\Http\Livewire\Admin\Notification;

use App\Models\Notification;
use Livewire\Component;
use function view;

class Index extends Component
{
    public function render()
    {
        $notifications = Notification::query()->orderBy('status')->latest('updated_at')->paginate(10);

        return view('livewire.admin.notification.index', compact('notifications'))->layout('components.layouts.app');
    }

    public function delete(Notification $notification)
    {
        $notification->delete();
    }
}
