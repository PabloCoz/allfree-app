<?php

namespace App\Http\Livewire\Button;

use App\Models\Label;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class PostAdd extends Component
{
    use WithFileUploads;
    public $open = false, $regalos = false, $otros = false, $reflexion = false;

    public $description, $img, $indent, $options = [], $video;

    protected $rules = [
        'description' => 'required',
    ];

    public function render()
    {
        return view('livewire.button.post-add');
    }

    public function solicitar()
    {
        $this->validate();

        $post = Post::create([
            'description' => $this->description,
            'category_id' => 1,
            'slug' => Str::slug(Str::limit($this->description, 30)),
            'user_id' => auth()->user()->id,
            'file' => $this->img
        ]);

        if ($this->img) {
            foreach ($this->img as $imgs) {
                if ($imgs->extension() == 'mp4' || $imgs->extension() == 'avi' || $imgs->extension() == 'mov') {
                    $urlV = $imgs->store('resources');
                    $post->resources()->create([
                        'url' => $urlV,
                    ]);
                } else {
                    $url = $imgs->store('images');
                    $post->images()->create([
                        'url' => $url,
                    ]);
                }
            }
        }

        if ($this->options) {
            foreach ($this->options as $option) {
                $l = Label::where('name', $option)->first();
                if (!$l) {
                    $l = Label::create([
                        'name' => $option,
                    ]);
                    $post->labels()->attach($l);
                } else {
                    $post->labels()->attach($l);
                }
            }
        }

        $this->reset(['description', 'open', 'img', 'options']);

        $this->indent = rand();

        return redirect()->route('dashboard');
    }

    public function regalo()
    {
        $this->validate();

        $post = Post::create([
            'description' => $this->description,
            'category_id' => 2,
            'slug' => Str::slug(Str::limit($this->description, 30)),
            'user_id' => auth()->user()->id,
            'country' => auth()->user()->country,
            'file' => $this->img
        ]);

        if ($this->img) {
            foreach ($this->img as $imgs) {
                if ($imgs->extension() == 'mp4' || $imgs->extension() == 'avi' || $imgs->extension() == 'mov') {
                    $urlV = $imgs->store('resources');
                    $post->resources()->create([
                        'url' => $urlV,
                    ]);
                } else {
                    $url = $imgs->store('images');
                    $post->images()->create([
                        'url' => $url,
                    ]);
                }
            }
        }

        if ($this->options) {
            foreach ($this->options as $option) {
                $l = Label::where('name', $option)->first();
                if (!$l) {
                    $l = Label::create([
                        'name' => $option,
                    ]);
                    $post->labels()->attach($l);
                } else {
                    $post->labels()->attach($l);
                }
            }
        }

        $this->reset(['description', 'regalos', 'img', 'options']);

        $this->indent = rand();
        return redirect()->route('dashboard');
    }

    public function otros()
    {
        $this->validate();

        $post = Post::create([
            'description' => $this->description,
            'category_id' => 3,
            'slug' => Str::slug(Str::limit($this->description, 30)),
            'user_id' => auth()->user()->id,
            'country' => auth()->user()->country,
            'file' => $this->img
        ]);

        if ($this->img) {
            foreach ($this->img as $imgs) {
                if ($imgs->extension() == 'mp4' || $imgs->extension() == 'avi' || $imgs->extension() == 'mov') {
                    $urlV = $imgs->store('resources');
                    $post->resources()->create([
                        'url' => $urlV,
                    ]);
                } else {
                    $url = $imgs->store('images');
                    $post->images()->create([
                        'url' => $url,
                    ]);
                }
            }
        }

        if ($this->options) {
            foreach ($this->options as $option) {
                $l = Label::where('name', $option)->first();
                if (!$l) {
                    $l = Label::create([
                        'name' => $option,
                    ]);
                    $post->labels()->attach($l);
                } else {
                    $post->labels()->attach($l);
                }
            }
        }

        $this->reset(['description', 'otros', 'img', 'options']);

        $this->indent = rand();
        return redirect()->route('dashboard');
    }

    public function reflexion()
    {
        $this->validate();

        $post = Post::create([
            'description' => $this->description,
            'category_id' => 4,
            'slug' => Str::slug(Str::limit($this->description, 30)),
            'user_id' => auth()->user()->id,
            'country' => auth()->user()->country,
            'file' => $this->img
        ]);

        if ($this->img) {
            foreach ($this->img as $imgs) {
                if ($imgs->extension() == 'mp4' || $imgs->extension() == 'avi' || $imgs->extension() == 'mov') {
                    $urlV = $imgs->store('resources');
                    $post->resources()->create([
                        'url' => $urlV,
                    ]);
                } else {
                    $url = $imgs->store('images');
                    $post->images()->create([
                        'url' => $url,
                    ]);
                }
            }
        }

        if ($this->options) {
            foreach ($this->options as $option) {
                $l = Label::where('name', $option)->first();
                if (!$l) {
                    $l = Label::create([
                        'name' => $option,
                    ]);
                    $post->labels()->attach($l);
                } else {
                    $post->labels()->attach($l);
                }
            }
        }

        $this->reset(['description', 'reflexion', 'img', 'options']);

        $this->indent = rand();
        return redirect()->route('dashboard');
    }


    public function mount()
    {
        $this->indent = rand();
    }

    public function addImages()
    {
        if ($this->img) {
            $this->img[] = '';
        }
    }

    public function removeImage($index)
    {
        unset($this->img[$index]);
        $this->img = array_values($this->img);
    }

    public function addOption()
    {
        $this->options[] = '';
    }

    public function removeOptionLabel($index)
    {
        unset($this->options[$index]);
        $this->options = array_values($this->options);
    }

    public function analyzeImg()
    {
        if ($this->img) {
            foreach ($this->img as $i) {
                if ($i->extension() == 'mp4' || $i->extension() == 'avi' || $i->extension() == 'mov') {
                    $this->video = $i;
                }
            }
        }
    }
}
