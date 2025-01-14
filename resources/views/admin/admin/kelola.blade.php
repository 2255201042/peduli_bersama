<x-app-layout>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Kelola Kampanye</h1>
    
        <!-- Search and Filter Form -->
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
    
        <!-- Table -->
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
                            <select name="status" class="form-select form-select-sm bg-light border-0 w-full" onchange="handleStatusChange(this, {{ $kampanye->id }})">
                                <option value="1" {{ $kampanye->status == '1' ? 'selected' : '' }}>Done Galang</option>
                                <option value="2" {{ $kampanye->status == '2' ? 'selected' : '' }}>Aktif</option>
                                <option value="3" {{ $kampanye->status == '3' ? 'selected' : '' }}>Pending</option>
                                <option value="4" {{ $kampanye->status == '4' ? 'selected' : '' }}>Sedang di Proses WD</option>
                                <option value="5" {{ $kampanye->status == '5' ? 'selected' : '' }}>Selesai</option>
                                <option value="6" {{ $kampanye->status == '6' ? 'selected' : '' }}>WD Gagal</option>
                                <option value="7" {{ $kampanye->status == '7' ? 'selected' : '' }}>Gagal Galang</option>
                                <option value="8" {{ $kampanye->status == '8' ? 'selected' : '' }}>Dibatalkan</option>
                            </select>
                        </td>
                        <td class="text-center text-blue-500">
                            <a href="{{ route('admin.detailkampanye', $kampanye->id) }}" class="btn btn-info btn-sm px-3 rounded-pill">View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $kampanyes->links() }}
        </div>
    </div>

    <!-- Modal -->
    <div id="statusModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-bold mb-4">Provide a Reason</h2>
            <form method="POST" action="" id="statusModalForm">
                @csrf
                <input type="hidden" name="status" id="statusModalStatus">
                <textarea id="statusModalReason" name="reason" rows="4" class="w-full border-gray-300 rounded-lg p-2 mb-4" placeholder="Enter your reason..."></textarea>
                <div class="flex justify-end">
                    <button type="button" onclick="document.getElementById('statusModal').classList.add('hidden');" class="btn btn-secondary mr-2">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        function handleStatusChange(selectElement, campaignId) {
            const selectedStatus = selectElement.value;
    
            // Show modal if status is 6, 7, or 8
            if (['6', '7', '8'].includes(selectedStatus)) {
                document.getElementById('statusModal').classList.remove('hidden');
                document.getElementById('statusModalForm').action = `/admin/valid/${campaignId}`;
                document.getElementById('statusModalStatus').value = selectedStatus;
                document.getElementById('statusModalReason').value = ''; // Clear previous input
            } else {
                // Submit the form directly for other statuses
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = `/admin/valid/${campaignId}`;
                form.innerHTML = `
                    @csrf
                    <input type="hidden" name="status" value="${selectedStatus}">
                `;
                document.body.appendChild(form);
                form.submit();
            }
        }
    </script>
</x-app-layout>