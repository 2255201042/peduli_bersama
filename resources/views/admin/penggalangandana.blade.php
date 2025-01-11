<x-app-layout>
<section class="mt-8">
  <h3 class="text-lg font-bold text-gray-800">Penggalangan Dana</h3>
  <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

    <!-- Kelola Kampanye Aktif -->
    <a href="{{route("admin.kelolakampanyeaktif")}}" class="block p-6 bg-white rounded-lg shadow hover:bg-gray-100">
      <div class="flex items-center gap-4">
        <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
          <span class="text-gray-400">📋</span>
        </div>
        <div>
          <h4 class="text-lg font-semibold text-gray-800">Kelola Kampanye Aktif</h4>
          <p class="text-gray-600 text-sm">Pantau dan edit kampanye yang sedang berjalan.</p>
        </div>
      </div>
    </a>

    <!-- Kampanye Selesai -->
    <a href="{{route("admin.kampanyeselesai")}}" class="block p-6 bg-white rounded-lg shadow hover:bg-gray-100">
      <div class="flex items-center gap-4">
        <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
          <span class="text-gray-400">✅</span>
        </div>
        <div>
          <h4 class="text-lg font-semibold text-gray-800">Kampanye Selesai</h4>
          <p class="text-gray-600 text-sm">Lihat laporan kampanye yang telah selesai.</p>
        </div>
      </div>
    </a>

    <!-- Riwayat Donasi -->
    <a href="{{route("admin.riwayatdonasi")}}" class="block p-6 bg-white rounded-lg shadow hover:bg-gray-100">
      <div class="flex items-center gap-4">
        <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
          <span class="text-gray-400">💳</span>
        </div>
        <div>
          <h4 class="text-lg font-semibold text-gray-800">Riwayat Donasi</h4>
          <p class="text-gray-600 text-sm">Pantau donasi yang telah diterima.</p>
        </div>
      </div>
    </a>
  </div>
</section>

<section class="mt-8">
          <h3 class="text-lg font-bold text-gray-800">Kelola Kamanye Aktif</h3>
          <div class="mt-4 overflow-x-auto">
            <table class="w-full border border-gray-300 text-left">
              <thead class="bg-gray-200">
                <tr>
                  <th class="py-2 px-4 border-b border-gray-300">Nama</th>
                  <th class="py-2 px-4 border-b border-gray-300">kategori</th>
                  <th class="py-2 px-4 border-b border-gray-300">Status</th>
                  <th class="py-2 px-4 border-b border-gray-300">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-2 px-4 border-b border-gray-300">Banjir bandang</td>
                  <td class="py-2 px-4 border-b border-gray-300">Bencana</td>
                  <td class="py-2 px-4 border-b border-gray-300">Aktif</td>
                  <td class="py-2 px-4 border-b border-gray-300">
                    <button class="text-blue-500 hover:underline">Edit</button> |
                    <button class="text-red-500 hover:underline">Hapus</button>
                  </td>
                </tr>
                <!-- Additional rows can be added here -->
              </tbody>
            </table>
          </div>
</section>

<section class="mt-8">
    <h3 class="text-lg font-bold text-gray-800">Kampanye Selesai</h3>
    <div class="mt-4 overflow-x-auto">
      <table class="w-full border border-gray-300 text-left">
        <thead class="bg-gray-200">
          <tr>
            <th class="py-2 px-4 border-b border-gray-300">Judul Kampanye</th>
            <th class="py-2 px-4 border-b border-gray-300">Penggalang Dana</th>
            <th class="py-2 px-4 border-b border-gray-300">Tanggal Selesai</th>
            <th class="py-2 px-4 border-b border-gray-300">Total Donasi</th>
            <th class="py-2 px-4 border-b border-gray-300">Aksi</th>
          </tr>
        </thead>
        <tbody id="completed-campaigns-table">
          <!-- Data akan dimuat di sini -->
          <tr>
                  <td class="py-2 px-4 border-b border-gray-300">Banjir bandang</td>
                  <td class="py-2 px-4 border-b border-gray-300">Bencana</td>
                  <td class="py-2 px-4 border-b border-gray-300">7-januari-2025</td>
                  <td class="py-2 px-4 border-b border-gray-300">100.000</td>
                    <td class="py-2 px-4 border-b border-gray-300">
                    <button class="text-blue-500 hover:underline">Edit</button> |
                    <button class="text-red-500 hover:underline">Hapus</button>
                  </td>
                </tr>
        </tbody>
      </table>
    </div>
  </section>

  <section class="mt-8">
    <h3 class="text-lg font-bold text-gray-800">Riwayat Donasi</h3>
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
        <tbody id="donation-table">
          <!-- Data akan dimuat di sini -->
          <tr>
              <td class="py-2 px-4 border-b border-gray-300">dani</td>
              <td class="py-2 px-4 border-b border-gray-300">50.000</td>
              <td class="py-2 px-4 border-b border-gray-300">30-januari-2025</td>
              <td class="py-2 px-4 border-b border-gray-300">banjir</td>
          </tr>
        </tbody>
      </table>
    </div>

</x-app-layout>
