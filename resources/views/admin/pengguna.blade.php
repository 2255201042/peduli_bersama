<x-app-layout>
  <!-- Total Users Section -->
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
                      <p class="text-gray-600" id="total-users">{{ $usersCount }}</p>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- Search and Table Section -->
  <section class="mt-8">
      <h3 class="text-lg font-bold text-gray-800">Daftar Pengguna</h3>

      <!-- Search Bar -->
      <div class="mt-4 mb-4">
          <form method="GET" action="{{ route('admin.pengguna') }}">
              <input 
                  type="text" 
                  name="search" 
                  value="{{ $search }}" 
                  placeholder="Cari nama pengguna..." 
                  class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full sm:w-1/3"
              />
              <button 
                  type="submit" 
                  class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                  Cari
              </button>
          </form>
      </div>

      <!-- Users Table -->
      <div class="mt-4 overflow-x-auto">
          <table class="w-full border border-gray-300 text-left">
              <thead class="bg-gray-200">
                  <tr>
                      <th class="py-2 px-4 border-b border-gray-300">Nama</th>
                      <th class="py-2 px-4 border-b border-gray-300">Email</th>
                      <th class="py-2 px-4 border-b border-gray-300">Tanggal Bergabung</th>
                  </tr>
              </thead>
              <tbody>
                  @forelse ($users as $user)
                      <tr>
                          <td class="py-2 px-4 border-b border-gray-300">{{ $user->name }}</td>
                          <td class="py-2 px-4 border-b border-gray-300">{{ $user->email }}</td>
                          <td class="py-2 px-4 border-b border-gray-300">{{ $user->created_at->format('d-m-Y') }}</td>
                      </tr>
                  @empty
                      <tr>
                          <td colspan="3" class="py-2 px-4 border-b border-gray-300 text-center text-gray-600">
                              Tidak ada pengguna ditemukan.
                          </td>
                      </tr>
                  @endforelse
              </tbody>
          </table>
      </div>

      <div class="mt-4">
          {{ $users->links() }}
      </div>
  </section>
</x-app-layout>