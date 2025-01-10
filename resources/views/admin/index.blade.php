
@extends('layouts.app')

@section('title', 'index - Peduli Bersama')

@section('content')
    <!-- Hero Section -->
    <section class="relative">
      <img
        src="Image\kamp-terkini1.jpg"
        alt="Hero Image"
        class="w-full object-cover"
      />
    </section>

    <!-- Gallery Section -->
    <section class="container mx-auto my-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <img
        src="Image/pendidikan.jpg"
        alt="Gallery Image 1"
        class="rounded-lg shadow-md"
      />
      <img
        src="Image/bencana.png"
        alt="Gallery Image 2"
        class="rounded-lg shadow-md"
      />
      <img
        src="Image/sosial.jpg"
        alt="Gallery Image 3"
        class="rounded-lg shadow-md"
      />
      <img
        src="Image/bencana1.jpg"
        alt="Gallery Image 4"
        class="rounded-lg shadow-md"
      />
      <img
        src="Image/sosial.jpg"
        alt="Gallery Image 5"
        class="rounded-lg shadow-md"
      />
      <img
        src="Image/sosial.png"
        alt="Gallery Image 6"
        class="rounded-lg shadow-md"
      />
    </section>

    <!-- Call-to-Action Section -->
    <section class="container mx-auto text-center my-8">
      <a
        href="./donasi.html"
        class="inline-block px-12 py-4 bg-red-200 text-red-500 rounded-full shadow-md text-lg font-semibold hover:bg-red-300"
      >
        Selengkapnya
      </a>
    </section>

    <!-- Action Cards -->
    <section class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 my-8">
      <div class="flex flex-col items-center bg-pink-100 rounded-lg shadow-md p-6">
        <h2 class="text-red-500 text-2xl font-bold mb-4">Donasi</h2>
        <a
          href="./donasi.html"
          class="px-8 py-3 bg-red-200 text-red-500 rounded-full shadow-md font-semibold hover:bg-red-300"
        >
          Donasi
        </a>
      </div>
      <div class="flex flex-col items-center bg-pink-100 rounded-lg shadow-md p-6">
        <h2 class="text-red-500 text-2xl font-bold mb-4">Galang Dana</h2>
        <a
          href="#fundraise"
          class="px-8 py-3 bg-red-200 text-red-500 rounded-full shadow-md font-semibold hover:bg-red-300"
        >
          Galang Sekarang
        </a>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-200 border-t-2 border-red-500 py-8">
      <div class="container mx-auto text-left">
        <img
          src="Image/logo1-removebg-preview.png"
          alt="Footer Logo"
          class="ml-20 w-20 h-20"
        />
        <h2 class="text-red-500 text-4xl font-bold mt-4">Peduli Bersama</h2>
      </div>
    </footer>
  </body>
</html>