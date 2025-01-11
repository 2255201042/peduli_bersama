<x-app-layout>
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
                  <td class="py-2 px-4 border-b border-gray-300">kebakaran</td>
                  <td class="py-2 px-4 border-b border-gray-300">Bencana</td>
                  <td class="py-2 px-4 border-b border-gray-300">10-januari-2025</td>
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

</x-app-layout>