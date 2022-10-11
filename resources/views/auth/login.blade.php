<x-guest-layout>
    <div class="max-w-4xl mx-auto">

        <div class="grid grid-cols-1 md:grid-cols-2">

            <div class="bg-violet-200 col-span-1 hidden md:flex justify-center items-center rounded-lg">
                <div>
                    <div class="my-7">
                        <a class="mb-5 flex items-center justify-center" href="{{ route('dashboard') }}">
                            <div class="hexagon hexagon1">
                                <div class="hexagon-in1">
                                    <div class="hexagon-in2 flex justify-center items-center">
                                        <i class="fa-regular fa-handshake text-4xl text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="font-rancho text-5xl ml-3 font-bold hidden md:block">
                                AllFree
                            </h1>
                        </a>
                    </div>
                    <ul class="py-5 space-y-5 mx-3">
                        <li class="flex items-center space-x-3">
                            <i class="fa-solid fa-handshake-angle text-3xl"></i>
                            <h1> Solicita ayuda cuando más lo necesites</h1>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fa-solid fa-gift text-3xl"></i>
                            <h1>Regala o participar en otros regalos</h1>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fa-solid fa-people-carry-box text-3xl"></i>
                            <h1> Solicita ayuda para otros(as) personas</h1>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fa-solid fa-shapes text-3xl"></i>
                            <h1> Comparte experiencias y reflexiones </h1>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-span-1 mx-0 md:mx-4">

                <div class="my-7 block md:hidden">
                    <a class="mb-5 flex items-center justify-center" href="{{ route('dashboard') }}">
                        <div class="hexagon hexagon1">
                            <div class="hexagon-in1">
                                <div class="hexagon-in2 flex justify-center items-center">
                                    <i class="fa-regular fa-handshake text-4xl text-white"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="font-rancho text-5xl ml-3 font-bold hidden md:block">
                            AllFree
                        </h1>
                    </a>
                </div>
                <x-jet-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif



                <div class="my-3 space-y-4">
                    <h1 class="text-sm uppercase tracking-widest text-center font-bold text-gray-800"> INICIE SESIÓN
                        VIA:
                    </h1>
                    <a href="{{ url('/login-google') }}"
                        class="w-full flex items-center justify-center space-x-2 rounded-lg text-white font-bold p-2 bg-red-600 shadow-lg shadow-red-600/30">
                        <i class="fa-brands fa-google text-2xl"></i>
                        <h1 class="text-sm text-center">Google</h1>
                    </a>
                    {{-- <a href="{{ url('/login-facebook') }}"
                        class="w-full flex items-center justify-center space-x-2 rounded-lg text-white font-bold p-2 bg-blue-600 shadow-lg shadow-blue-600/30">
                        <i class="fa-brands fa-facebook-square text-2xl"></i>
                        <h1>Iniciar Sesión con Facebook</h1>
                    </a> --}}
                </div>
                <div class="py-5">
                    <h1 class="text-sm uppercase tracking-widest text-center font-bold text-gray-800"> O INICIE SESION
                        VIA
                        EMAIL:
                    </h1>
                    <form class="px-3" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <label class="text-xs uppercase tracking-widest text-center font-bold text-gray-800"
                                for="email">Email</label>
                            <input id="email"
                                class="block w-full rounded-lg py-1 border border-gray-500 focus:border-black ring-0 focus:ring-black"
                                type="email" name="email" required autofocus />
                        </div>

                        <div class="mt-2">
                            <label class="text-xs uppercase tracking-widest text-center font-bold text-gray-800"
                                for="password">{{ __('Password') }}</label>
                            <input id="password"
                                class="block w-full rounded-lg py-1 border border-gray-500 focus:border-black ring-0 focus:ring-black"
                                type="password" name="password" required autocomplete="current-password" />
                        </div>

                        <div class="mt-3">
                            <button type="submit"
                                class="w-full rounded-lg py-1 uppercase tracking-widest text-sm leading-8 text-white font-bold bg-violet-600 shadow-lg shadow-violet-600/50">
                                {{ __('Login') }}
                            </button>
                        </div>


                        <div class="flex items-center justify-center mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
