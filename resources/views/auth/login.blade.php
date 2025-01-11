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
      <!-- Header -->
      <div class="text-center mb-6">
        <h1 class="text-xl font-bold text-gray-800">Masuk</h1>
        <p class="text-sm text-gray-600">Masuk ke Dalam Akun Anda</p>
      </div>

      <!-- Form -->
      <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <!-- Email -->
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Masukkan Email</label>
          <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-pink-500 focus:border-pink-500">
          @error('email')
            <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
          @enderror
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Masukkan Password</label>
          <input type="password" id="password" name="password" placeholder="Password" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-pink-500 focus:border-pink-500">
          @error('password')
            <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
          @enderror
          <!-- <div class="mt-2 text-right">
            <a href="{{ route('password.request') }}" class="text-sm text-pink-500 hover:underline">Lupa Password?</a>
          </div> -->
        </div>

        <!-- Remember Me -->
        <div class="flex items-center">
          <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-pink-600 focus:ring-pink-500 border-gray-300 rounded">
          <label for="remember_me" class="ml-2 text-sm text-gray-900">Saya menyetujui syarat dan ketentuan</label>
        </div>

        <!-- Submit Button -->
        <div>
          <button type="submit" class="w-full bg-pink-500 hover:bg-pink-600 text-white font-medium py-2 px-4 rounded shadow">
            MASUK
          </button>
        </div>
      </form>

      <!-- Additional Options -->
      <div class="mt-4 text-center text-sm text-gray-600">
        <p>atau</p>
        <a href="{{route('register')}}" class="text-pink-500 hover:underline">Belum Punya Akun? Buat Akun</a>
      </div>
    </div>
  </div>
</body>
</html>
