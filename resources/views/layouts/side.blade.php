<aside class="w-64 bg-white border-r border-gray-300 shadow-md">
        <div class="p-6">
          <a href="{{ route("public.home")}}">
            <div class="flex items-center gap-4">
              <div class="w-16 h-16 rounded-full flex items-center justify-center">
                <img src="./Image/logo1-removebg-preview.png" alt="/">
              </div>
              <h1 class="text-red-500 font-bold text-xl">Peduli Bersama</h1>
            </div>
          </a>
        </div>
        <nav class="mt-6 h-1/2">
          <ul class="h-full">
            <li>
              <a href="{{route("admin.dashadmin")}}" class="block px-6 py-3 bg-red-100 text-red-500 rounded-md font-medium">Dashboard</a>
            </li>
            <li>
              <a href="{{route("admin.pengguna")}}" class="block px-6 py-3 text-gray-700 hover:bg-gray-100 rounded-md">Data Pengguna</a>
            </li>
            <li>
              <a href="{{route("admin.penggalangandana")}}" class="block px-6 py-3 text-gray-700 hover:bg-gray-100 rounded-md">Penggalangan Dana</a>
            </li>
            <li>
              <a href="{{route("admin.laporan")}}" class="block px-6 py-3 text-gray-700 hover:bg-gray-100 rounded-md">Laporan</a>
            </li>
            <li>
              <a href="{{route("admin.form_kampanye")}}" class="block px-6 py-3 text-gray-700 hover:bg-gray-100 rounded-md">Kampanye</a>
            </li>
            <li>
              <a href="{{route("admin.riwayat_donasi")}}" class="block px-6 py-3 text-gray-700 hover:bg-gray-100 rounded-md">Riwayat Donasi</a>
            </li>
            <li>
              <a href="{{route("admin.pencairan_dana")}}" class="block px-6 py-3 text-gray-700 hover:bg-gray-100 rounded-md">Pencairan Dana</a>
            </li>
  
          </ul>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full py-3 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 font-medium">Log Out</button>
            </form> 
        </nav>
  
      </aside>