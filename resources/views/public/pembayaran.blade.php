@extends('welcome')

@section('title', 'Halaman Pembayaran')

@section('content')
<div class="container mx-auto py-12 px-6">
  <!-- Header -->
  <div class="text-center">
    <h1 class="text-4xl font-bold text-red-500 mb-4">Halaman Pembayaran</h1>
    <p class="text-gray-600">Dukung program kami dengan melakukan pembayaran melalui metode QRIS.</p>
  </div>

  <!-- Main Content -->
  <div class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-8">
    <!-- Left Column: Photo and Description -->
    <div class="space-y-6">
      <!-- Photo -->
      <div class="bg-gray-200 rounded-lg shadow-md overflow-hidden">
        <img src="./Image/sosial.png" alt="Gambar Donasi" class="w-full h-64 object-cover">
      </div>
      <!-- Description -->
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Deskripsi Program</h2>
        <p class="text-gray-600 leading-relaxed">
          Program ini bertujuan untuk membantu masyarakat yang membutuhkan. Dengan kontribusi Anda, kita bisa memberikan dampak positif yang lebih besar. Semua donasi akan disalurkan dengan transparan dan bertanggung jawab.
        </p>
      </div>
    </div>

    <!-- Right Column: QRIS Payment -->
    <div class="bg-white rounded-lg shadow-lg p-6 space-y-6">
      <h2 class="text-2xl font-semibold text-gray-700 text-center">Pembayaran QRIS</h2>
      <!-- QRIS Code -->
      <div class="flex justify-center">
        <img src="./Image/qris-placeholder.png" alt="QRIS Code" class="w-64 h-64 object-contain">
      </div>
      <!-- Download QRIS Code -->
      <div class="text-center">
        <a 
          href="./Image/qris-placeholder.png" 
          download="Kode-QRIS-PeduliBersama.png" 
          class="bg-red-500 text-white px-6 py-2 rounded-full font-medium hover:bg-red-600">
          Unduh Kode QR
        </a>
      </div>
      <!-- Instructions -->
      <div class="text-gray-600">
        <ol class="list-decimal pl-6 space-y-2">
          <li>Scan kode QRIS di atas menggunakan aplikasi pembayaran Anda (OVO, GoPay, Dana, dll).</li>
          <li>Masukkan jumlah donasi yang ingin Anda berikan.</li>
          <li>Konfirmasi pembayaran dan tunggu notifikasi berhasil.</li>
        </ol>
      </div>
      <!-- Contact for Help -->
      <p class="text-gray-500 text-sm text-center mt-4">
        Jika Anda mengalami masalah, silakan hubungi kami di <span class="text-red-500">support@pedulibersama.com</span>.
      </p>
    </div>
  </div>
</div>
@endsection
