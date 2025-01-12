<aside class="w-64 bg-white border-r border-gray-300 shadow-md flex flex-col min-h-screen">
    <!-- Logo Section -->
    <div class="p-6">
        <a href="{{ route('public.home') }}">
            <div class="flex items-center gap-4">
                <div class="w-16 h-16 rounded-full flex items-center justify-center">
                    <img src="./Image/logo1-removebg-preview.png" alt="Logo" />
                </div>
                <h1 class="text-red-500 font-bold text-xl">Peduli Bersama</h1>
            </div>
        </a>
    </div>
  
    <!-- Navigation Links -->
    <nav class="flex-grow overflow-y-auto">
        <ul class="space-y-2">
            @if(auth()->user()->role_id == 1)
                <li>
                    <a href="{{ route('admin.kampanye') }}" 
                       class="block px-6 py-3 rounded-md font-medium 
                              {{ request()->routeIs('admin.kampanye') ? 'bg-red-100 text-red-500' : 'text-gray-700 hover:bg-gray-100' }}">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('kampanye.list') }}" 
                       class="block px-6 py-3 rounded-md font-medium 
                              {{ request()->routeIs('kampanye.list') ? 'bg-red-100 text-red-500' : 'text-gray-700 hover:bg-gray-100' }}">
                        Kampanye
                    </a>
                </li>
                <li>
                    <a href="{{ route('pencairan.create') }}" 
                       class="block px-6 py-3 rounded-md font-medium 
                              {{ request()->routeIs('pencairan.create') ? 'bg-red-100 text-red-500' : 'text-gray-700 hover:bg-gray-100' }}">
                        Pencairan Dana
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.laporan') }}" 
                       class="block px-6 py-3 rounded-md font-medium 
                              {{ request()->routeIs('admin.laporan') ? 'bg-red-100 text-red-500' : 'text-gray-700 hover:bg-gray-100' }}">
                        Laporan
                    </a>
                </li>
            @elseif(auth()->user()->role_id == 2)
                <li>
                    <a href="{{ route('admin.donatur') }}" 
                       class="block px-6 py-3 rounded-md font-medium 
                              {{ request()->routeIs('admin.donatur') ? 'bg-red-100 text-red-500' : 'text-gray-700 hover:bg-gray-100' }}">
                        Riwayat Donasi
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.laporan') }}" 
                       class="block px-6 py-3 rounded-md font-medium 
                              {{ request()->routeIs('admin.laporan') ? 'bg-red-100 text-red-500' : 'text-gray-700 hover:bg-gray-100' }}">
                        Laporan
                    </a>
                </li>
            @elseif(auth()->user()->role_id == 3)
                <li>
                    <a href="{{ route('admin.dashadmin') }}" 
                       class="block px-6 py-3 rounded-md font-medium 
                              {{ request()->routeIs('admin.admin.dash') ? 'bg-red-100 text-red-500' : 'text-gray-700 hover:bg-gray-100' }}">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.pengguna') }}" 
                       class="block px-6 py-3 rounded-md font-medium 
                              {{ request()->routeIs('admin.pengguna') ? 'bg-red-100 text-red-500' : 'text-gray-700 hover:bg-gray-100' }}">
                        Data Pengguna
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.pengalang') }}" 
                       class="block px-6 py-3 rounded-md font-medium 
                              {{ request()->routeIs('admin.penggalang') ? 'bg-red-100 text-red-500' : 'text-gray-700 hover:bg-gray-100' }}">
                        Penggalangan Dana
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.kelola') }}" 
                       class="block px-6 py-3 rounded-md font-medium 
                              {{ request()->routeIs('admin.kelola') ? 'bg-red-100 text-red-500' : 'text-gray-700 hover:bg-gray-100' }}">
                        Kelola
                    </a>
                </li>
            @endif
        </ul>
    </nav>
  
    <!-- Logout Button -->
    <div class="p-6">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full py-3 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 font-medium">
                Log Out
            </button>
        </form>
    </div>
</aside>