<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100 font-sans">
        <div class="flex h-screen">
            @include('layouts.side')



            <!-- Page Content -->
            <main class="flex-1 p-8">
                @if (isset($header))
                    <!-- <header class="bg-white dark:bg-gray-800 shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"> -->
                            <!-- {{ $header }} -->
                        <!-- </div>
                    </header> -->

                    <header class="flex items-center justify-between">
                        <h2 class="text-xl font-bold text-gray-800">Admin Dashboard</h2>
                        <div class="flex items-center gap-4">
                            <span class="text-sm text-gray-500">admin@pedulibersama.com</span>
                            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
                                <span class="text-gray-400">👤</span>
                            </div>
                        </div>
                    </header>
                @endif

                {{ $slot }}
            </main>
        </div>
    </body>
</html>
