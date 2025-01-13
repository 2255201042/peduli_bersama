<x-app-layout>
  <div class="container mx-auto px-4 py-6">
      <!-- Welcome Message -->
      <h1 class="text-2xl font-bold text-gray-800">Welcome, Admin!</h1>
      <p class="text-gray-600">Here's an overview of your platform's performance.</p>

      <!-- Stats Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
          <!-- Total Users -->
          <div class="bg-white shadow rounded-lg p-6">
              <h3 class="text-lg font-semibold text-gray-800">Total Users</h3>
              <p class="text-2xl text-blue-600">{{ $totalUsers }}</p>
          </div>

          <!-- Active Campaigns -->
          <div class="bg-white shadow rounded-lg p-6">
              <h3 class="text-lg font-semibold text-gray-800">Active Campaigns</h3>
              <p class="text-2xl text-green-600">{{ $activeCampaigns }}</p>
          </div>

          <!-- Total Donations -->
          <div class="bg-white shadow rounded-lg p-6">
              <h3 class="text-lg font-semibold text-gray-800">Total Donations</h3>
              <p class="text-2xl text-yellow-600">Rp. {{ number_format($totalDonations) }}</p>
          </div>
      </div>

      <!-- Recent Campaigns -->
      <div class="mt-10">
          <h3 class="text-xl font-bold text-gray-800">Recent Campaigns</h3>
          <table class="mt-4 w-full border border-gray-300 text-left">
              <thead class="bg-gray-200">
                  <tr>
                      <th class="py-2 px-4">Title</th>
                      <th class="py-2 px-4">Fundraiser</th>
                      <th class="py-2 px-4">Target</th>
                      <th class="py-2 px-4">Status</th>
                      <th class="py-2 px-4">Actions</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($recentCampaigns as $campaign)
                  <tr>
                      <td class="py-2 px-4">{{ $campaign->title }}</td>
                      <td class="py-2 px-4">{{ $campaign->penggalang->name ?? 'N/A' }}</td>
                      <td class="py-2 px-4">Rp. {{ number_format($campaign->target_dana) }}</td>
                      <td class="py-2 px-4">
                          @switch($campaign->status)
                              @case(1)
                                  Done Galang
                                  @break
                              @case(2)
                                  Aktif
                                  @break
                              @case(3)
                                  Pending
                                  @break
                              @case(4)
                                  Sedang di Proses WD
                                  @break
                              @case(5)
                                  Selesai
                                  @break
                              @case(6)
                                  WD Gagal
                                  @break
                              @case(7)
                                  Gagal Galang
                                  @break
                              @case(8)
                                  Dibatalkan
                                  @break
                              @default
                                  Unknown
                          @endswitch
                      </td>
                      <td class="py-2 px-4">
                        <a href="{{ route('admin.detailkampanye', $campaign->id) }}" class="btn btn-info btn-sm px-3 rounded-pill">View</a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>

      <!-- Recent Donations -->
      <div class="mt-10">
          <h3 class="text-xl font-bold text-gray-800">Recent Donations</h3>
          <table class="mt-4 w-full border border-gray-300 text-left">
              <thead class="bg-gray-200">
                  <tr>
                      <th class="py-2 px-4">Donor Name</th>
                      <th class="py-2 px-4">Phone</th>
                      <th class="py-2 px-4">Amount</th>
                      <th class="py-2 px-4">Date</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($recentDonations as $donation)
                  <tr>
                      <td class="py-2 px-4">{{ $donation->name }}</td>
                      <td class="py-2 px-4">{{ $donation->no_hp }}</td>
                      <td class="py-2 px-4">Rp. {{ number_format($donation->payment_amount) }}</td>
                      <td class="py-2 px-4">{{ $donation->payment_date }}</td>
  
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>

      <!-- Donation Chart -->
      <div class="bg-white rounded-md drop-shadow-xl w-auto mt-10 flex justify-center">
        <div class="w-1/2">
          <h3 class="text-xl font-bold text-gray-800 text-center">Donation Trends</h3>
            <canvas id="donationChart" class="mt-6 w-full h-48"></canvas>
        </div>
    </div>
  </div>

  <!-- Chart.js Script -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    // Dynamic data from the backend
    const donationLabels = {!! json_encode(array_keys($donationTrends->toArray())) !!};
    const donationData = {!! json_encode(array_values($donationTrends->toArray())) !!};

    // Create the chart
    const ctx = document.getElementById('donationChart').getContext('2d');
    const donationChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: donationLabels,
            datasets: [{
                label: 'Donations',
                data: donationData,
                borderColor: 'rgba(54, 162, 235, 1)',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderWidth: 2,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true, // Allows resizing
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</x-app-layout>