@extends('welcome')

@section('title', 'Detail Donatur - Peduli Bersama')

@section('content')
<!-- Donatur Details -->
<section class="grid grid-cols-1 lg:grid-cols-2 gap-4">
    <!-- Left Column -->
    <div class="bg-gray-200 rounded-lg h-2/5 shadow-md overflow-hidden">
        <img 
            src="{{ asset('images/campaigns/' . $Kdata->gambar) }}" 
            alt="{{ $Kdata->title }}" 
            class="w-full  object-fit"
        />
    </div>

    <!-- Right Column -->
    <div class="space-y-4">
        <div class="text-center lg:text-left">
            <h2 class="text-3xl font-bold text-red-500">{{ $Kdata->title }}</h2>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold mb-4">{{ $Kdata->title }}</h1>
            <p class="text-gray-700">{{ $Kdata->deskripsi }}</p>
        
            <!-- Progress Bar -->
            <div class="mt-6">
                <p class="font-semibold text-gray-600">Total Collected: {{ number_format($totalCollected, 2) }} / {{ number_format($Kdata->target_dana, 2) }}</p>
                <div class="w-full bg-gray-200 rounded-full h-4 overflow-hidden mt-2">
                    <div class="bg-green-500 h-full" style="width: {{ min(($totalCollected / $Kdata->target_dana) * 100, 100) }}%;"></div>
                </div>
            </div>
        
            <!-- Campaign Dates -->
            <div class="mt-4">
                <p class="text-sm text-gray-500">Start Date: {{ \Carbon\Carbon::parse($startDate)->format('d M Y') }}</p>
                <p class="text-sm text-gray-500">End Date: {{ \Carbon\Carbon::parse($endDate)->format('d M Y') }}</p>
            </div>
        
            <!-- Link to Payment Details -->
            <div class="mt-6 text-center lg:text-left">
                <a href="{{ route('donasi.form', $Kdata->id) }}" class="text-red-500 hover:underline">
                    Lihat Detail Pembayaran
                </a>
            </div>
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