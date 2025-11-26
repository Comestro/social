<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body class="bg-gray-100 min-h-screen">
        <!-- add header -->
        <header class="bg-sky-600 shadow flex-1 py-4 px-[10%] fixed top-0 w-full z-[999]">
            <div class="max-w-8xl mx-auto px-4 flex justify-between items-center">
                <h1 class="text-2xl font-bold text-white">Social</h1>
                <!-- search -->
                <div>
                    <form action="{{ route('find.friends') }}" method="get">
                    <input type="text" placeholder="Search..." class="px-3 py-2 rounded" name="query" size="60">
                    <button type="submit" class="hidden">Search</button>
                    </form>
                </div>  

                <!-- links -->
                <nav class="mt-0">
                    <ul class="flex space-x-4">
                        <li><a href="{{ route('dashboard') }}" class="text-white hover:underline">Dashboard</a></li>
                        <li><a href="{{ route("profile") }}" class="text-white hover:underline">Profile</a></li>
                        <li><a href="#" class="text-white hover:underline">Settings</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="text-white hover:underline">Logout</button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
     
        <div class="mt-14">
            {{ $slot }}
        </div>
    </body>
</html>
