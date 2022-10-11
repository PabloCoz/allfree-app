<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Label;
use App\Models\Post;
use App\Models\Reaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::factory(20)->create();

        foreach ($posts as $post)
        {
            Reaction::factory(5)->create([
                'post_id' => $post->id
            ]);

            Image::factory(2)->create([
                'imageable_id' => $post->id,
                'imageable_type' => Post::class,
            ]);

            $post->labels()->attach(Label::all()->random(3));
        }
    }
}
