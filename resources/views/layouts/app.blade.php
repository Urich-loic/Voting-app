<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Lc voting') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="/src/style.css" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased p-4 bg-gray-100">

        <header class="xl:w-8xl md:4xl sm:2xl mx-auto py-2">
        <div class="flex justify-between">
            <a href="" class="">
                 <ul>
                    <li><img src="{{asset('images/logo.png')}}" alt="" width="40"></li>
                </ul>
            </a>
        <div>
             @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                         <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5  text-[#1b1b18] dark:hover:border-[#3E3E3A] rounded-xs text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-xs text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                    <ul><li><img src="{{asset('images/user.png')}}" alt="" width="30"></li></ul>
                </nav>
            @endif
        </div>
        </div>
       </header>

        <div class="container mx-auto xl:6xl gap-3 lg:6xl md:5xl sm:4xl">

        <div class="flex space-x-8 xl:flex-row md:flex-row sm:flex-col xl:w-6xl md:4xl sm:2xl mx-auto pt-5">
            <div class="xl:w-1/3 flex flex-col h-full sm:w-3/3 bg-white rounded-xl text-center text-black p-5 sm:mb-9">
                <h3 class="text-center font-bold text-xl">Add an idea</h3>
                <p class="pb-5">Let's know what's in your mind</p>
                <form action="" class="space-y-3">
                    <input type="text" name="idea" class="text-gray-500 border-none bg-gray-200 rounded-xl w-full" placeholder="Your idea">

                    <select name="category" id="" class="border-none bg-gray-200 rounded-xl w-full text-gray-500">
                        <option value="Category">Category</option>
                        <option value="Category">Category</option>
                        <option value="Category">Category</option>
                        <option value="Category">Category</option>
                    </select>

                    <textarea name="idea_description" id="" class="border-none bg-gray-200 rounded-xl w-full text-gray-500" placeholder="Describe your idea"></textarea>
                    <div class="flex items-center justify-center gap-5">
                        <input type="file" class="bg-gray-200 xl:w-1/2 sm:w-2/2 rounded-xl p-3">
                        <button class="text-md bg-blue-500 xl:w-1/2 sm:w-2/2 rounded-xl px-5 py-3 text-white">Submit</button>
                    </div>
                </form>

            </div>
            <div class="xl:w-2/3 sm:w-3/3 min-h-100">
                <div class="flex flex-row justify-between">
                        <nav class="flex items-center ">
                            <ul class="flex space-x-10 border-b-3 border-gray-300">
                            <li class="uppercase md:text-xs  pb-2 text-gray-400 text-sm">All ideas (87)</li>
                            <li class="uppercase md:text-xs pb-2 text-gray-400 text-sm">Considering</li>
                            <li class="uppercase md:text-xs pb-2 text-gray-400 text-sm">in progress</li>
                            </ul>
                        </nav>
                         <nav class="flex items-center">
                            <ul class="flex space-x-10 border-b-3 border-gray-300">
                            <li class="uppercase md:text-xs pb-2 text-gray-400 text-sm">All ideas</li>
                            <li class="uppercase pb-2 text-gray-400 hover:text-black text-sm md:text-xs hover:border-b-3 transition  duration-500">Considering</li>
                            </ul>
                        </nav>
                    </div>
                    <div class="vote-ideas pt-3">
                       {{$slot}}
                    </div>

            </div>
        </div>
       </div>

      @yield('content')

    </body>
</html>
