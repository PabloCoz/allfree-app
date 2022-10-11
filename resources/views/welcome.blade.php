<x-index-layout>

    <div id="content_load">
        <div id="content">
        </div>
    </div>

    <section class="bg-violet-100 w-full"
        style="background-image: url({{ asset('img/indice/Recurso2.png') }}); background-repeat: no-repeat;">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 lg:grid-cols-5 gap-5">
            <div class="hidden lg:flex justify-center top-0 bg-azul w-20">

                <div class="flex justify-center items-end">
                    <div class="mb-3 space-y-2">
                        <i class="fa-brands fa-facebook text-rose-200 text-3xl block"></i>
                        <i class="fa-brands fa-instagram text-rose-200 text-3xl block"></i>
                    </div>
                </div>
            </div>
            <div class="col-span-1 md:col-span-2 mx-5 md:mx-0">
                <a href="{{ route('welcome') }}" class="flex items-center select-none mt-4 outline-none">
                    <div class="hexagon hexagon1">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2 flex justify-center items-center">
                                <i class="fa-regular fa-handshake text-white text-4xl"></i>
                            </div>
                        </div>
                    </div>
                    <h1 class="font-rancho text-5xl font-bold hidden md:block">
                        AllFree
                    </h1>
                </a>

                <div class="py-12 lg:mt-20">
                    <h1 class="font-rancho text-7xl font-bold">
                        AllFree
                    </h1>
                    <h1 class="text-3xl mt-10 font-morally">
                        “Dona, regala y ayuda <br>
                        muy rápido y fácil”
                    </h1>
                </div>
            </div>
            <div class="col-span-1 md:col-span-2">
                <ul class="flex justify-center md:block md:-space-y-36">
                    <li class="scale-90 md:scale-75">
                        <img loading="lazy" class="rounded-lg transform -rotate-12 p-2 bg-azul"
                            src="{{ asset('img/indice/lion.jpg') }}">
                    </li>
                    <li class="scale-90 md:scale-75">
                        <img loading="lazy" class="rounded-lg transform rotate-6 p-2 bg-rosado"
                            src="{{ asset('img/indice/akacha.jpg') }}">
                    </li>
                    <li class="scale-90 md:scale-75">
                        <img loading="lazy" class="rounded-lg transform -rotate-12 p-2 bg-morado"
                            src="{{ asset('img/indice/pexels.jpg') }}">
                    </li>
                </ul>
            </div>

        </div>
    </section>

    <section class="mt-10">
        <h1 class="text-center text-5xl font-morally text-azul">
            ¡Ayudar y reutilizar nunca había sido tan fácil!
        </h1>
        <div class="my-6 max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="col-span-1 bg-azul text-white  rounded-lg overflow-hidden">
                    <article class="px-6 py-4">
                        <figure class="flex justify-center items-center">
                            <i class="fa-solid fa-handshake-angle text-4xl"></i>
                        </figure>
                        <p class="mt-4 text-center font-semibold">
                            Si estas pasando por un momento difícil o conoces a alguien que esta pasando momentos
                            difíciles; compártelo en AllFree y solicita ayuda.
                        </p>
                    </article>
                </div>
                <div class="col-span-1 bg-morado text-white rounded-lg overflow-hidden">
                    <article class="px-6 py-4">
                        <figure class="flex justify-center items-center">
                            <i class="fa-solid fa-gift text-4xl"></i>
                        </figure>
                        <p class="mt-4 text-center font-semibold">
                            Publica artículos en AllFree un solo anuncio. ¡Recuerda!
                            No es venta, ni compra. Se
                            trata de compartir entre todos.
                        </p>
                    </article>
                </div>
                <div class="col-span-1 bg-rosado text-white rounded-lg overflow-hidden">
                    <article class="px-6 py-4">
                        <figure class="flex justify-center items-center">
                            <i class="fa-solid fa-heart text-4xl"></i>
                        </figure>
                        <p class="mt-4 text-center font-semibold">
                            A través de videos sobre obras de caridad o momentos que inviten a tomar
                            conciencia. AllFree te invita a ayudar a los demás.
                        </p>
                    </article>
                </div>

                <div class="col-span-1 bg-azul text-white rounded-lg overflow-hidden">
                    <article class="px-6 py-4">
                        <figure class="flex justify-center items-center">
                            <i class="fa-solid fa-hand-holding-dollar text-4xl"></i>
                        </figure>
                        <p class="mt-4 text-center font-semibold">
                            A cualquier momento puedes apoyar económicamente a quien más lo
                            necesite. AllFree es una startup que brinda apoyo a
                            instituciones benéficas y con tu ayuda podemos lograrlo.
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-16 "
        style="background-image: url({{ asset('img/indice/Recurso3.png') }}); background-repeat: repeat-y;">
        <h1 class="font-morally text-5xl text-center text-azul">
            ¿Cómo funciona?
        </h1>
        <div>
            <section class="max-w-5xl mx-auto py-6 px-4 sm:px-6 lg:px-8 my-12 ">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-6">
                    <div class="col-span-1">
                        <div class="mx-5 pt-3 lg:pt-16">
                            <div class="flex justify-center font-bold text-white text-2xl">
                                <div class="h-16 w-16 rounded-full bg-azul p-5 flex items-center justify-center">
                                    1
                                </div>
                            </div>
                            <h1 class="font-bold text-2xl text-center ">
                                Regístrate
                            </h1>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <figure>
                            <img loading="lazy" class="h-80 lg:h-96 w-auto object-contain"
                                src="{{ asset('img/indice/login.svg') }}">
                        </figure>
                    </div>

                    <div class="col-span-1 order-2 md:order-1">
                        <figure>
                            <img loading="lazy" class="h-80 lg:h-96 w-auto object-contain"
                                src="{{ asset('img/indice/post.svg') }}" alt="" srcset="">
                        </figure>
                    </div>
                    <div class="col-span-1 order-1 md:order-2">
                        <div class="mx-5 pt-3 lg:pt-16">
                            <div class="flex justify-center font-bold text-white text-2xl">
                                <div class="h-16 w-16 rounded-full bg-azul p-5 flex items-center justify-center">
                                    2
                                </div>
                            </div>
                            <h1 class="font-bold text-2xl text-center">
                                Crea una publicación
                            </h1>
                        </div>
                    </div>

                    <div class="col-span-1 order-3">
                        <div class="mx-5 pt-3 lg:pt-16">
                            <div class="flex justify-center font-bold text-white text-2xl">
                                <div class="h-16 w-16 rounded-full bg-azul p-5 flex items-center justify-center">
                                    3
                                </div>
                            </div>
                            <h1 class="font-bold text-2xl text-center">
                                Súbelo a <b class="font-rancho text-4xl">AllFree</b> para que todos lo vean
                            </h1>
                        </div>
                    </div>
                    <div class="col-span-1 order-4">
                        <figure>
                            <img loading="lazy" class="h-80 lg:h-96 w-auto object-contain"
                                src="{{ asset('img/indice/subir.svg') }}" alt="" srcset="">
                        </figure>
                    </div>


                </div>
            </section>
        </div>
    </section>

    <section class="my-16 ">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="relative overflow-hidden">
                <figure>
                    <img loading="lazy" class="object-cover object-center" src="{{ asset('img/indice/media.jpg') }}"
                        alt="" srcset="">
                </figure>
                <div class="absolute top-0 left-0 bg-slate-800/50 h-full w-full z-10 opacity-50"></div>
            </div>
            <div class="text-white bg-azul z-50">
                <div class="mx-5 pt-3 lg:pt-16">
                    <div class="flex justify-center md:justify-start items-center mx-10 md:mr-20">
                        <div>
                            <h1 class="font-morally text-5xl text-center md:text-left">
                                ¿Qué es AllFree?
                            </h1>
                            <p class="mt-4 font-semibold text-xl">
                                AllFree es una plataforma que te permite compartir
                                artículos, servicios, productos, etc. de forma gratuita. AllFree
                                es una comunidad que busca ayudar a los demás.
                            </p>

                            <div class="my-8 flex justify-end">
                                <a href="{{ route('dashboard')}}">
                                    <button
                                        class="bg-gradient-to-r from-violet-500 to-indigo-600 p-4 rounded-lg font-bold text-white text-2xl font-handlee">Únete
                                        ahora!</button>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </section>

    <div class="mt-10">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 place-items-center">
                <div class="flex items-center order-2 md:order-1 mt-10 md:mt-0">
                    <div class="hexagon hexagon1">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2 flex justify-center items-center">
                                <i class="fa-regular fa-handshake text-white text-4xl"></i>
                            </div>
                        </div>
                    </div>
                    <p>&copy; AllFree 2022.</p>
                </div>


                <div class="text-gray-600 font-bold flex items-center text-center space-x-5 order-1 md:order-2">
                    <h1>Terminos y Condiciones</h1>
                    <h1>Politicas de privacidad</h1>
                </div>
            </div>
        </div>
    </div>


    @push('start')
        <script>
            window.onload = function() {
                var content_load = document.getElementById('content_load');
                content_load.style.visibility = 'hidden';
                content_load.style.opacity = '0';
            }
        </script>
    @endpush
</x-index-layout>
