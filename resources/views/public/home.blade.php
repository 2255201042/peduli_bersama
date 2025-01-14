@extends('welcome')

@section('title', 'Home')

@section('content')


<section class="relative -mt-20">
  <!-- Swiper -->
  <div class="swiper">
      <div class="swiper-wrapper">
          @foreach($Kdata as $image)
              <div class="swiper-slide">
                  <img 
                      src="{{ asset('images/campaigns/' . $image->gambar) }}" 
                      alt="Slide Image {{ $loop->iteration }}" 
                      class="w-full h-96 object-fit"
                  />
              </div>
          @endforeach
      </div>
      <!-- Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Navigation Buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
  </div>
</section>

<section class="container mx-auto my-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
  @foreach($Kdata as $campaign)
    <div class="relative rounded-lg shadow-md overflow-hidden bg-white group">
      <!-- Image -->
      <img 
        src="{{ asset('images/campaigns/' . $campaign->gambar) }}" 
        alt="{{ $campaign->title }}" 
        class="w-full h-48 object-fit"
      />

      <!-- Hover Overlay -->
      <div class="absolute inset-0 bg-gray-800 bg-opacity-75 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-center items-center p-4">
        <h2 class="text-lg font-bold text-white mb-2">{{ $campaign->title }}</h2>
        <p class="text-sm text-gray-200 mb-4">{{ $campaign->deskripsi }}</p>
        <p class="text-sm text-gray-300 font-semibold">
          Target Dana: Rp{{ number_format($campaign->target_dana, 0, ',', '.') }}
        </p>
        <p class="text-sm text-gray-300 mb-4">Berakhir: {{ \Carbon\Carbon::parse($campaign->end_date)->format('d M Y') }}</p>
        <a 
          href="{{ url('/dtl_donatur/' . $campaign->id) }}" 
          class="inline-block px-6 py-2 bg-red-500 text-white rounded-full shadow-md text-sm font-semibold hover:bg-red-600"
        >
          Lihat Detail
        </a>
      </div>

      <!-- Always Visible Text -->
      <div class="p-4">
        <h2 class="text-lg font-bold text-gray-800 mb-2">{{ $campaign->title }}</h2>
        <p class="text-sm text-gray-600">{{ Str::limit($campaign->deskripsi, 100) }}</p>
      </div>
    </div>
  @endforeach
</section>
<!-- Call-to-Action Section -->
<section class="container mx-auto text-center my-8">
  <a
    href="{{ route('donasi') }}"
    class="inline-block px-12 py-4 bg-red-200 text-red-500 rounded-full shadow-md text-lg font-semibold hover:bg-red-300"
  >
    Selengkapnya
  </a>
</section>

<!-- Action Cards -->
<section class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 my-8">
  <div class="flex flex-col items-center bg-pink-100 rounded-lg shadow-md p-6">
    <h2 class="text-red-500 text-2xl font-bold mb-4">Ayo Donasi Sekarang</h2>
    <a
      href="{{ route('donasi') }}"
      class="px-8 py-3 bg-red-200 text-red-500 rounded-full shadow-md font-semibold hover:bg-red-300"
    >
      Donasi
    </a>
  </div>
  <div class="flex flex-col items-center bg-pink-100 rounded-lg shadow-md p-6">
    <h2 class="text-red-500 text-2xl font-bold mb-4">Ingin Mengalang Dana?</h2>
    <a
      href="{{ route('register') }}"
      class="px-8 py-3 bg-red-200 text-red-500 rounded-full shadow-md font-semibold hover:bg-red-300"
    >
      Galang Sekarang
    </a>
  </div>
</section>


<script>
  document.addEventListener("DOMContentLoaded", function () {
      new Swiper(".swiper", {
          // Swiper configuration
          loop: true,
          pagination: {
              el: ".swiper-pagination",
              clickable: true,
          },
          navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
          },
          autoplay: {
              delay: 3000, // Slide change delay in milliseconds
              disableOnInteraction: false,
          },
      });
  });
</script>
@endsection