<x-app-layout>
    
    @foreach ($posts as $post)
        @livewire('post.post-index', ['post' => $post])
    @endforeach

    @push('script')
        <script>
            Livewire.on('glider', function(id) {
                new Glider(document.querySelector('.glider-' + id), {
                    slidesToShow: 1,
                    draggable: false,
                    dots: '.glider-' + id + '~ .dots',
                });
            });
        </script>
    @endpush
</x-app-layout>
