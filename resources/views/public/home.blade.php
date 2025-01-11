@extends('welcome')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section class="relative">
  <img class="w-full object-cover" src="{{asset('image/kamp-terkini1.jpg)') }}" alt="Hero Image">
</section>

<!-- Gallery Section -->
<section class="container mx-auto my-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
  <img
    src="{{ asset('image/pendidikan.jpg') }}"
    alt="Gallery Image 1"
    class="rounded-lg shadow-md"
  />
  <img
    src="{{ asset('image/bencana.png') }}"
    alt="Gallery Image 2"
    class="rounded-lg shadow-md"
  />
  <img
    src="{{ asset('image/sosial.jpg') }}"
    alt="Gallery Image 3"
    class="rounded-lg shadow-md"
  />
  <img
    src="{{ asset('image/bencana1.jpg') }}"
    alt="Gallery Image 4"
    class="rounded-lg shadow-md"
  />
  <img
    src="{{ asset('image/sosial.jpg') }}"
    alt="Gallery Image 5"
    class="rounded-lg shadow-md"
  />
  <img
    src="{{ asset('image/sosial.png') }}"
    alt="Gallery Image 6"
    class="rounded-lg shadow-md"
  />
</section>

<!-- Call-to-Action Section -->
<section class="container mx-auto text-center my-8">
  <a
    href="{{ url('/donasi') }}"
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
      href="{{ url('/donasi') }}"
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
@endsection
