<?php

namespace App\Http\Livewire\Button;

use App\Models\User;
use App\Notifications\LikeNotification;
use Livewire\Component;

class PostLike extends Component
{
    public $post;

    protected $listeners = ['render' => 'render'];

    public function render()
    {
        return view('livewire.button.post-like');
    }

    public function like()
    {
        $this->post->likes()->create([
            'user_id' => auth()->user()->id,
            'value' => 1,
        ]);
        $users = User::find($this->post->transmitter);
        if ($this->post->transmitter->id != auth()->user()->id) {
            foreach ($users as $user) {
                /*  $user->notify(new LikeNotification($this->post, auth()->user()->name)); */
            }
        }
        $this->emitSelf('render');
    }

    public function dislike()
    {
        $this->post->likes()->delete();
        $this->emitSelf('render');
        $this->emitTo('post.post-reaction', 'render');
    }
}
