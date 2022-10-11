<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function gifts(User $user, Post $post)
    {
        return $post->receivers->contains($user->id);
    }

    public function likes(User $user, Post $post)
    {
        foreach ($post->likes as $like) {
            if ($like->user_id == auth()->user()->id) {
                return true;
            }
        }
    }
}
