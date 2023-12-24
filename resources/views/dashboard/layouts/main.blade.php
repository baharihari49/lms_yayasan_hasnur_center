<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>belajarin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</head>
<body>
    <div style="min-height: 100vh" class="antialiased bg-gray-50 dark:bg-gray-900">
        @include('dashboard.layouts.navbar')
        @include('dashboard.layouts.sidebar')

        <main>
            <div style="min-height: 100vh" class="p-4 md:ml-64 h-auto pt-20 overflow-hidden">
                @yield('container')
            </div>
        </main>
    </div>
</body>
</html>
