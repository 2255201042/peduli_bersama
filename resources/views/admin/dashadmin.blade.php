<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard - Peduli Bersama</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-100 font-sans">
    <div class="flex h-screen">
      <!-- Sidebar -->
      <aside class="w-64 bg-white border-r border-gray-300 shadow-md">
        <div class="p-6">
          <div class="flex items-center gap-4">
            <div class="w-16 h-16 rounded-full flex items-center justify-center">
              <img src="./Image/logo1-removebg-preview.png" alt="Logo">
            </div>
            <h1 class="text-red-500 font-bold text-xl">Peduli Bersama</h1>
          </div>
        </div>
        <nav class="mt-6">
          <ul class="space-y-2">
            <li>
              <a href="#" class="block px-6 py-3 bg-red-100 text-red-500 rounded-md font-medium">Dashboard</a>
            </li>
            <li>
              <a href="#" class="block px-6 py-3 text-gray-700 hover:bg-gray-100 rounded-md">Data Pengguna</a>
            </li>
            <li>
              <a href="#" class="block px-6 py-3 text-gray-700 hover:bg-gray-100 rounded-md">Penggalangan Dana</a>
            </li>
            <li>
              <a href="#" class="block px-6 py-3 text-gray-700 hover:bg-gray-100 rounded-md">Laporan</a>
            </li>
          </ul>
        </nav>
        <div class="absolute bottom-4 w-full px-8">
          <button class="wl-full py-3 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 font-medium">Log Out</button>
        </div>
      </aside>

      <!-- Main Content -->
      <main class="flex-1 p-8">
        <!-- Header -->
        <header class="flex items-center justify-between">
          <h2 class="text-xl font-bold text-gray-800">Admin Dashboard</h2>
          <div class="flex items-center gap-4">
            <span class="text-sm text-gray-500">admin@pedulibersama.com</span>
            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
              <span class="text-gray-400">👤</span>
            </div>
          </div>
        </header>

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
      </main>
    </div>
  </body>
</html>
