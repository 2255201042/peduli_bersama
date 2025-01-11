<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Riwayat Donasi</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex min-h-screen">

  <!-- Main Container -->
  <div class="w-screen h-screen px-4 sm:px-6 lg:px-8 py-6 space-y-6">

    <!-- Header Section -->
    <div class="flex items-center justify-center space-x-3">
      <h1 class="text-2xl font-bold text-black">Riwayat Donasi</h1>
      <button id="month-select-button" class="flex items-center justify-center w-10 h-10 cursor-pointer">
        <svg class="h-25 w-25 text-white-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3" />
        </svg>
      </button>     
      <p id="report-month" class="text-lg font-medium text-gray-600 ml-3"></p>
    </div>

    <!-- Month Selector Popup -->
    <div id="month-popup" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center">
      <div class="bg-white rounded-lg p-6 w-96">
        <h2 class="text-lg font-bold text-gray-700 mb-4">Pilih Bulan</h2>
        <select id="month-select" class="w-full border border-gray-300 rounded-lg p-2 mb-4">
          <option value="2025-01">Januari 2025</option>
          <option value="2024-12">Desember 2024</option>
          <option value="2024-11">November 2024</option>
          <option value="2024-10">Oktober 2024</option>
          <option value="2024-09">September 2024</option>
        </select>
        <div class="flex justify-end space-x-4">
          <button id="close-popup" class="px-4 py-2 bg-gray-300 rounded-lg">Batal</button>
          <button id="apply-month" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Terapkan</button>
        </div>
      </div>
    </div>

    <!-- Table Section -->
    <div class="bg-white shadow rounded-lg p-6">
      <table class="table-auto w-full border-collapse border border-gray-300 rounded-lg mb-4">
        <thead class="bg-gray-200">
          <tr>
            <th class="px-4 py-2 border border-gray-300 text-left">ID Validasi</th>
            <th class="px-4 py-2 border border-gray-300 text-left">ID Kampanye</th>
            <th class="px-4 py-2 border border-gray-300 text-left">ID Donatur</th>
            <th class="px-4 py-2 border border-gray-300 text-right">Payment Amount</th>
            <th class="px-4 py-2 border border-gray-300 text-right">Payment Date</th>
          </tr>
        </thead>
        <tbody id="table-body">
          <!-- Items will be dynamically added here -->
        </tbody>
      </table>
    </div>

    <!-- Total Section -->
    <div class="flex items-center justify-end">
      <div class="bg-gray-200 p-2 rounded-lg">
        <p class="text-gray-700 font-medium">Total Amount: <span id="total-price" class="font-bold">Rp.0</span></p>
      </div>
    </div>

  </div>

  <script>
    const tableBody = document.getElementById("table-body");
    const totalPriceElement = document.getElementById("total-price");
    const reportMonth = document.getElementById("report-month");

    // Example data for validation report for each month
    const validationData = {
      "2025-01": [
        { idValidation: "V001", idCampaign: "C001", idDonor: "D001", amount: 500000, date: "2025-01-05" },
        { idValidation: "V002", idCampaign: "C002", idDonor: "D002", amount: 750000, date: "2025-01-10" },
        { idValidation: "V003", idCampaign: "C003", idDonor: "D003", amount: 1000000, date: "2025-01-15" }
      ],
      "2024-12": [
        { idValidation: "V004", idCampaign: "C004", idDonor: "D004", amount: 300000, date: "2024-12-01" },
        { idValidation: "V005", idCampaign: "C005", idDonor: "D005", amount: 600000, date: "2024-12-12" },
        { idValidation: "V006", idCampaign: "C006", idDonor: "D006", amount: 850000, date: "2024-12-20" }
      ],
      "2024-11": [
        { idValidation: "V007", idCampaign: "C007", idDonor: "D007", amount: 450000, date: "2024-11-05" },
        { idValidation: "V008", idCampaign: "C008", idDonor: "D008", amount: 500000, date: "2024-11-15" },
        { idValidation: "V009", idCampaign: "C009", idDonor: "D009", amount: 900000, date: "2024-11-25" }
      ],
      "2024-10": [
        { idValidation: "V010", idCampaign: "C010", idDonor: "D010", amount: 650000, date: "2024-10-08" },
        { idValidation: "V011", idCampaign: "C011", idDonor: "D011", amount: 800000, date: "2024-10-20" }
      ],
      "2024-09": [
        { idValidation: "V012", idCampaign: "C012", idDonor: "D012", amount: 550000, date: "2024-09-03" },
        { idValidation: "V013", idCampaign: "C013", idDonor: "D013", amount: 750000, date: "2024-09-17" }
      ]
    };

    // Function to fetch data (simulate from backend)
    async function fetchData(month) {
      return validationData[month] || [];
    }

    // Function to populate table with data
    async function populateTable(month) {
      const items = await fetchData(month);
      let totalPrice = 0;
      tableBody.innerHTML = "";

      items.forEach(item => {
        totalPrice += item.amount;

        const row = document.createElement("tr");
        row.innerHTML = `
          <td class="px-4 py-2 border border-gray-300 text-sm text-gray-700">${item.idValidation}</td>
          <td class="px-4 py-2 border border-gray-300 text-sm text-gray-700">${item.idCampaign}</td>
          <td class="px-4 py-2 border border-gray-300 text-sm text-gray-700">${item.idDonor}</td>
          <td class="px-4 py-2 border border-gray-300 text-sm text-right text-gray-700">Rp.${new Intl.NumberFormat('id-ID').format(item.amount)}</td>
          <td class="px-4 py-2 border border-gray-300 text-sm text-right text-gray-700">${item.date}</td>
        `;
        tableBody.appendChild(row);
      });

      totalPriceElement.textContent = `Rp.${new Intl.NumberFormat('id-ID').format(totalPrice)}`;
      reportMonth.textContent = new Date(`${month}-01`).toLocaleString('id-ID', { month: 'long', year: 'numeric' });
    }

    // Event listeners for the popup
    document.getElementById("month-select-button").addEventListener("click", () => {
      document.getElementById("month-popup").classList.remove("hidden");
    });

    document.getElementById("close-popup").addEventListener("click", () => {
      document.getElementById("month-popup").classList.add("hidden");
    });

    document.getElementById("apply-month").addEventListener("click", () => {
      const selectedMonth = document.getElementById("month-select").value;
      populateTable(selectedMonth);
      document.getElementById("month-popup").classList.add("hidden");
    });

    // Initial load for the current month
    const initialMonth = new Date().toISOString().slice(0, 7);
    populateTable(initialMonth);
  </script>
</body>
</html>
