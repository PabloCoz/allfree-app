<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class PostIndex extends Component
{
    public $post;

    public $images = [];

    public $resources = [];

    protected $listeners = [
        'render' => 'render',
    ];

    public function loadImages()
    {
        $this->images = $this->post->images;
        $this->resources = $this->post->resources;
        $this->emit('glider', $this->post->id);
    }

    public function render()
    {
        return view('livewire.post.post-index');
    }
}
