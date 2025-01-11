@extends ('welcome')
@section('title', 'Pembayaran')
@section('content')  
<section class="container mx-auto my-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 px-6">
@foreach ($galleryItems as $item)
<div class="container">
        <div class="header">
            Pembayaran
        </div>
        <div class="content">
            <h2>Yayasan Peduli Anak</h2>
            <p>Jumlah: <strong>Rp50.000</strong></p>
            <img src="https://via.placeholder.com/200" alt="QR Code">
            <p>Selesaikan pembayaran dalam <strong>14:59</strong></p>
            <div class="footer">
                <a href="#" class="button">Batalkan</a>
            </div>
        </div>
    </div>

    <!-- Success Screen (Hidden by Default) -->
    <div class="container" style="display:none;">
        <div class="success">
            <div class="icon">✔</div>
            Pembayaran Berhasil
        </div>
        <div class="content">
            <h2>Jumlah: Rp50.000</h2>
            <p>No. Transaksi: 000123456789</p>
            <p>Halaman ini akan tertutup otomatis dalam <strong>5</strong> detik.</p>
            <div class="footer">
                <a href="#" class="button" style="background-color: #2196F3;">Buat Kode QR Baru</a>
            </div>
        </div>
    </div>
    <script src="{{ asset('resources\js\app.js') }}"></script>
@endsection