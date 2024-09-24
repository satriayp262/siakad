<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SIAKAD') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('livewire.component.navbar')

            <div class="flex flex-col md:flex-row flex-1">
                @include('livewire.component.sidebar')

                <div class="flex flex-col flex-1">
                    <main class="flex-1 md:ml-64 mb-16">
                        @yield('content')
                    </main>
                    @include('livewire.component.footer', ['class' => 'mt-auto'])
                </div>
            </div>
        </div>
    </body>
</html>
