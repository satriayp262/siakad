<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIAKAD')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    @include('template.navbar')

    <div class="flex flex-col md:flex-row flex-1">
        @include('template.sidebar')

        <div class="flex flex-col flex-1">
            <main class="flex-1 md:ml-64 mb-16">
                @yield('content')

                @include('template.footer')
            </main>
        </div>
    </div>
</body>
</html>

