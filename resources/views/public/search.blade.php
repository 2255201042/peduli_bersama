@extends('welcome')

@section('title', 'Search Results')

@section('content')
<section class="container mx-auto my-8 px-6">
    <h1 class="text-2xl font-bold mb-4">
        Search Results for: "{{ $search ?? 'All' }}"
    </h1>

    @if ($Kdata->isEmpty()) {{-- Check if the collection is empty --}}
        <p class="text-center text-gray-600">Kampanye tidak ada.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($Kdata as $campaign)
                <div class="relative rounded-lg shadow-md bg-gray-200 overflow-hidden h-64">
                    <!-- Image -->
                    <img
                        src="{{ asset($campaign->gambar ?? 'image/placeholder.jpg') }}"
                        alt="{{ $campaign->title }}"
                        class="absolute inset-0 w-full h-full object-cover"
                    />

                    <!-- Hover Details -->
                    <div class="absolute inset-0 bg-gray-800 bg-opacity-75 opacity-0 hover:opacity-100 transition-opacity duration-300 flex flex-col justify-center items-center p-4">
                        <h2 class="text-lg font-bold text-white mb-2">{{ $campaign->title }}</h2>
                        <p class="text-sm text-gray-200 mb-4">{{ Str::limit($campaign->deskripsi, 100) }}</p>
                        <a
                            href="{{ url('/dtl_donatur/' . $campaign->id) }}"
                            class="px-4 py-2 bg-red-500 text-white rounded-full text-sm font-medium hover:bg-red-600"
                        >
                            View Details
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</section>
@endsection