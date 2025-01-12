<x-app-layout>
    <!-- Section: Kampanye Done -->
    <section class="mt-8 px-4 sm:px-6 lg:px-8">
      <h3 class="text-lg font-bold text-gray-800">Kelola Kampanye Done</h3>
      <div class="mt-4 overflow-x-auto">
        <table class="w-full min-w-[640px] border border-gray-300 text-left">
          <thead class="bg-gray-200">
            <tr>
              <th class="py-2 px-4 border-b border-gray-300">Nama Kampanye</th>
              <th class="py-2 px-4 border-b border-gray-300">Kategori</th>
              <th class="py-2 px-4 border-b border-gray-300">Status</th>
              <th class="py-2 px-4 border-b border-gray-300">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($kampanyeDone as $kampanye)
              <tr>
                <td class="py-2 px-4 border-b border-gray-300">{{ $kampanye->title }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $kampanye->kategori }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $kampanye->status }}</td>
                <td class="py-2 px-4 border-b border-gray-300">
                  <a href="{{ route('kampanye.show', $kampanye->id) }}" class="text-blue-500 hover:underline">Lihat</a>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="4" class="py-2 px-4 border-b border-gray-300 text-center">Tidak ada kampanye Done</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </section>
  
    <!-- Section: Kampanye Aktif -->
    <section class="mt-8 px-4 sm:px-6 lg:px-8">
      <h3 class="text-lg font-bold text-gray-800">Kelola Kampanye Aktif</h3>
      <div class="mt-4 overflow-x-auto">
        <table class="w-full min-w-[640px] border border-gray-300 text-left">
          <thead class="bg-gray-200">
            <tr>
              <th class="py-2 px-4 border-b border-gray-300">Nama Kampanye</th>
              <th class="py-2 px-4 border-b border-gray-300">Kategori</th>
              <th class="py-2 px-4 border-b border-gray-300">Status</th>
              <th class="py-2 px-4 border-b border-gray-300">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($kampanyeAktif as $kampanye)
              <tr>
                <td class="py-2 px-4 border-b border-gray-300">{{ $kampanye->title }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $kampanye->kategori }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $kampanye->status }}</td>
                <td class="py-2 px-4 border-b border-gray-300">
                  <a href="{{ route('kampanye.show', $kampanye->id) }}" class="text-blue-500 hover:underline">Lihat</a>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="4" class="py-2 px-4 border-b border-gray-300 text-center">Tidak ada kampanye aktif</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </section>
  
    <!-- Section: Kampanye Pending -->
    <section class="mt-8 px-4 sm:px-6 lg:px-8">
      <h3 class="text-lg font-bold text-gray-800">Kelola Kampanye Pending</h3>
      <div class="mt-4 overflow-x-auto">
        <table class="w-full min-w-[640px] border border-gray-300 text-left">
          <thead class="bg-gray-200">
            <tr>
              <th class="py-2 px-4 border-b border-gray-300">Nama Kampanye</th>
              <th class="py-2 px-4 border-b border-gray-300">Kategori</th>
              <th class="py-2 px-4 border-b border-gray-300">Status</th>
              <th class="py-2 px-4 border-b border-gray-300">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($kampanyePending as $kampanye)
              <tr>
                <td class="py-2 px-4 border-b border-gray-300">{{ $kampanye->title }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $kampanye->kategori }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $kampanye->status }}</td>
                <td class="py-2 px-4 border-b border-gray-300">
                  <a href="{{ route('kampanye.show', $kampanye->id) }}" class="text-blue-500 hover:underline">Lihat</a>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="4" class="py-2 px-4 border-b border-gray-300 text-center">Tidak ada kampanye pending</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </section>
  
    <!-- Section: Proses Withdrawal -->
    <section class="mt-8 px-4 sm:px-6 lg:px-8">
      <h3 class="text-lg font-bold text-gray-800">Kelola Kampanye Proses Withdrawal</h3>
      <div class="mt-4 overflow-x-auto">
        <table class="w-full min-w-[640px] border border-gray-300 text-left">
          <thead class="bg-gray-200">
            <tr>
              <th class="py-2 px-4 border-b border-gray-300">Nama Kampanye</th>
              <th class="py-2 px-4 border-b border-gray-300">Kategori</th>
              <th class="py-2 px-4 border-b border-gray-300">Status</th>
              <th class="py-2 px-4 border-b border-gray-300">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($kampanyeProssesWd as $kampanye)
              <tr>
                <td class="py-2 px-4 border-b border-gray-300">{{ $kampanye->title }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $kampanye->kategori }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $kampanye->status }}</td>
                <td class="py-2 px-4 border-b border-gray-300">
                  <a href="{{ route('kampanye.show', $kampanye->id) }}" class="text-blue-500 hover:underline">Lihat</a>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="4" class="py-2 px-4 border-b border-gray-300 text-center">Tidak ada kampanye dalam proses withdrawal</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </section>
  
    <!-- Section: Withdrawal Success -->
    <section class="mt-8 px-4 sm:px-6 lg:px-8">
      <h3 class="text-lg font-bold text-gray-800">Kelola Kampanye Withdrawal Berhasil</h3>
      <div class="mt-4 overflow-x-auto">
        <table class="w-full min-w-[640px] border border-gray-300 text-left">
          <thead class="bg-gray-200">
            <tr>
              <th class="py-2 px-4 border-b border-gray-300">Nama Kampanye</th>
              <th class="py-2 px-4 border-b border-gray-300">Kategori</th>
              <th class="py-2 px-4 border-b border-gray-300">Status</th>
              <th class="py-2 px-4 border-b border-gray-300">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($kampanyeWdBerhasil as $kampanye)
              <tr>
                <td class="py-2 px-4 border-b border-gray-300">{{ $kampanye->title }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $kampanye->kategori }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $kampanye->status }}</td>
                <td class="py-2 px-4 border-b border-gray-300">
                  <a href="{{ route('kampanye.show', $kampanye->id) }}" class="text-blue-500 hover:underline">Lihat</a>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="4" class="py-2 px-4 border-b border-gray-300 text-center">Tidak ada kampanye withdrawal berhasil</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </section>
  
    <!-- Section: Withdrawal Gagal -->
    <section class="mt-8 px-4 sm:px-6 lg:px-8">
      <h3 class="text-lg font-bold text-gray-800">Kelola Kampanye Withdrawal Gagal</h3>
      <div class="mt-4 overflow-x-auto">
        <table class="w-full min-w-[640px] border border-gray-300 text-left">
          <thead class="bg-gray-200">
            <tr>
              <th class="py-2 px-4 border-b border-gray-300">Nama Kampanye</th>
              <th class="py-2 px-4 border-b border-gray-300">Kategori</th>
              <th class="py-2 px-4 border-b border-gray-300">Status</th>
              <th class="py-2 px-4 border-b border-gray-300">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($kampanyeWdGagal as $kampanye)
              <tr>
                <td class="py-2 px-4 border-b border-gray-300">{{ $kampanye->title }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $kampanye->kategori }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $kampanye->status }}</td>
                <td class="py-2 px-4 border-b border-gray-300">
                  <a href="{{ route('kampanye.show', $kampanye->id) }}" class="text-blue-500 hover:underline">Lihat</a>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="4" class="py-2 px-4 border-b border-gray-300 text-center">Tidak ada kampanye withdrawal gagal</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </section>
  
    <!-- Section: Kampanye Gagal -->
    <section class="mt-8 px-4 sm:px-6 lg:px-8">
      <h3 class="text-lg font-bold text-gray-800">Kelola Kampanye Gagal</h3>
      <div class="mt-4 overflow-x-auto">
        <table class="w-full min-w-[640px] border border-gray-300 text-left">
          <thead class="bg-gray-200">
            <tr>
              <th class="py-2 px-4 border-b border-gray-300">Nama Kampanye</th>
              <th class="py-2 px-4 border-b border-gray-300">Kategori</th>
              <th class="py-2 px-4 border-b border-gray-300">Status</th>
              <th class="py-2 px-4 border-b border-gray-300">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($kampanyeGagalGalang as $kampanye)
              <tr>
                <td class="py-2 px-4 border-b border-gray-300">{{ $kampanye->title }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $kampanye->kategori }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $kampanye->status }}</td>
                <td class="py-2 px-4 border-b border-gray-300">
                  <a href="{{ route('kampanye.show', $kampanye->id) }}" class="text-blue-500 hover:underline">Lihat</a>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="4" class="py-2 px-4 border-b border-gray-300 text-center">Tidak ada kampanye gagal</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </section>
  </x-app-layout>