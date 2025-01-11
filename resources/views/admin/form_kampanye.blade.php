<x-app-layout>
  <section class="mt-8">
<body class="bg-gray-100">
  <div class="flex flex-col items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded-md p-8 w-full max-w-lg">
      <div class="text-center mb-6">
        <h1 class="text-xl font-bold text-gray-800">GALANG DANA</h1>
        <p class="text-sm text-gray-600">Isi formulir untuk memulai kampanye penggalangan dana</p>
      </div>

      <!-- Form -->
      <form action="#" method="POST">
        <!-- Campaign Title Fields -->
        <div class="space-y-4">
          <div>
            <label for="judul-kampanye" class="block text-sm font-medium text-gray-700">Judul Kampanye</label>
            <input type="text" id="judul-kampanye" name="judul-kampanye[]" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-red-500 focus:border-red-500">
          </div>
          <label for="judul-kampanye" class="block text-sm font-medium text-gray-700">deskripsi Kampanye</label>
          <div>
            <input type="text" id="judul-kampanye" name="judul-kampanye[]" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-red-500 focus:border-red-500">
          </div>
          <label for="judul-kampanye" class="block text-sm font-medium text-gray-700">Kategori Kampanye</label>
          <div>
            <input type="text" id="judul-kampanye" name="judul-kampanye[]" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-red-500 focus:border-red-500">
          </div>
          <label for="judul-kampanye" class="block text-sm font-medium text-gray-700">Jumlah Target Dana</label>
          <div>
            <input type="text" id="judul-kampanye" name="judul-kampanye[]" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-red-500 focus:border-red-500">
          </div>
          <label for="judul-kampanye" class="block text-sm font-medium text-gray-700">Waktu Kampanye</label>
          <div>
            <input type="text" id="judul-kampanye" name="judul-kampanye[]" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-red-500 focus:border-red-500">
          </div>
          <label for="judul-kampanye" class="block text-sm font-medium text-gray-700">Unggah Foto Kampanye</label>
          <div>
            <input type="text" id="judul-kampanye" name="judul-kampanye[]" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-red-500 focus:border-red-500">
          </div>
        <label for="judul-kampanye" class="block text-sm font-medium text-gray-700">Unggah Foto KTP</label>
          <div>
            <input type="text" id="judul-kampanye" name="judul-kampanye[]" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-red-500 focus:border-red-500">
          </div>

        <!-- Terms and Conditions -->
        <div class="mt-4 flex items-center">
          <input id="terms" name="terms" type="checkbox" class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
          <label for="terms" class="ml-2 block text-sm text-gray-900">
            Saya menyetujui syarat dan ketentuan
          </label>
        </div>

        <!-- Submit Button -->
        <div class="mt-6">
          <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded shadow">
            Mulai Galang Dana
          </button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
</section>
</x-app-layout>