<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{ $title ?? 'Social' }}</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }
        /* Hide scrollbar for Chrome, Safari and Opera */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>
</head>
<body class="bg-[#f0f2f5] min-h-screen text-[#050505] overflow-y-scroll">
    <!-- Fixed Header -->
    <header class="bg-white shadow-sm fixed top-0 w-full z-50 h-14 flex items-center justify-between px-4">
        <!-- Left: Logo & Search -->
        <div class="flex items-center gap-2 w-1/4">
            <a href="{{ route('dashboard') }}" class="text-blue-600">
                <svg viewBox="0 0 36 36" class="h-10 w-10 fill-current" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.181 35.87C29.094 34.791 36 27.202 36 18c0-9.941-8.059-18-18-18S0 8.059 0 18c0 8.442 5.811 15.526 13.652 17.471L14 27.435v-9.177h-3.497v-4.034H14v-3.023c0-3.456 2.066-5.366 5.204-5.366 1.503 0 3.08.268 3.08.268v3.394H20.55c-1.713 0-2.247 1.063-2.247 2.154v2.573h3.824l-.611 4.034H18.303v10.305l1.878.447z"></path>
                </svg>
            </a>
            <div class="relative hidden md:block">
                <form action="{{ route('find.friends') }}" method="get">
                    <input type="text" name="query" placeholder="Search Facebook" class="bg-[#f0f2f5] px-4 py-2 rounded-full pl-10 focus:outline-none w-60 text-[15px]" autocomplete="off">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-3 top-2.5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </form>
            </div>
        </div>

        <!-- Center: Navigation -->
        <div class="hidden md:flex justify-center w-2/4 h-full">
            <nav class="flex space-x-1 h-full">
                <a href="{{ route('dashboard') }}" class="px-10 flex items-center h-full border-b-[3px] border-blue-500 text-blue-500 hover:bg-gray-100 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                </a>
                <a href="{{ route('find.friends') }}" class="px-10 flex items-center h-full border-b-[3px] border-transparent text-gray-500 hover:bg-gray-100 rounded-lg hover:border-b-[3px] hover:border-transparent relative group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 group-hover:text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                    </svg>
                </a>
                <a href="#" class="px-10 flex items-center h-full border-b-[3px] border-transparent text-gray-500 hover:bg-gray-100 rounded-lg hover:border-b-[3px] hover:border-transparent relative group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 group-hover:text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
                    </svg>
                </a>
            </nav>
        </div>

        <!-- Right: Profile & Menu -->
        <div class="flex items-center justify-end gap-2 w-1/4">
            <a href="{{ route('profile') }}" class="hidden xl:flex items-center gap-2 hover:bg-gray-100 p-1 rounded-full pr-3 font-semibold text-[15px]">
                <div class="w-8 h-8 rounded-full bg-gray-300 overflow-hidden">
                    @if (auth()->user()->dp)
                        <img src="{{ asset('storage/images/dp/' . auth()->user()->dp) }}" alt="Profile" class="w-full h-full object-cover">
                    @else
                        <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name ?? 'User' }}&background=random" alt="Profile" class="w-full h-full object-cover">
                    @endif
                </div>
                <span>{{ auth()->user()->fname . ' ' . auth()->user()->lname ?? 'User' }}</span>
            </a>
            
            <div class="flex gap-2">
                <button class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center hover:bg-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                    </svg>
                </button>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center hover:bg-gray-300" title="Logout">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="pt-14 min-h-screen">
        {{ $slot }}
    </div>
</body>
</html>
