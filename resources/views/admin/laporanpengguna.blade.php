<x-app-layout>
<section class="mt-8">
  <a class="text-lg font-bold text-gray-800">Laporan Pengguna</a>
  <div class="mt-4 overflow-x-auto">
    <table class="w-full border border-gray-300 text-left">
      <thead class="bg-gray-200">
        <tr>
          <th class="py-2 px-4 border-b border-gray-300">Nama</th>
          <th class="py-2 px-4 border-b border-gray-300">Email</th>
          <th class="py-2 px-4 border-b border-gray-300">Tanggal Bergabung</th>
          <th class="py-2 px-4 border-b border-gray-300">Status</th>
        </tr>
      </thead>
      <tbody id="user-report-table">
        <!-- Data akan dimuat di sini -->
        <tr>
          <td class="py-2 px-4 border-b border-gray-300">John Doe</td>
          <td class="py-2 px-4 border-b border-gray-300">john.doe@example.com</td>
          <td class="py-2 px-4 border-b border-gray-300">2025-01-01</td>
          <td class="py-2 px-4 border-b border-gray-300">Aktif</td>
        </tr>
        <tr>
          <td class="py-2 px-4 border-b border-gray-300">Jane Smith</td>
          <td class="py-2 px-4 border-b border-gray-300">jane.smith@example.com</td>
          <td class="py-2 px-4 border-b border-gray-300">2025-01-02</td>
          <td class="py-2 px-4 border-b border-gray-300">Nonaktif</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>
</x-app-layout>