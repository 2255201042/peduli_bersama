<x-app-layout>
<section class="mt-8">
  <h3 class="text-lg font-bold text-gray-800">Data Pengguna</h3>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-4">
    <!-- Total Users -->
    <div class="p-6 bg-white rounded-lg shadow-md">
      <div class="flex items-center gap-4">
        <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
          <span class="text-gray-400">👥</span>
        </div>
        <div>
          <h4 class="text-lg font-semibold text-gray-800">Total Pengguna</h4>
          <p class="text-gray-600" id="total-users">-</p>
        </div>
      </div>
    </div>
    </section>

    <!-- Active Users -->
    <!-- <div class="p-6 bg-white rounded-lg shadow-md">
      <div class="flex items-center gap-4">
        <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
          <span class="text-gray-400">✅</span>
        </div>
        <div>
          <h4 class="text-lg font-semibold text-gray-800">Pengguna Aktif</h4>
          <p class="text-gray-600" id="active-users">-</p>
        </div>
      </div>
    </div>

     New Users This Month -->
    <!-- <div class="p-6 bg-white rounded-lg shadow-md">
      <div class="flex items-center gap-4">
        <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
          <span class="text-gray-400">📈</span>
        </div>
        <div>
          <h4 class="text-lg font-semibold text-gray-800">Pengguna Baru Bulan Ini</h4>
          <p class="text-gray-600" id="new-users">-</p>
        </div>
      </div>
    </div>
  </div>
</section> --> 

<section class="mt-8">
  <h3 class="text-lg font-bold text-gray-800">Total Penggemar</h3>
  <div class="mt-4 overflow-x-auto">
    <table class="w-full border border-gray-300 text-left ">
      <thead class="bg-gray-200">
        <tr>
          <th class="py-2 px-4 border-b border-gray-300">Nama Penggemar</th>
          <th class="py-2 px-4 border-b border-gray-300">Email</th>
          <th class="py-2 px-4 border-b border-gray-300">Tanggal Bergabung</th>
        </tr>
      </thead>
      <tbody id="fans-table">
        <!-- Data akan dimuat di sini -->
        <tr>
              <td class="py-2 px-4 border-b border-gray-300">dhani</td>
              <td class="py-2 px-4 border-b border-gray-300">ramadhani2020ramadhani@gmail.com</td>
              <td class="py-2 px-4 border-b border-gray-300">30-januari-2025</td>
          </tr>
      </tbody>
    </table>
  </div>
</section>
</x-app-layout>
