@extends('welcome')

@section('title', 'Halaman Pembayaran')

@section('content')
<div class="container mx-auto py-12 px-6">
  <div class="text-center">
    <h1 class="text-4xl font-bold text-red-500 mb-4">Formulir Donasi</h1>
  </div>

  <div class="bg-white rounded-lg shadow-lg p-6">
    <form action="{{ route('bayar_donasi.post') }}" method="POST">
      @csrf
      <input type="hidden" name="kampanye_id" value="{{ $Kdata->id }}">

      <!-- Name -->
      <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
        <input 
          type="text" 
          id="name" 
          name="name" 
          value="{{ $userData['name'] ?? old('name') }}" 
          {{ isset($userData) ? 'readonly' : '' }}
          required
          class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-red-500 focus:border-red-500"
        >
      </div>

      <!-- Phone Number -->
      <div class="mb-4">
        <label for="no_hp" class="block text-sm font-medium text-gray-700">Nomor HP</label>
        <input 
          type="text" 
          id="no_hp" 
          name="no_hp" 
          value="{{ $userData['no_hp'] ?? old('no_hp') }}" 
          {{ isset($userData) ? 'readonly' : '' }}
          required
          class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-red-500 focus:border-red-500"
        >
      </div>

      <!-- Payment Amount -->
      <div class="mb-4">
        <label for="payment_amount" class="block text-sm font-medium text-gray-700">Jumlah Donasi</label>
        <input 
          type="number" 
          id="payment_amount" 
          name="payment_amount" 
          value="{{ old('payment_amount') }}" 
          required
          class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-red-500 focus:border-red-500"
        >
      </div>

      <!-- Is Anonim -->
      <div class="mb-4">
        <label for="is_anonim" class="flex items-center">
          <input type="checkbox" id="is_anonim" name="is_anonim" value="1" class="mr-2">
          <span class="text-sm text-gray-700">Sembunyikan Nama (Anonim)</span>
        </label>
      </div>

      <!-- Submit Button -->
      <div class="text-center">
        <button 
          type="submit" 
          class="bg-red-500 text-white px-6 py-2 rounded-full font-medium hover:bg-red-600"
        >
          Submit Donasi
        </button>
      </div>
    </form>
  </div>
</div>
@endsection