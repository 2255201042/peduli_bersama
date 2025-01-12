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
                        <td class="py-2 px-4">{{ $campaign->status == "1" ? 'Active' : 'Inactive' }}</td>
                        <td class="py-2 px-4">
                            <a href="{{ route('kampanye.show', $campaign->id) }}" class="text-blue-500 hover:underline">Lihat</a>                

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
                        <th class="py-2 px-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recentDonations as $donation)
                    <tr>
                        <td class="py-2 px-4">{{ $donation->name }}</td>
                        <td class="py-2 px-4">{{ $donation->no_hp }}</td>
                        <td class="py-2 px-4">Rp. {{ number_format($donation->payment_amount) }}</td>
                        <td class="py-2 px-4">{{ $donation->payment_date }}</td>
                        <td class="py-2 px-4">
                            <button class="text-blue-500 hover:underline">View</button> |
                            <button class="text-red-500 hover:underline">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Donation Chart -->
        <div class="bg-white rounded-md drop-shadow-xl w-full mt-10">
            <div class="p-4">
                <h3 class="text-xl font-bold text-gray-800 text-center">Donation Trends</h3>
                <div class="relative h-[50vh] w-full"> <!-- 50% of viewport height -->
                    <canvas id="donationChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js Script -->
   <!-- Chart.js Script -->
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <script>
       // Dynamic data from the backend
       const donationLabels = {!! json_encode(array_keys($donationTrends->toArray())) !!};
       const donationData = {!! json_encode(array_values($donationTrends->toArray())) !!};
   
       // Create the gradient fill
       const ctx = document.getElementById('donationChart').getContext('2d');
       const gradient = ctx.createLinearGradient(0, 0, 0, 400);
       gradient.addColorStop(0, 'rgba(54, 162, 235, 0.4)');
       gradient.addColorStop(1, 'rgba(54, 162, 235, 0)');
   
       // Create the chart
       const donationChart = new Chart(ctx, {
           type: 'line',
           data: {
               labels: donationLabels,
               datasets: [{
                   label: 'Donations (Rp)',
                   data: donationData,
                   borderColor: 'rgba(54, 162, 235, 1)',
                   backgroundColor: gradient,
                   pointBackgroundColor: 'rgba(54, 162, 235, 1)',
                   pointBorderColor: '#fff',
                   pointHoverBackgroundColor: '#fff',
                   pointHoverBorderColor: 'rgba(54, 162, 235, 1)',
                   borderWidth: 2,
                   tension: 0.4, // Makes the line curved
               }]
           },
           options: {
               responsive: true,
               maintainAspectRatio: false, // Fully responsive
               plugins: {
                   legend: {
                       display: true,
                       position: 'top',
                       labels: {
                           color: '#333',
                           font: {
                               size: 14
                           }
                       }
                   },
                   tooltip: {
                       enabled: true,
                       backgroundColor: 'rgba(0, 0, 0, 0.7)',
                       titleFont: {
                           size: 14
                       },
                       bodyFont: {
                           size: 12
                       },
                       padding: 10,
                       callbacks: {
                           label: function(context) {
                               const value = context.raw;
                               return `Rp. ${value.toLocaleString()}`;
                           }
                       }
                   }
               },
               scales: {
                   x: {
                       grid: {
                           display: false
                       },
                       ticks: {
                           color: '#666',
                           font: {
                               size: 12
                           }
                       }
                   },
                   y: {
                       grid: {
                           color: '#eaeaea'
                       },
                       ticks: {
                           beginAtZero: true,
                           color: '#666',
                           font: {
                               size: 12
                           },
                           callback: function(value) {
                               return `Rp. ${value.toLocaleString()}`;
                           }
                       }
                   }
               }
           }
       });
   </script>
</x-app-layout>