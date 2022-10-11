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


    <style>
        #efect {
            width: 14ch;
            animation: typing 5s steps(32), blink .5s infinite step-end alternate;
            overflow: hidden;
            text-align: center;
        }

        @keyframes typing {
            from {
                width: 0
            }
        }

        @keyframes blink {
            50% {
                border-color: rgb(15 23 42)
            }
        }

        @font-face {
            font-family: 'morally';
            src: url({{ asset('fonts/Morally-Serif.ttf') }});
        }

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
            width: 100px;
            height: 80px;
            /* margin: 0 0 0 -80px; */
        }

        .text-azul {
            color: #5560a9;
        }

        .text-morado {
            color: #8b5ca2;
        }

        .text-rosado {
            color: #e54b94;
        }

        .bg-azul {
            background-color: #5560a9;
        }

        .bg-morado {
            background-color: #8b5ca2;
        }

        .bg-rosado {
            background-color: #e54b94;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen ">

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
    @stack('start')
</body>

</html>
