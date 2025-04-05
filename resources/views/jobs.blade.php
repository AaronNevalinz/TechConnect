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
    <style>
        dialog::backdrop{
            background: rgba(15, 23, 42, 0.4);
            backdrop-filter: blur(2px);
        }
        dialog::-webkit-scrollbar{
            display: none;
        }
    </style>
</head>
<body>
    <header class=" py-4 px-10 shadow-sm">
    <nav class="flex gap-x-16 items-center">
        <h1 class="font-bold">
            <a href="{{route('index')}}">TechConnect</a>
        </h1>
        <div class="justify-between flex flex-1">
            <ul class="flex gap-x-8 items-center">
                <li>
                    <a href="{{route('explore-startups')}}">Explore Startups</a>
                </li>
                <li>Tech Corner</li>
                <li>
                    <a href="{{route('jobs')}}">Jobs</a>
                </li>
                <li>Career Hub</li>
                <li>Events</li>
                <li>Insights</li>
                <li>Pricing</li>
            </ul>
            <div class="flex gap-x-10">
                <button>Login</button>
                <button class="bg-green-700 text-white px-2 py-1 rounded-lg">Sign up</button>
            </div>
        </div>
    </nav>
</header>

</body>
</html>
