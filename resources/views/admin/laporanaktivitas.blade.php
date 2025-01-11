<x-app-layout>
<section class="mt-8">
  <a class="text-lg font-bold text-gray-800">Laporan Aktivitas</a>
  <div class="mt-4 overflow-x-auto">
    <table class="w-full border border-gray-300 text-left">
      <thead class="bg-gray-200">
        <tr>
          <th class="py-2 px-4 border-b border-gray-300">Tanggal</th>
          <th class="py-2 px-4 border-b border-gray-300">Waktu</th>
          <th class="py-2 px-4 border-b border-gray-300">Nama Pengguna</th>
          <th class="py-2 px-4 border-b border-gray-300">Deskripsi Aktivitas</th>
        </tr>
      </thead>
      <tbody id="activity-report-table">
        <!-- Data akan dimuat di sini -->
        <tr>
          <td class="py-2 px-4 border-b border-gray-300">2025-01-01</td>
          <td class="py-2 px-4 border-b border-gray-300">10:00 AM</td>
          <td class="py-2 px-4 border-b border-gray-300">John Doe</td>
          <td class="py-2 px-4 border-b border-gray-300">Menambahkan donasi baru</td>
        </tr>
        <tr>
          <td class="py-2 px-4 border-b border-gray-300">2025-01-02</td>
          <td class="py-2 px-4 border-b border-gray-300">02:30 PM</td>
          <td class="py-2 px-4 border-b border-gray-300">Jane Smith</td>
          <td class="py-2 px-4 border-b border-gray-300">Menghapus kampanye</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>
</x-app-layout>