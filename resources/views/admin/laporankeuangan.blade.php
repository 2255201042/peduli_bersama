<x-app-layout>
<section class="mt-8">
  <a class="text-lg font-bold text-gray-800">Laporan Keuangan</a>
  <div class="mt-4 overflow-x-auto">
    <table class="w-full border border-gray-300 text-left">
      <thead class="bg-gray-200">
        <tr>
          <th class="py-2 px-4 border-b border-gray-300">Tanggal</th>
          <th class="py-2 px-4 border-b border-gray-300">Keterangan</th>
          <th class="py-2 px-4 border-b border-gray-300">Pemasukan (Rp)</th>
          <th class="py-2 px-4 border-b border-gray-300">Pengeluaran (Rp)</th>
          <th class="py-2 px-4 border-b border-gray-300">Saldo Akhir (Rp)</th>
        </tr>
      </thead>
      <tbody id="financial-report-table">
        <!-- Data akan dimuat di sini -->
        <tr>
          <td class="py-2 px-4 border-b border-gray-300">2025-01-01</td>
          <td class="py-2 px-4 border-b border-gray-300">Donasi dari John Doe</td>
          <td class="py-2 px-4 border-b border-gray-300">1,000,000</td>
          <td class="py-2 px-4 border-b border-gray-300">-</td>
          <td class="py-2 px-4 border-b border-gray-300">1,000,000</td>
        </tr>
        <tr>
          <td class="py-2 px-4 border-b border-gray-300">2025-01-02</td>
          <td class="py-2 px-4 border-b border-gray-300">Pembelian bahan bantuan</td>
          <td class="py-2 px-4 border-b border-gray-300">-</td>
          <td class="py-2 px-4 border-b border-gray-300">500,000</td>
          <td class="py-2 px-4 border-b border-gray-300">500,000</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>
</x-app-layout>