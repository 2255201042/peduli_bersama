@extends('welcome')

@section('title', 'Home - Peduli Bersama')

@section('content')
<section class="container mx-auto my-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 px-6">
  @foreach ($galleryItems as $item)
    <div class="relative rounded-lg shadow-md bg-gray-200 h-64 overflow-hidden">
      <img
        src="{{ asset($item['image']) }}"
        alt="konten"
        class="absolute inset-0 w-full h-full object-cover"
      />
      <a
        href="{{ url('/dtl_donatur') }}"
        class="absolute bottom-4 left-1/2 transform -translate-x-1/2 px-4 py-2 bg-red-500 text-white rounded-full text-sm font-medium hover:bg-red-600"
      >
        Donasi
      </a>
    </div>
  @endforeach
</section>
@endsection
