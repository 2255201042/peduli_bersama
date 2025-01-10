@extends('layouts.app')

@section('title', 'donasi - Peduli Bersama')

@section('content')
    <!-- Gallery Section -->
    <section class="container mx-auto my-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 px-6">
      <!-- Gallery Item -->
      <div class="relative rounded-lg shadow-md bg-gray-200  h-64 overflow-hidden">
        <img
          src="./Image/bencana1.jpg"
          alt="konten"
          class="absolute inset-0 w-full h-full object-cover"
        />
        <a
          href="./dtl_donatur.html"
          class="absolute bottom-4 left-1/2 transform -translate-x-1/2 px-4 py-2 bg-red-500 text-white rounded-full text-sm font-medium hover:bg-red-600"
        >
          Donasi
        </a>
      </div>
      
      
      <!-- Repeat the above block for more items -->
      <div class="relative rounded-lg shadow-md bg-gray-200 w-200 h-64 overflow-hidden">
        <img
          src="./Image/bencana2.jpg"
          alt="konten"
          class="absolute inset-0 w-full h-full object-cover"
        />
        <a
          href="./dtl_donatur.html"
          class="absolute bottom-4 left-1/2 transform -translate-x-1/2 px-4 py-2 bg-red-500 text-white rounded-full text-sm font-medium hover:bg-red-600"
        >
          Donasi
        </a>
      </div>
      
      </div>
      <div class="relative rounded-lg shadow-md bg-gray-200 w-200 h-64 overflow-hidden">
        <img
          src="./Image/sosial1.jpg"
          alt="konten"
          class="absolute inset-0 w-full h-full object-cover"
        />
        <a
          href="./dtl_donatur.html"
          class="absolute bottom-4 left-1/2 transform -translate-x-1/2 px-4 py-2 bg-red-500 text-white rounded-full text-sm font-medium hover:bg-red-600"
        >
          Donasi
        </a>
      </div>

      <div class="relative rounded-lg shadow-md bg-gray-200 w-200 h-64 overflow-hidden">
        <img
          src="./Image/sosial3.png"
          alt="konten"
          class="absolute inset-0 w-full h-full object-cover"
        />
        <a
          href="./dtl_donatur.html"
          class="absolute bottom-4 left-1/2 transform -translate-x-1/2 px-4 py-2 bg-red-500 text-white rounded-full text-sm font-medium hover:bg-red-600"
        >
          Donasi
        </a>
      </div>

      <div class="relative rounded-lg shadow-md bg-gray-200 w-200 h-64 overflow-hidden">
        <img
          src="./Image/sosial4.jpg"
          alt="konten"
          class="absolute inset-0 w-full h-full object-cover"
        />
        <a
          href="./dtl_donatur.html"
          class="absolute bottom-4 left-1/2 transform -translate-x-1/2 px-4 py-2 bg-red-500 text-white rounded-full text-sm font-medium hover:bg-red-600"
        >
          Donasi
        </a>
      </div>

      <div class="relative rounded-lg shadow-md bg-gray-200 w-200 h-64 overflow-hidden">
        <img
          src="./Image/sosial2.jpg"
          alt="konten"
          class="absolute inset-0 w-full h-full object-cover"
        />
        <a
          href="./dtl_donatur.html"
          class="absolute bottom-4 left-1/2 transform -translate-x-1/2 px-4 py-2 bg-red-500 text-white rounded-full text-sm font-medium hover:bg-red-600"
        >
          Donasi
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