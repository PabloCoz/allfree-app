<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 fixed top-0 z-50 w-full">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('welcome') }}" class="flex items-center select-none">
                        <div class="hexagon hexagon1">
                            <div class="hexagon-in1">
                                <div class="hexagon-in2 flex justify-center items-center">
                                    <i class="fa-regular fa-handshake text-white text-3xl"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="font-rancho text-4xl font-bold hidden md:block ml-3">
                            AllFree
                        </h1>
                    </a>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Settings Dropdown -->
                @auth
                    <ul class="flex items-center justify-end space-x-7">
                        <li>
                            <a href="{{ route('dashboard') }}"><i
                                    class="fa-solid fa-house-crack text-2xl @routeIs('dashboard') text-violet-600 @endif"></i></a>
                        </li>
                        <li>
                            @livewire('button.post-add')
                        </li>
                        {{-- <li>
                        <a href=""><i class="fa-solid fa-credit-card text-2xl"></i></a>
                    </li> --}}
                        <li>
                            @livewire('button.post-notification')
                        </li>
                        <li>
                            <a href="{{-- {{ route('chat') }} --}}"><i class="fa-solid fa-message text-2xl
                                {{-- @routeIs('chat') text-violet-600 @endif --}}"></i></a>
                        </li>
                        <div class="ml-5 relative">
                            <x-jet-dropdown align="center" width="48">
                                <x-slot name="trigger">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <button
                                            class="flex text-sm border-2 border-gray-300 rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-7 w-7 rounded-full object-cover"
                                                src="{{ Auth::user()->profile_photo_url }}"
                                                alt="{{ Auth::user()->name }}" />
                                        </button>
                                    @else
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{ Auth::user()->name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    @endif
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400 text-center">
                                        {{ __('Manage Account') }}
                                    </div>

                                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-jet-dropdown-link>

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                            {{ __('Log Out') }}
                                        </x-jet-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-jet-dropdown>
                        </div>
                    </ul>
                @else
                    <div class="flex items-center space-x-3">
                        @livewire('modals.login-modal')
                        <button class="bg-violet-600 rounded-lg px-4 py-2 shadow-lg shadow-violet-600/25"><a
                                href="{{ route('register') }}"
                                class="text-sm text-white hover:text-gray-700 font-bold">{{ __('Register') }}</a></button>
                    </div>
                @endauth
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div class="block sm:hidden">
        <div class="flex md:hidden items-center justify-center border-t-2 border-gray-200 shadow">

            <!-- Responsive Settings Options -->
            @auth
                <ul class="flex items-center justify-between space-x-8 py-1">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <i class="fa-solid fa-home text-2xl @routeIs('dashboard') text-violet-600 @endif"></i>
                        </a>
                    </li>
                    <li>
                        @livewire('button.post-add')
                    </li>
                    {{-- <li>
                        <a href=""><i class="fa-solid fa-credit-card text-2xl"></i></a>
                    </li> --}}
                    <li>
                        @livewire('button.post-notification')
                    </li>
                    <li>
                        <a href="{{-- {{ route('chat') }} --}}"><i
                                class="fa-solid fa-comment-dots text-2xl {{-- @routeIs('chat') text-violet-600 @endif --}}"></i></a>
                    </li>
                    <li>
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <div class="mt-2">
                                        <button>
                                            <img class="h-8 w-8 rounded-full object-cover border-2 border-gray-300"
                                                src="{{ Auth::user()->profile_photo_url }}"
                                                alt="{{ Auth::user()->name }}" />
                                        </button>

                                    </div>
                                @endif
                            </x-slot>
                            <x-slot name="content">
                                <div class="mt-3 space-y-1">
                                    <!-- Account Management -->
                                    <x-jet-responsive-nav-link href="{{ route('user.show', auth()->user()) }}"
                                        :active="request()->routeIs('user.show', auth()->user())">
                                        {{ __('Perfíl') }}
                                    </x-jet-responsive-nav-link>

                                    <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                                        {{ __('Ajustes') }}
                                    </x-jet-responsive-nav-link>


                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                            @click.prevent="$root.submit();">
                                            {{ __('Log Out') }}
                                        </x-jet-responsive-nav-link>
                                    </form>
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </li>
                </ul>
            @else
                <div class="flex items-center space-x-4 py-2">
                    @livewire('modals.login-modal')
                    <a href="{{ route('register') }}"
                        class="bg-violet-600 rounded px-3 py-1 shadow text-white font-bold">Registrate</a>
                </div>
            @endauth
        </div>
    </div>
</nav>
