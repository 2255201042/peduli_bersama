@extends('welcome')

@section('title', 'Validasi Donasi')

@section('content')
<div class="container mx-auto py-12 px-6">
  <div class="text-center">
    <h1 class="text-4xl font-bold text-red-500 mb-4">Validasi Donasi</h1>
    <p class="text-gray-600 mb-4">Scan QR Code di bawah untuk menyelesaikan validasi pembayaran Anda.</p>
  </div>

  <div class="bg-gray-200 rounded-lg shadow-md flex justify-center items-center h-64 mt-10">
    @if(isset($qrCodeBase64))
      <img src="data:image/png;base64,{{ $qrCodeBase64 }}" alt="QR Code Validasi" class="w-full h-full object-contain">
    @else
      <p class="text-gray-500">QR Code tidak tersedia.</p>
    @endif
  </div>

  <div class="text-center mt-6">
    <p class="text-gray-600">Atau buka tautan ini: <a href="{{ $successUrl }}" class="text-blue-500 hover:underline">{{ $successUrl }}</a></p>
  </div>
</div>
@endsection