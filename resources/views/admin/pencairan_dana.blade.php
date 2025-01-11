<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pencairan Dana</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
  <div class="min-h-screen flex flex-col">

      <!-- Main Content -->
      <div class="flex-1 p-6">
        <div class="bg-white rounded-lg shadow p-6">
          <h2 class="text-xl font-bold mb-4">Peduli Bersama</h2>

          <div class="border-t pt-4">
            <h3 class="text-lg font-semibold mb-4">Ingin Melakukan Pencairan Dana!</h3>
            <p class="text-sm text-gray-600 mb-4">Cuma butuh waktu 3 menit untuk membuat form pencairan.</p>

            <form>

              <!-- Nama -->
              <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                  Tambah Nama
                </label>
                <input type="varchar" id="name" placeholder="Tambah Nama" class="block w-full border-gray-300 rounded-lg shadow-sm focus:border-red-500 focus:ring focus:ring-red-200">
              </div>

              <!-- Nama Kampanye -->
              <div class="mb-4">
                <label for="campaign_name" class="block text-sm font-medium text-gray-700 mb-2">
                  Tambah Nama Kampanye
                </label>
                <input type="varchar" id="description" placeholder="Tambah Nama Kampanye" class="block w-full border-gray-300 rounded-lg shadow-sm focus:border-red-500 focus:ring focus:ring-red-200">
              </div>

              <!-- Nomor Telepon -->
              <div class="mb-4">
                <label for="phone_number" class="block text-sm font-medium text-gray-700 mb-2">
                  Tambah Nomor Telepon
                </label>
                <input type="varchar" id="phone_number" placeholder="Tambah Nomor Telepon" class="block w-full border-gray-300 rounded-lg shadow-sm focus:border-red-500 focus:ring focus:ring-red-200">
              </div>

              <!-- Nomor Rekening -->
              <div class="mb-4">
                <label for="norek" class="block text-sm font-medium text-gray-700 mb-2">
                  Tambah Nomor Rekening
                </label>
                <input type="varchar" id="norek" placeholder="Tambah Nomor Rekening" class="block w-full border-gray-300 rounded-lg shadow-sm focus:border-red-500 focus:ring focus:ring-red-200">
              </div>

              <!-- Tanggal Penarikan -->
              <div class="mb-4">
                <label for="wd_date" class="block text-sm font-medium text-gray-700 mb-2">
                  Tambah Tanggal Penarikan
                </label>
                <input type="date" id="wd_date" placeholder="Tambah Tanggal Penarikan" 
                  class="border-gray-300 rounded-lg shadow-sm focus:border-red-500 focus:ring focus:ring-red-200">
              </div>

              <!-- Submit Button -->
              <div>
                <button type="submit" class="w-full bg-red-600 text-white py-2 rounded-lg hover:bg-red-700">
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
