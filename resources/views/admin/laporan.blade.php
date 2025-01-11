<x-app-layout>
<section class="mt-8">
  <a  class="text-lg font-bold text-gray-800">Laporan</a>
  <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Laporan Keuangan -->
    <a href="{{route("admin.laporankeuangan")}}" class="block p-6 bg-white rounded-lg shadow hover:bg-gray-100">
      <div class="flex items-center gap-4">
        <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
          <span class="text-gray-400">💰</span>
        </div>
        <div>
          <h4 class="text-lg font-semibold text-gray-800">Laporan Keuangan</h4>
          <p class="text-gray-600 text-sm">Ringkasan donasi dan pengeluaran.</p>
        </div>
      </div>
    </a>

    <!-- Laporan Pengguna -->
    <a href="{{route("admin.laporanpengguna")}}" class="block p-6 bg-white rounded-lg shadow hover:bg-gray-100">
      <div class="flex items-center gap-4">
        <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
          <span class="text-gray-400">👥</span>
        </div>
        <div>
          <h4 class="text-lg font-semibold text-gray-800">Laporan Pengguna</h4>
          <p class="text-gray-600 text-sm">Data statistik dan aktivitas pengguna.</p>
        </div>
      </div>
    </a>

    <!-- Laporan Kampanye -->
    <!-- <a href="#" class="block p-6 bg-white rounded-lg shadow hover:bg-gray-100">
      <div class="flex items-center gap-4">
        <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
          <span class="text-gray-400">📢</span>
        </div>
        <div>
          <h4 class="text-lg font-semibold text-gray-800">Laporan Kampanye</h4>
          <p class="text-gray-600 text-sm">Detail penggalangan dana aktif dan selesai.</p>
        </div>
      </div>
    </a> -->

    <!-- Laporan Aktivitas -->
    <a href="{{route("admin.laporanaktivitas")}}" class="block p-6 bg-white rounded-lg shadow hover:bg-gray-100">
      <div class="flex items-center gap-4">
        <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
          <span class="text-gray-400">📊</span>
        </div>
        <div>
          <h4 class="text-lg font-semibold text-gray-800">Laporan Aktivitas</h4>
          <p class="text-gray-600 text-sm">Riwayat aktivitas pengguna dan admin.</p>
        </div>
      </div>
    </a>
  </div>
</section>
</x-app-layout>
