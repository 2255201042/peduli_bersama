<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Peduli Bersama</title>
  <style>
    .hidden { display: none; }
  </style>
</head>
<body class="bg-gray-100">
  <div class="flex flex-col items-center justify-center min-h-screen">
    <!-- Container -->
    <div class="bg-pink-50 shadow-md rounded-md p-8 w-full max-w-md">
      <div class="text-center mb-6">
        <h1 class="text-xl font-bold text-gray-800">BUAT AKUN</h1>
      </div>

      <!-- Toggle Buttons -->
      <div class="flex justify-around mb-6">
        <button id="penggalangBtn" class="px-4 py-2 bg-pink-500 text-white rounded shadow">Penggalang</button>
        <button id="donaturBtn" class="px-4 py-2 bg-gray-300 text-gray-700 rounded shadow">Donatur</button>
      </div>

      <!-- Penggalang Form -->
      <form id="penggalangForm" method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf
        <input type="hidden" name="role_id" value="1">
        <!-- Username -->
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Nama Pengguna</label>
          <input type="text" id="name" name="name" placeholder="User Name" value="{{ old('name') }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-pink-500 focus:border-pink-500">
          @error('name')
            <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
          @enderror
        </div>

        <!-- Email -->
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-pink-500 focus:border-pink-500">
          @error('email')
            <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
          @enderror
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" id="password" name="password" placeholder="Password" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-pink-500 focus:border-pink-500">
          @error('password')
            <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
          @enderror
        </div>

        <!-- Phone Number -->
        <div>
          <label for="no_hp" class="block text-sm font-medium text-gray-700">No Telepon</label>
          <input type="text" id="no_hp" name="no_hp" placeholder="No Telepon" value="{{ old('no_hp') }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-pink-500 focus:border-pink-500">
          @error('no_hp')
            <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
          @enderror
        </div>

        <!-- Terms and Conditions -->
        <div class="flex items-center">
          <input id="terms" name="terms" type="checkbox" class="h-4 w-4 text-pink-600 focus:ring-pink-500 border-gray-300 rounded">
          <label for="terms" class="ml-2 text-sm text-gray-900">Saya menyetujui syarat dan ketentuan</label>
          @error('terms')
            <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
          @enderror
        </div>

        <!-- Submit Button -->
        <div>
          <button type="submit" class="w-full bg-pink-500 hover:bg-pink-600 text-white font-medium py-2 px-4 rounded shadow">
            DAFTAR SEBAGAI PENGGALANG
          </button>
        </div>
      </form>

      <!-- Donatur Form -->
      <form id="donaturForm" method="POST" action="{{ route('register') }}" class="space-y-4 hidden">
        @csrf
        <input type="hidden" name="role_id" value="2">
        <!-- Username -->
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Nama Pengguna</label>
          <input type="text" id="name" name="name" placeholder="User Name" value="{{ old('name') }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-pink-500 focus:border-pink-500">
          @error('name')
            <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
          @enderror
        </div>

        <!-- Email -->
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-pink-500 focus:border-pink-500">
          @error('email')
            <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
          @enderror
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" id="password" name="password" placeholder="Password" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-pink-500 focus:border-pink-500">
          @error('password')
            <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
          @enderror
        </div>

        <!-- Phone Number -->
        <div>
          <label for="no_hp" class="block text-sm font-medium text-gray-700">No Telepon</label>
          <input type="text" id="no_hp" name="no_hp" placeholder="No Telepon" value="{{ old('no_hp') }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-pink-500 focus:border-pink-500">
          @error('no_hp')
            <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
          @enderror
        </div>

        <!-- Terms and Conditions -->
        <div class="flex items-center">
          <input id="terms" name="terms" type="checkbox" class="h-4 w-4 text-pink-600 focus:ring-pink-500 border-gray-300 rounded">
          <label for="terms" class="ml-2 text-sm text-gray-900">Saya menyetujui syarat dan ketentuan</label>
          @error('terms')
            <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
          @enderror
        </div>

        <!-- Submit Button -->
        <div>
          <button type="submit" class="w-full bg-pink-500 hover:bg-pink-600 text-white font-medium py-2 px-4 rounded shadow">
            DAFTAR SEBAGAI DONATUR
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- JavaScript to toggle forms -->
  <script>
    const penggalangBtn = document.getElementById('penggalangBtn');
    const donaturBtn = document.getElementById('donaturBtn');
    const penggalangForm = document.getElementById('penggalangForm');
    const donaturForm = document.getElementById('donaturForm');

    penggalangBtn.addEventListener('click', () => {
      penggalangForm.classList.remove('hidden');
      donaturForm.classList.add('hidden');
      penggalangBtn.classList.add('bg-pink-500', 'text-white');
      penggalangBtn.classList.remove('bg-gray-300', 'text-gray-700');
      donaturBtn.classList.remove('bg-pink-500', 'text-white');
      donaturBtn.classList.add('bg-gray-300', 'text-gray-700');
    });

    donaturBtn.addEventListener('click', () => {
      donaturForm.classList.remove('hidden');
      penggalangForm.classList.add('hidden');
      donaturBtn.classList.add('bg-pink-500', 'text-white');
      donaturBtn.classList.remove('bg-gray-300', 'text-gray-700');
      penggalangBtn.classList.remove('bg-pink-500', 'text-white');
      penggalangBtn.classList.add('bg-gray-300', 'text-gray-700');
    });
  </script>
</body>
</html>