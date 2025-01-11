@extends('welcome')

@section('title', 'Detail Donatur - Peduli Bersama')

@section('content')
  <!-- Donatur Details -->
  <section class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    <!-- Left Column -->
    <div class="bg-gray-200 rounded-lg shadow-md overflow-hidden">
      <img src="{{ asset('Image/sosial4.jpg') }}" alt="Placeholder Image" class="w-full h-full object-cover" />
    </div>

    <!-- Right Column -->
    <div class="space-y-4">
      <div class="text-center lg:text-left">
        <h2 class="text-3xl font-bold text-red-500">Peduli Bersama</h2>
      </div>
      <div class="bg-red-100 p-4 rounded-lg shadow-md text-center lg:text-left">
        <button class="bg-red-500 text-white px-6 py-2 rounded-full font-medium hover:bg-red-600">
          Mulai Donasi
        </button>
      </div>

      <!-- Description -->
      <section class="mt-12">
        <h3 class="text-xl font-semibold text-gray-700 mb-4">Deskripsi :</h3>
        <div class="w-full bg-white border border-gray-300 rounded-lg shadow-md p-4 h-64">
          <p class="text-gray-500">Tuliskan deskripsi di sini...</p>
        </div>
      </section>
    </div>
  </section>

  <!-- Gallery Section -->
  <section class="mt-12">
    <h3 class="text-center text-xl font-semibold text-gray-700">Gambar Donatur</h3>
    <div class="mt-4 grid grid-cols-1 md:grid-cols-3 gap-4">
      <div class="bg-gray-200 rounded-lg shadow-md h-48 flex items-center justify-center">
        <span class="text-gray-400 text-lg">Image 1</span>
      </div>
      <div class="bg-gray-200 rounded-lg shadow-md h-48 flex items-center justify-center">
        <span class="text-gray-400 text-lg">Image 2</span>
      </div>
      <div class="bg-gray-200 rounded-lg shadow-md h-48 flex items-center justify-center">
        <span class="text-gray-400 text-lg">Image 3</span>
      </div>
    </div>
  </section>
@endsection
