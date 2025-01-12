<x-app-layout>
  <section class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white shadow-md rounded-md p-6 sm:p-8 w-full max-w-2xl">
      <div class="text-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">GALANG DANA</h1>
        <p class="text-sm text-gray-600">Isi formulir untuk memulai kampanye penggalangan dana</p>
      </div>

      <!-- Template Download Section -->
      <div class="mb-6 text-center">
        <p class="text-sm text-gray-600">Unduh template laporan penggunaan dana:</p>
        <a 
          href="{{ asset('template/Laporan_Penggunaan_Dana.docx') }}" 
          class="inline-block px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white font-medium rounded shadow"
          download
        >
          Download Template
        </a>
      </div>

      <!-- Form -->
      <form action="{{ route('kampanye.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="space-y-4">
          <!-- Campaign Title -->
          <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Judul Kampanye</label>
            <input type="text" id="title" name="title" 
                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-red-500 focus:border-red-500"
                   required>
          </div>

          <!-- Campaign Description -->
          <div>
            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi Kampanye</label>
            <textarea id="deskripsi" name="deskripsi" rows="4"
                      class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-red-500 focus:border-red-500"
                      required></textarea>
          </div>

          <!-- Target Amount -->
          <div>
            <label for="target_dana" class="block text-sm font-medium text-gray-700">Jumlah Target Dana</label>
            <input type="number" id="target_dana" name="target_dana"
                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-red-500 focus:border-red-500"
                   required>
          </div>

          <!-- Campaign Start Date -->
          <div>
            <label for="start_date" class="block text-sm font-medium text-gray-700">Tanggal Mulai</label>
            <input type="date" id="start_date" name="start_date"
                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-red-500 focus:border-red-500"
                   required>
          </div>

          <!-- Campaign End Date -->
          <div>
            <label for="end_date" class="block text-sm font-medium text-gray-700">Tanggal Berakhir</label>
            <input type="date" id="end_date" name="end_date"
                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-red-500 focus:border-red-500"
                   required>
          </div>

          <!-- Campaign Image -->
          <div>
            <label for="gambar" class="block text-sm font-medium text-gray-700">Unggah Foto Kampanye</label>
            <input type="file" id="gambar" name="gambar"
                   class="mt-1 block w-full text-gray-700 border border-gray-300 rounded-md shadow-sm p-2 focus:ring-red-500 focus:border-red-500"
                   accept="image/*" required>
          </div>

          <!-- KTP Image -->
          <div>
            <label for="f_ktp" class="block text-sm font-medium text-gray-700">Unggah Foto KTP</label>
            <input type="file" id="f_ktp" name="f_ktp"
                   class="mt-1 block w-full text-gray-700 border border-gray-300 rounded-md shadow-sm p-2 focus:ring-red-500 focus:border-red-500"
                   accept="image/*" required>
          </div>

          <!-- Additional Attachment -->
          <div>
            <label for="lampiran" class="block text-sm font-medium text-gray-700">Unggah Lampiran Tambahan</label>
            <input type="file" id="lampiran" name="lampiran"
                   class="mt-1 block w-full text-gray-700 border border-gray-300 rounded-md shadow-sm p-2 focus:ring-red-500 focus:border-red-500"
                   accept=".pdf,.doc,.docx">
          </div>

          <!-- Status (Hidden Field) -->
          <input type="hidden" name="status" value="3">

        </div>

        <!-- Submit Button -->
        <div class="mt-6">
          <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded shadow">
            Mulai Galang Dana
          </button>
        </div>
      </form>
    </div>
  </section>
</x-app-layout>