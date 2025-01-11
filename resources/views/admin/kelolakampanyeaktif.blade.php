<x-app-layout>
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
</x-app-layout>
