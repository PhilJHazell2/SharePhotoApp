<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>

        <div class="flex relative min-h-screen">
            <div class="bg-gray-900 text-white w-64 p-10">
                <h2 class="text-2xl text-white mb-2 font-bold tracking-tight">Client Portal</h2>
                <hr class="bg-gray-600 border-gray-700">
                <ul class="mt-6">
                    <li class="mb-4"><a href="/">Home</a></li>
                    <li class="mb-4"><a href="">Users</a></li>
                    <li class="mb-4"><a href="">Attack</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="flex-1 bg-gray-800 py-10 px-24 text-2xl font-bold text-white">
                @yield('content')
            </div>
        </div>
    </body>
</html>
