<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])

</head>

<body>
    <header class=" py-4 flex justify-center items-center shadow-sm">
        <nav class="flex gap-x-16 w-2/3 items-center">
            <h1 class="font-bold">
                <a href="{{ route('index') }}">TechConnect</a>
            </h1>
            <div class="justify-between flex flex-1">
                <ul class="flex gap-x-8 items-center">
                    <li>
                        <a href="{{ route('explore-startups') }}">Explore Startups</a>
                    </li>
                    <li>Tech Corner</li>
                    <li>
                        <a href="{{ route('jobs') }}">Jobs</a>
                    </li>
                    <li>Career Hub</li>
                    <li>Events</li>
                    <li>Insights</li>
                    <li>Pricing</li>
                </ul>
                <div class="flex gap-x-10">
                    <a href="{{ route('login') }}" class="inline-block py-3">Login</a>
                    <a href="{{ route('register') }}" class="bg-green-700 text-white px-5 py-3 rounded-full inline-block">Sign up</a>
                </div>
            </div>
        </nav>
    </header>
    {{ $slot }}
</body>

</html>
