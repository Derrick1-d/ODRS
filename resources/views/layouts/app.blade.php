<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ODRS') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <style>
        /* app.css
 .min-h-screen{
    background-image: url(../images/back.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 100vh;
    background-size: 100% 100%;


}
*/

.min-h-screen::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('../images/back.jpg');
    background-size: cover; /* Ensure the image covers the entire background */
    background-position: center; /* Center the background image */
    background-repeat: no-repeat; /* Prevent the image from repeating */
    filter: blur(2px); /* Apply the blur effect */
    z-index: -1; /* Position the pseudo-element behind the content */
}

    </style>
    <body class=" font-sans antialiased ">
        <div class="min-h-screen">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{-- {{ $slot }} --}}
                @yield('content')
            </main>


            {{-- <footer>
                <h4>Made By Khem</h4>
            </footer> --}}
        </div>

    </body>
</html>
