<x-app-layout>
      <!-- Main Content -->
      <main class="flex-1 p-8">
        <!-- Header -->
        <header class="flex items-center justify-between">
          <h2 class="text-xl font-bold text-gray-800">Dashboard</h2>
          <div class="flex items-center gap-4">
            <span class="text-sm text-gray-500">pedulibersama321@gmail.com</span>
            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
              <span class="text-gray-400">👤</span>
            </div>
          </div>
        </header>

        <!-- Dashboard Stats -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
          <!-- Total Donasi -->
          <div class="p-6 bg-white rounded-lg shadow">
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
                <span class="text-gray-400">💰</span>
              </div>
              <div>
                <h3 class="text-lg font-semibold text-gray-800">Total Donasi</h3>
                <p class="text-gray-600">Rp.0</p>
              </div>
            </div>
          </div>

          <!-- Pencairan Dana -->
          <div class="p-6 bg-white rounded-lg shadow">
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
                <span class="text-gray-400">📤</span>
              </div>
              <div>
                <h3 class="text-lg font-semibold text-gray-800">Pencairan Dana</h3>
                <p class="text-gray-600">Rp.0</p>
              </div>
            </div>
          </div>

          <!-- Jumlah Donasi -->
          <div class="p-6 bg-white rounded-lg shadow">
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
                <span class="text-gray-400">📊</span>
              </div>
              <div>
                <h3 class="text-lg font-semibold text-gray-800">Jumlah Donasi</h3>
                <p class="text-gray-600">0</p>
              </div>
            </div>
          </div>
        </section>

        <!-- Recent Donasi Table -->
        <section class="mt-8">
          <h3 class="text-lg font-bold text-gray-800">Jumlah Donasi Anda dalam 1 Minggu Terakhir</h3>
          <div class="mt-4 overflow-x-auto">
            <table class="w-full border border-gray-300 text-left">
              <thead class="bg-gray-200">
                <tr>
                  <th class="py-2 px-4 border-b border-gray-300">Tanggal</th>
                  <th class="py-2 px-4 border-b border-gray-300">Jumlah Donasi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-2 px-4 border-b border-gray-300">Tgl-Bln-Thn</td>
                  <td class="py-2 px-4 border-b border-gray-300">Rp.0</td>
                </tr>
                <!-- Additional rows can be added here -->
              </tbody>
            </table>
          </div>
        </section>

</x-app-layout>
