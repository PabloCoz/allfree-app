<?php

namespace App\Http\Livewire\Button;

use Livewire\Component;

class PostNotification extends Component
{
    public $notifications, $count;

    protected $listeners = ['notification'];

    public function mount()
    {
        $this->notification();
    }

    public function notification()
    {
        $this->notifications = auth()->user()->notifications()->where('read_at', null)->get();
        $this->count = auth()->user()->unreadNotifications->count();
    }

    public function render()
    {
        return view('livewire.button.post-notification');
    }

    public function resetNotificationCount()
    {
        auth()->user()->notification = 0;
        auth()->user()->save();
        /* $this->emitSelf('notification'); */
    }

    public function read($notification_id)
    {
        $notification = auth()->user()->notifications()->findOrFail($notification_id);
        $notification->markAsRead();
    }
}
