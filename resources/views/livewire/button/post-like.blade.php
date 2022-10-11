<div>
    @can('likes', $post)
        <button wire:click="dislike" class="focus:outline-none"> <i
                class="fa-regular fa-gem block text-lg md:text-xl text-violet-500 rounded-full px-1.5 py-0.5 bg-violet-100"></i>
            <h1 class="text-xs font-bold">{{ $post->likes->count() > 0 }}</h1>
        </button>
    @else
        <button wire:click="like" class="focus:outline-none"> <i class="fa-regular fa-gem block text-lg md:text-xl"></i>
            <h1 class="text-xs font-bold">{{ $post->likes->count() > 0 }}</h1>
        </button>
    @endcan

</div>
