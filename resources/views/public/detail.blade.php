@extends('welcome')

@section('title', 'Detail Donatur - Peduli Bersama')

@section('content')
<!-- Donatur Details -->
<section class="grid grid-cols-1 lg:grid-cols-2 gap-4">
    <!-- Left Column -->
    <div class="bg-gray-200 rounded-lg shadow-md overflow-hidden">
        <img 
            src="{{ asset('images/campaigns/' . $Kdata->gambar) }}" 
            alt="{{ $Kdata->title }}" 
            class="w-full h-full object-cover"
        />
    </div>

    <!-- Right Column -->
    <div class="space-y-4">
        <div class="text-center lg:text-left">
            <h2 class="text-3xl font-bold text-red-500">{{ $Kdata->title }}</h2>
        </div>
        <div class="bg-red-100 p-4 rounded-lg shadow-md text-center lg:text-left">
            <a href="{{ route('donasi.form', $Kdata->id) }}" class="text-red-500 hover:underline">
                Lihat Detail Pembayaran
            </a>
        </div>

        <!-- Description -->
        <section class="mt-12">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Deskripsi :</h3>
            <div class="w-full bg-white border border-gray-300 rounded-lg shadow-md p-4 h-64">
                <p class="text-gray-500">{{ $Kdata->deskripsi }}</p>
            </div>
        </section>
    </div>
</section>

<!-- Transaction History Section -->
<section class="mt-12">
  <h3 class="text-center text-xl font-semibold text-gray-700">Riwayat Transaksi</h3>
  <div class="mt-4 bg-white border border-gray-300 rounded-lg shadow-md p-4">
      @forelse($Transaksis as $transaksi)
          <div class="mb-4 p-4 border-b border-gray-200">
              <p class="text-gray-700">
                  <span class="font-semibold">Nama Donatur:</span> {{ $transaksi->name ?? 'Anonim' }}
              </p>
              <p class="text-gray-700">
                  <span class="font-semibold">Jumlah Donasi:</span> Rp{{ number_format($transaksi->payment_amount, 0, ',', '.') }}
              </p>
              <p class="text-gray-500 text-sm">
                  <span class="font-semibold">Tanggal:</span> {{ \Carbon\Carbon::parse($transaksi->created_at)->format('d M Y') }}
              </p>
          </div>
      @empty
          <p class="text-center text-gray-500">Belum ada transaksi untuk kampanye ini.</p>
      @endforelse
  </div>
</section>
@endsection