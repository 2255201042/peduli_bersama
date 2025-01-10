<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Peduli Bersama</title>
</head>
<body class="bg-gray-100">
  <div class="flex flex-col items-center justify-center min-h-screen">
    <!-- Card Container -->
    <div class="bg-pink-50 shadow-md rounded-md p-8 w-full max-w-md">
      <div class="text-center mb-6">
        <h1 class="text-xl font-bold text-gray-800">BUAT AKUN</h1>
      </div>

      <!-- Form -->
      <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

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

        <!-- no_hp Number -->
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
        <input name="role_id" value="3" hidden>

        <!-- Submit Button -->
        <div>
          <button type="submit" class="w-full bg-pink-500 hover:bg-pink-600 text-white font-medium py-2 px-4 rounded shadow">
            DAFTAR
          </button>
        </div>
        
      </form>

      <!-- Login Link -->
      <div class="mt-4 text-center text-sm text-gray-600">
        <p>Sudah punya akun?</p>
        <a href="{{ route('login') }}" class="text-pink-500 hover:underline">Masuk</a>
      </div>
    </div>
  </div>
</body>
</html>
