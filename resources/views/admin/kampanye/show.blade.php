<x-app-layout>
    <section class="flex items-center justify-center min-h-screen bg-gray-100 p-5">
      <div class="bg-white shadow-md rounded-lg p-6 sm:p-8 w-full max-w-4xl">
        <div class="mb-6">
          <h1 class="text-2xl font-bold text-gray-800">{{ $kampanye->title }}</h1>
          <p class="text-sm text-gray-600">Dibuat oleh: <span class="font-semibold">{{ $kampanye->id_penggalang }}</span></p>
        </div>
  
        <!-- Campaign Details -->
        <div class="space-y-4">
          <div>
            <h2 class="text-lg font-bold text-gray-700">Deskripsi</h2>
            <p class="text-sm text-gray-800">{{ $kampanye->deskripsi }}</p>
          </div>
  
          <div>
            <h2 class="text-lg font-bold text-gray-700">Target Dana</h2>
            <p class="text-sm text-gray-800">Rp {{ number_format($kampanye->target_dana, 0, ',', '.') }}</p>
          </div>
  
          <div>
            <h2 class="text-lg font-bold text-gray-700">Status</h2>
            <p class="text-sm text-gray-800 capitalize">{{ $kampanye->status }}</p>
          </div>
  
          <div>
            <h2 class="text-lg font-bold text-gray-700">Periode Kampanye</h2>
            <p class="text-sm text-gray-800">
                {{ \Carbon\Carbon::parse($kampanye->start_date)->format('d M Y') }} - 
                {{ \Carbon\Carbon::parse($kampanye->end_date)->format('d M Y') }}
              </p>
          </div>
  
          <!-- Images -->
          <div>
            <h2 class="text-lg font-bold text-gray-700">Foto Kampanye</h2>
            <img src="{{ asset('images/campaigns/' . $kampanye->gambar) }}" alt="Campaign Image" class="rounded-md mt-2 w-full max-w-md">
          </div>
  
          <div>
            <h2 class="text-lg font-bold text-gray-700">Foto KTP</h2>
            <img src="{{ asset('images/ktp/' . $kampanye->f_ktp) }}" alt="KTP Image" class="rounded-md mt-2 w-full max-w-md">
          </div>
          
          <!-- Lampiran -->
          @if ($kampanye->lampiran)
          <div>
            <h2 class="text-lg font-bold text-gray-700">Lampiran</h2>
            <a href="{{ asset('attachments/' . $kampanye->lampiran) }}" 
               target="_blank" 
               class="text-blue-500 hover:underline">
              Unduh Lampiran
            </a>
          </div>
          @else
          <div>
            <h2 class="text-lg font-bold text-gray-700">Lampiran</h2>
            <p class="text-sm text-gray-800">Tidak ada lampiran tersedia.</p>
          </div>
          @endif
        </div>
  
        <!-- Back Button -->
        <div class="mt-6">
          <a href="{{ route('kampanye.list') }}" 
             class="bg-gray-500 hover:bg-gray-600 text-white font-medium py-2 px-4 rounded shadow">
            Kembali
          </a>
        </div>
      </div>
    </section>
</x-app-layout>