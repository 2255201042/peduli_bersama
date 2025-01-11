@extends('welcome')

@section('title', 'Home - Peduli Bersama')

@section('content')
<section class="container mx-auto my-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-6">
  @foreach ($galleryItems as $item)
    <div class="relative group rounded-lg shadow-md bg-gray-200 overflow-hidden h-64">
      <!-- Image -->
      <img
        src="{{ asset($item->gambar ?? 'image/placeholder.jpg') }}" {{-- Fallback to placeholder --}}
        alt="{{ $item->title }}"
        class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 group-hover:scale-110"
      />

      <!-- Hover Details -->
      <div class="absolute inset-0 bg-gray-800 bg-opacity-75 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-center items-center p-4">
        <h2 class="text-lg font-bold text-white mb-2">{{ $item->title }}</h2>
        <p class="text-sm text-gray-200 mb-4">{{ Str::limit($item->deskripsi, 100) }}</p>
        <a
          href="{{ url('/dtl_donatur/' . $item->id) }}"
          class="px-4 py-2 bg-red-500 text-white rounded-full text-sm font-medium hover:bg-red-600"
        >
          Donasi
        </a>
      </div>
    </div>
  @endforeach
</section>
@endsection