<x-app-layout>
        <!-- Dashboard Stats -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
          <!-- Total Users -->
          <div class="p-6 bg-white rounded-lg shadow">
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
                <span class="text-gray-400">👥</span>
              </div>
              <div>
                <h3 class="text-lg font-semibold text-gray-800">Total Pengguna</h3>
                <p class="text-gray-600">100</p>
              </div>
            </div>
          </div>

          <!-- Active Campaigns -->
          <div class="p-6 bg-white rounded-lg shadow">
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
                <span class="text-gray-400">📢</span>
              </div>
              <div>
                <h3 class="text-lg font-semibold text-gray-800">Kampanye Aktif</h3>
                <p class="text-gray-600">50</p>
              </div>
            </div>
          </div>

          <!-- Total Donations -->
          <div class="p-6 bg-white rounded-lg shadow">
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
                <span class="text-gray-400">💰</span>
              </div>
              <div>
                <h3 class="text-lg font-semibold text-gray-800">Total Donasi</h3>
                <p class="text-gray-600">Rp.1,000,000</p>
              </div>
            </div>
          </div>
        </section>

        <!-- User Management Table -->
        <section class="mt-8">
          <h3 class="text-lg font-bold text-gray-800">Manajemen Pengguna</h3>
          <div class="mt-4 overflow-x-auto">
            <table class="w-full border border-gray-300 text-left">
              <thead class="bg-gray-200">
                <tr>
                  <th class="py-2 px-4 border-b border-gray-300">Nama</th>
                  <th class="py-2 px-4 border-b border-gray-300">Email</th>
                  <th class="py-2 px-4 border-b border-gray-300">Status</th>
                  <th class="py-2 px-4 border-b border-gray-300">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-2 px-4 border-b border-gray-300">John Doe</td>
                  <td class="py-2 px-4 border-b border-gray-300">john.doe@example.com</td>
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

        <!-- Recent Campaigns -->
        <section class="mt-8">
          <h3 class="text-lg font-bold text-gray-800">Kampanye Terbaru</h3>
          <div class="mt-4 overflow-x-auto">
            <table class="w-full border border-gray-300 text-left">
              <thead class="bg-gray-200">
                <tr>
                  <th class="py-2 px-4 border-b border-gray-300">Judul Kampanye</th>
                  <th class="py-2 px-4 border-b border-gray-300">Penggalang Dana</th>
                  <th class="py-2 px-4 border-b border-gray-300">Status</th>
                  <th class="py-2 px-4 border-b border-gray-300">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-2 px-4 border-b border-gray-300">Bantuan Bencana Alam</td>
                  <td class="py-2 px-4 border-b border-gray-300">Jane Doe</td>
                  <td class="py-2 px-4 border-b border-gray-300">Aktif</td>
                  <td class="py-2 px-4 border-b border-gray-300">
                    <button class="text-blue-500 hover:underline">Detail</button> |
                    <button class="text-red-500 hover:underline">Hapus</button>
                  </td>
                </tr>
                <!-- Additional rows can be added here -->
              </tbody>
            </table>
          </div>
        </section>
        </x-app-layout>