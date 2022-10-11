<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2537d8fed3.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="{{ asset('glider/glider.min.js') }}"></script>

    <style>
        .hexagon {
            overflow: hidden;
            visibility: hidden;
            -webkit-transform: rotate(120deg);
            -moz-transform: rotate(120deg);
            -ms-transform: rotate(120deg);
            -o-transform: rotate(120deg);
            transform: rotate(120deg);
            cursor: pointer;
        }

        .hexagon-in1 {
            overflow: hidden;
            width: 100%;
            height: 100%;
            -webkit-transform: rotate(-60deg);
            -moz-transform: rotate(-60deg);
            -ms-transform: rotate(-60deg);
            -o-transform: rotate(-60deg);
            transform: rotate(-60deg);
        }

        .hexagon-in2 {
            width: 100%;
            height: 100%;
            background-repeat: no-repeat;
            background-position: 50%;
            background: linear-gradient(90deg, rgba(111, 38, 221, 1) 0%, rgba(183, 25, 255, 1) 100%);
            visibility: visible;
            -webkit-transform: rotate(-60deg);
            -moz-transform: rotate(-60deg);
            -ms-transform: rotate(-60deg);
            -o-transform: rotate(-60deg);
            transform: rotate(-60deg);
        }

        .hexagon1 {
            width: 70px;
            height: 60px;
            /* margin: 0 0 0 -80px; */
        }
    </style>
    <!-- Styles -->
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('glider/glider.css') }}">
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-white ">
        @livewire('navigation-menu')

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <div class="cols-span-1 hidden lg:flex justify-end py-12">
                <div class="my-4 mx-3 py-5">
                    @auth
                        <a href="{{ route('user.show', auth()->user()) }}"
                            class="flex justify-start items-center border-b border-gray-400 pb-6">
                            <img class="rounded-full w-12 h-12 object-cover object-center border-2 border-violet-600"
                                src="{{ Auth::user()->profile_photo_url }}" alt="">
                            <div class="ml-4">
                                <p class="text-lg font-bold font-joselin ">{{ Auth::user()->name }}</p>
                                <p class="text-xs text-gray-600">{{ Auth::user()->email }}</p>
                            </div>
                        </a>
                    @endauth
                    <div class="mt-8 ">
                        <h1 class="font-bold text-xs uppercase tracking-widest text-gray-500">Descubre más en:</h1>
                    </div>
                    <div class="my-3">
                        <div>
                            <a href="{{ route('dashboard') }}"
                                class="w-full rounded-lg p-2 flex items-center space-x-5 font-bold @routeIs('dashboard') bg-violet-600 text-white @endif">
                                <i class="fa-solid fa-home text-2xl"></i>
                                <h1 class="text-sm">Inicio</h1>
                            </a>
                        </div>
                        @foreach ($categories as $category)
                            <ul class="space-y-3">
                                <li class="">
                                    <a href="{{ route('category.show', $category) }}"
                                        class="w-full rounded-lg hover:bg-violet-100 p-2 flex items-center space-x-5 font-bold @routeIs('category.show', $category) bg-violet-600 text-white @endif">
                                        <i class="{{ $category->icon }} text-2xl"></i>
                                        <h1 class="text-sm">{{ $category->last_name }}</h1>
                                    </a>
                                </li>
                            </ul>
                        @endforeach

                    </div>
                    <div class="border-t border-gray-400 pt-2">
                        <p class="text-sm text-gray-500">AllFree &copy; 2022</p>
                        <a href="{{ route('terms.show') }}" class="text-sm text-gray-500 hover:underline">Terminos
                            y
                            Condiciones</a>
                        <br>
                        <a href="{{ route('policy.show') }}" class="text-sm text-gray-500 hover:underline">Politicas de
                            privacidad</a><br>
                        {{--  <a href="" class="text-sm text-gray-500 hover:underline">Acerca de</a> --}}
                    </div>
                </div>
            </div>
            <div class="cols-span-1 md:col-span-2 h-[calc(100vh)] overflow-auto py-12">
                <main class="w-full py-12 md:py-0">
                    {{ $slot }}
                </main>
            </div>
        </div>

    </div>

    @stack('modals')

    @livewireScripts
    @stack('script')
</body>

</html>
