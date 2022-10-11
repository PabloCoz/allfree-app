<div>
    <div class="max-w-xl mx-1 md:mx-auto bg-gray-100 rounded-lg border border-gray-200 shadow-md my-12">
        <section class="rounded-lg bg-white overflow-hidden shadow-md">
            <div class="">
                <div wire:init="loadImages">
                    @if (count($images) || count($resources))
                        <div class="glider-contain">
                            <ul class="glider-{{ $post->id }}">
                                @if ($images)
                                    @foreach ($images as $image)
                                        <li class="">
                                            <img class="rounded-t-lg object-contain object-center w-full h[calc(100vh-20rem)] md:h-96"
                                                src="{{ Storage::url($image->url) }}" alt="">
                                        </li>
                                    @endforeach

                                    @foreach ($resources as $resource)
                                        <li class="">
                                            <video autoplay controls muted
                                                class="rounded-t-lg object-contain object-center w-full h[calc(100vh-20rem)] md:h-96">
                                                <source src=" {{ Storage::url($resource->url) }}">
                                                Your browser does not support the video tag.
                                            </video>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                            <div role="tablist" class="dots"></div>
                        </div>
                    @endif
                </div>

                <div class="ml-4 flex h-auto py-4">
                    <div class="w-full md:w-[calc(36rem-5rem)]">

                        <div class="inline-block text-violet-500 font-bold space-x-1">
                            @foreach ($post->labels as $label)
                                <span>
                                    {{ $label->name }}
                                </span>
                            @endforeach
                        </div>

                        <h5 class="mb-2 text-sm text-gray-600 mr-5">{{ $post->description }}</h5>

                        <div class="flex items-center mt-2">
                            @if ($post->transmitter->profile_photo_url)
                                <img class="h-10 w-10 rounded-full shadow-lg object-contain object-center"
                                    src="{{ $post->transmitter->profile_photo_url }}">
                            @endif
                            @auth
                                <div class="ml-2">
                                    <a href="{{ route('profile.show', $post->transmitter) }}"
                                        class="capitalize text-sm md:text-base font-bold -mb-2 block">{{ $post->transmitter->name }}</a>
                                    <span class="text-gray-500 text-xs">{{ $post->created_at->diffForHumans() }}</span>
                                </div>
                            @else
                                <div class="ml-2">
                                    <h1 class="font-bold text-sm md:text-base capitalize -mb-2">
                                        {{ $post->transmitter->name }}</h1>
                                    <span class="text-gray-500 text-xs">{{ $post->created_at->diffForHumans() }}</span>
                                </div>

                            @endauth

                        </div>
                    </div>
                    <div class="block w-10 md:flex-1 md:w-2  border-l border-gray-300 space-y-3">
                        <ul class="space-y-1">
                            <li class="flex justify-center items-center">
                                @auth
                                    @livewire('button.post-like', ['post' => $post], key($post->id))
                                @else
                                    <i class="fa-regular fa-gem block text-lg md:text-xl"></i>
                                @endauth

                            </li>
                            <li class="flex justify-center">
                                <i class="fa-regular fa-comment-dots block text-lg md:text-xl"></i>
                            </li>
                            <li class="flex justify-center">
                                <i class="fa-regular fa-share-from-square text-lg md:text-xl"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
