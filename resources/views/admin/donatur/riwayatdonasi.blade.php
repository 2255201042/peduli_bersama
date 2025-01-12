<x-app-layout>
  <section class="mt-8">
    <h3 class="text-lg font-bold text-gray-800">Riwayat Donasi</h3>
  
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
      <!-- Total Users -->
      <div class="bg-white shadow rounded-lg p-6">
          <h3 class="text-lg font-semibold text-gray-800">Total Donasi</h3>
          <p class="text-2xl text-blue-600">{{ $totalDonasi }}</p>
      </div>


      <!-- Total Donations -->
      <div class="bg-white shadow rounded-lg p-6">
          <h3 class="text-lg font-semibold text-gray-800">Uang Tersalurkan</h3>
          <p class="text-2xl text-yellow-600">Rp. {{ number_format($totalUang) }}</p>
      </div>
    </div>
    <!-- Donation Table -->
    <div class="mt-4 overflow-x-auto">
      <table class="w-full border border-gray-300 text-left">
        <thead class="bg-gray-200">
          <tr>
            <th class="py-2 px-4 border-b border-gray-300">Nama Donatur</th>
            <th class="py-2 px-4 border-b border-gray-300">Jumlah Donasi</th>
            <th class="py-2 px-4 border-b border-gray-300">Tanggal</th>
            <th class="py-2 px-4 border-b border-gray-300">Kampanye</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($riwayatDonasi as $donasi)
            <tr>
              <td class="py-2 px-4 border-b border-gray-300">{{ Auth::user()->name }}</td>
              <td class="py-2 px-4 border-b border-gray-300">Rp {{ number_format($donasi->jumlah_donasi, 0, ',', '.') }}</td>
              <td class="py-2 px-4 border-b border-gray-300">{{ \Carbon\Carbon::parse($donasi->tanggal_donasi)->format('d-m-Y') }}</td>
              <td class="py-2 px-4 border-b border-gray-300">{{ $donasi->kampanye->title ?? 'N/A' }}</td>
            </tr>
          @empty
            <tr>
              <td colspan="4" class="py-2 px-4 text-center text-gray-600">Belum ada riwayat donasi.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </section>
  </x-app-layout>