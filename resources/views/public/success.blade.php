@extends('welcome')

@section('title', 'Transaksi Berhasil')

@section('content')
<div class="container mx-auto py-12 px-6 text-center">
  <h1 class="text-4xl font-bold text-green-500 mb-4">Transaksi Berhasil</h1>
  <p class="text-gray-600 mb-6">
    Terima kasih atas donasi Anda. Donasi Anda telah kami terima pada <strong>{{ $donasi->payment_date->format('d M Y H:i') }}</strong>.
  </p>
  <a href="{{ url('/') }}" class="bg-blue-500 text-white px-6 py-2 rounded-full font-medium hover:bg-blue-600">
    Kembali ke Beranda
  </a>
</div>
@endsection