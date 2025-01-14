<x-app-layout>
  <section class="flex flex-col items-center min-h-screen bg-gray-100 p-5">
    <div class="bg-white shadow-md rounded-lg p-6 sm:p-8 w-full max-w-4xl">
      <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Pencairan Dana</h1>
        <p class="text-sm text-gray-600">Ajukan pencairan dana untuk kampanye Anda.</p>
      </div>

      <!-- Template Download -->
      <div class="mb-4">
        <p class="text-gray-700">
          Unduh template laporan penggunaan dana sebelum mengajukan pencairan:
        </p>
        <a href="{{ asset('template/Laporan_Penggunaan_Dana.docx') }}" 
           download="Laporan_Penggunaan_Dana.docx" 
           class="text-blue-500 hover:underline">
          Download Template Laporan Penggunaan Dana
        </a>
      </div>

      <!-- Form -->
      <form action="{{ route('pencairan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Select Campaign -->
        <div class="mb-4">
          <label for="kampanye_id" class="block text-sm font-medium text-gray-700 mb-2">
            Pilih Kampanye
          </label>
          <select id="kampanye_id" name="kampanye_id" class="block w-full border-gray-300 rounded-lg shadow-sm focus:border-red-500 focus:ring focus:ring-red-200">
            <option value="">-- Pilih Kampanye --</option>
            @foreach ($kampanyes as $kampanye)
              <option value="{{ $kampanye->id }}">{{ $kampanye->title }}</option>
            @endforeach
          </select>
        </div>

        <!-- Upload Proposal -->
        <div class="mb-4">
          <label for="pengajuan_dana" class="block text-sm font-medium text-gray-700 mb-2">
            Upload Proposal Pencairan
          </label>
          <input type="file" id="pengajuan_dana" name="pengajuan_dana"
                 class="block w-full border-gray-300 rounded-lg shadow-sm focus:border-red-500 focus:ring focus:ring-red-200"
                 accept=".pdf,.doc,.docx">
        </div>

        <!-- Submit Button -->
        <div>
          <button type="submit" class="w-full bg-red-600 text-white py-2 rounded-lg hover:bg-red-700">
            Ajukan Pencairan
          </button>
        </div>
      </form>
    </div>

    <!-- Withdrawal Status -->
    <div class="bg-white shadow-md rounded-lg p-6 sm:p-8 w-full max-w-4xl mt-6">
      <h2 class="text-xl font-bold text-gray-800 mb-4">Status Pencairan Dana</h2>
      <table class="w-full border border-gray-300 text-left rounded-lg overflow-hidden">
        <thead class="bg-gray-200">
            <tr>
                <th class="py-2 px-4">No</th>
                <th class="py-2 px-4">Kampanye</th>
                <th class="py-2 px-4">Jumlah Pengajuan</th>
                <th class="py-2 px-4">Proposal</th>
                <th class="py-2 px-4">Status</th>
                <th class="py-2 px-4">Alasan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($withdrawals as $key => $withdrawal)
            <tr class="border-t">
                <td class="py-2 px-4">{{ $key + 1 }}</td>
                <td class="py-2 px-4">{{ $withdrawal->title }}</td>
                <td class="py-2 px-4">{{ number_format($withdrawal->total_amount, 2) }}</td>
                <td class="py-2 px-4">
                    <a href="{{ asset('attachments/' . $withdrawal->proposal) }}" target="_blank" class="text-blue-500 hover:underline">Lihat Proposal</a>
                </td>
                <td class="py-2 px-4 capitalize">
                    @switch($withdrawal->status)
                        @case(1)
                            Done Galang
                            @break
                        @case(2)
                            Aktif
                            @break
                        @case(3)
                            Pending
                            @break
                        @case(4)
                            Sedang di Proses Pencairan
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
                            Unknown
                    @endswitch
                </td>
                <td class="py-2 px-4">
                    @if ($withdrawal->status == 6 && $withdrawal->alesan)
                        {{ $withdrawal->alesan }}
                    @else
                        -
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="py-2 px-4 text-center text-gray-600">Belum ada pencairan dana.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    </div>
  </section>
</x-app-layout>