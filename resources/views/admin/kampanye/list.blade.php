<x-app-layout>
    <section class="flex items-center justify-center min-h-screen bg-gray-100 p-5">
      <div class="bg-white shadow-md rounded-lg p-6 sm:p-8 w-full max-w-7xl">
        <!-- Header Section -->
        <div class="mb-6 flex justify-between items-center">
          <div>
            <h1 class="text-2xl font-bold text-gray-800">Daftar Kampanye</h1>
            <p class="text-sm text-gray-600">Berikut adalah semua kampanye yang telah dibuat.</p>
          </div>
          <a href="{{ route('kampanye.create') }}"
             class="bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded shadow">
            + Buat Kampanye
          </a>
        </div>
  
        <!-- Table -->
        <table class="w-full border border-gray-300 text-left rounded-lg overflow-hidden">
          <thead class="bg-gray-200">
            <tr>
              <th class="py-3 px-4">No</th>
              <th class="py-3 px-4">Judul</th>
              <th class="py-3 px-4">Deskripsi</th>
              <th class="py-3 px-4">Target Dana</th>
              <th class="py-3 px-4">Status</th>
              <th class="py-3 px-4">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kampanyes as $key => $kampanye)
            <tr class="border-t">
              <td class="py-3 px-4">{{ $key + 1 }}</td>
              <td class="py-3 px-4">{{ $kampanye->title }}</td>
              <td class="py-3 px-4">{{ Str::limit($kampanye->deskripsi, 50) }}</td>
              <td class="py-3 px-4">Rp {{ number_format($kampanye->target_dana, 0, ',', '.') }}</td>
              <td class="py-3 px-4 capitalize">
                @switch($kampanye->status)
                  @case(1)
                    Galang
                    @break
                  @case(2)
                    Aktif
                    @break
                  @case(3)
                    Pending
                    @break
                  @case(4)
                    Sedang di Proses WD
                    @break
                  @case(5)
                    Selesai
                    @break
                  @case(6)
                    WD Gagal
                    @break
                  @case(7)
                    Gagal Galang
                    @break
                  @case(8)
                    Dibatalkan
                    @break
                  @default
                    Tidak Diketahui
                @endswitch
              </td>
              <td class="py-3 px-4 flex space-x-2">
                <a href="{{ route('kampanye.show', $kampanye->id) }}" class="text-blue-500 hover:underline">Lihat</a>                
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </section>
  </x-app-layout>