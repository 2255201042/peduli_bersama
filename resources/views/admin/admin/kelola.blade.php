<x-app-layout>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Kelola Kampanye</h1>
    
        <form method="GET" action="{{ route('admin.kelola') }}" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control rounded-pill" placeholder="Search by title..." value="{{ request('search') }}">
                <select name="status" class="form-select rounded-pill mx-2">
                    <option value="" selected>Status</option>
                    <option value="1" {{ request('status') == '1' ? 'selected' : '' }}>Done Galang</option>
                    <option value="2" {{ request('status') == '2' ? 'selected' : '' }}>Aktif</option>
                    <option value="3" {{ request('status') == '3' ? 'selected' : '' }}>Pending</option>
                    <option value="4" {{ request('status') == '4' ? 'selected' : '' }}>Sedang di Proses WD</option>
                    <option value="5" {{ request('status') == '5' ? 'selected' : '' }}>Selesai</option>
                    <option value="6" {{ request('status') == '6' ? 'selected' : '' }}>WD Gagal</option>
                    <option value="7" {{ request('status') == '7' ? 'selected' : '' }}>Gagal Galang</option>
                    <option value="8" {{ request('status') == '8' ? 'selected' : '' }}>Dibatalkan</option>
                </select>
                <button class="btn btn-primary rounded-pill px-4" type="submit">Search</button>
            </div>
        </form>
    
        <div class="table-responsive">
            <table class="w-full min-w-[640px] border border-gray-300 text-left">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kampanyes as $kampanye)
                    <tr class="text-center">
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $kampanye->title }}</td>
                        <td>
                            <form method="POST" action="{{ route('admin.valid', $kampanye->id) }}">
                                @csrf
                                @method('PUT')
                                <select name="status" class="form-select form-select-sm bg-light border-0 w-full" onchange="this.form.submit()">
                                    <option value="1" {{ $kampanye->status == '1' ? 'selected' : '' }}>Done Galang</option>
                                    <option value="2" {{ $kampanye->status == '2' ? 'selected' : '' }}>Aktif</option>
                                    <option value="3" {{ $kampanye->status == '3' ? 'selected' : '' }}>Pending</option>
                                    <option value="4" {{ $kampanye->status == '4' ? 'selected' : '' }}>Sedang di Proses WD</option>
                                    <option value="5" {{ $kampanye->status == '5' ? 'selected' : '' }}>Selesai</option>
                                    <option value="6" {{ $kampanye->status == '6' ? 'selected' : '' }}>WD Gagal</option>
                                    <option value="7" {{ $kampanye->status == '7' ? 'selected' : '' }}>Gagal Galang</option>
                                    <option value="8" {{ $kampanye->status == '8' ? 'selected' : '' }}>Dibatalkan</option>
                                </select>
                            </form>
                        </td>
                        <td class="text-center text-blue-500">
                            <a href="{{ route('admin.detailkampanye', $kampanye->id) }}" class="btn btn-info btn-sm px-3 rounded-pill">View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
        <div class="d-flex justify-content-center mt-4">
            {{ $kampanyes->links() }}
        </div>
    </div>
</x-app-layout>