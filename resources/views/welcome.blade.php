<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Peduli Bersama')</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="font-sans bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-md">
      <nav class="container mx-auto flex flex-wrap items-center justify-between py-4 px-4 md:px-8">
        <div class="flex items-center gap-4">
          <img src="https://via.placeholder.com/80" alt="Logo" class="w-16 md:w-20 h-16 md:h-20" />
          <h1 class="text-red-500 text-2xl md:text-4xl font-bold">Peduli Bersama</h1>
        </div>
        <form class="flex bg-gray-100 p-2 rounded-lg w-full md:w-1/2 shadow-inner mt-4 md:mt-0">
          <input
            type="search"
            placeholder="Cari..."
            class="flex-grow bg-transparent outline-none px-2 text-gray-600"
          />
          <button type="submit" class="text-gray-600">
            🔍
          </button>
        </form>
        <div class="flex gap-2 mt-4 md:mt-0">
          <a
            href="{{ url('/donasi') }}"
            class="px-4 py-2 bg-red-200 text-red-500 rounded-full shadow-md hover:bg-red-300 text-sm md:text-base"
          >
            Donasi
          </a>
          <a
            href="{{ url('/login') }}"
            class="px-4 py-2 bg-red-200 text-red-500 rounded-full shadow-md hover:bg-red-300 text-sm md:text-base"
          >
            Login
          </a>
        @if(Auth::check() && Auth::user()->id != 3)
          <a
            href="{{ url('/dashboard') }}"
            class="px-4 py-2 bg-red-200 text-red-500 rounded-full shadow-md hover:bg-red-300 text-sm md:text-base"
          >
            Dashboard
          </a>
        @endif
        </div>
      </nav>
    </header>

    <!-- Main Content -->
    <main>
      @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-200 border-t-2 border-red-500 py-8">
      <div class="container mx-auto text-left">
        <img
          src="{{ asset('images/logo1-removebg-preview.png') }}"
          alt="Footer Logo"
          class="ml-20 w-20 h-20"
        />
        <h2 class="text-red-500 text-4xl font-bold mt-4">Peduli Bersama</h2>
      </div>
    </footer>
  </body>
</html>
