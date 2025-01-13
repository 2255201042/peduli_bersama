<x-app-layout>
    <div class="container mt-5">
        <!-- Campaign Details -->
        <div class="row">
            <div class="col-md-8">
                <!-- Campaign Overview -->
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h2 class="mb-3">{{ $kampanye->title }}</h2>
                        <p class="text-muted">{{ $kampanye->deskripsi }}</p>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <p><strong>Target Dana:</strong> Rp{{ number_format($kampanye->target_dana, 0, ',', '.') }}</p>
                            <p><strong>Status:</strong>
                                @switch($kampanye->status)
                                    @case(1) <span class="badge bg-success">Done Galang</span> @break
                                    @case(2) <span class="badge bg-info">Aktif</span> @break
                                    @case(3) <span class="badge bg-warning">Pending</span> @break
                                    @case(4) <span class="badge bg-primary">Sedang di Proses WD</span> @break
                                    @case(5) <span class="badge bg-secondary">Selesai</span> @break
                                    @case(6) <span class="badge bg-danger">WD Gagal</span> @break
                                    @case(7) <span class="badge bg-dark">Gagal Galang</span> @break
                                    @case(8) <span class="badge bg-light text-dark">Dibatalkan</span> @break
                                    @default <span class="badge bg-secondary">Unknown</span>
                                @endswitch
                            </p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p><strong>Start Date:</strong> {{ $kampanye->start_date }}</p>
                            <p><strong>End Date:</strong> {{ $kampanye->end_date }}</p>
                        </div>
                        <p><strong>Penggalang Dana:</strong> {{ $kampanye->penggalang->name ?? 'Unknown' }}</p>
                    </div>
                </div>

                <!-- Documents Section -->
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h4>Dokumen Kampanye</h4>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <strong>KTP:</strong> 
                                <a href="{{ asset('images/ktp/' . $kampanye->f_ktp) }}" target="_blank" class="btn btn-link">Download KTP</a>
                            </li>
                            <li class="list-group-item">
                                <strong>Lampiran:</strong> 
                                <a href="{{ asset('attachments/' . $kampanye->lampiran) }}" target="_blank" class="btn btn-link">Download Lampiran</a>
                            </li>
                            <li class="list-group-item">
                                <strong>Proposal:</strong> 
                                <a href="{{ asset('attachments/' . $kampanye->perposal) }}" target="_blank" class="btn btn-link">Download Proposal</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Right Column: Progress and Photo -->
            <div class="col-md-4">
                <!-- Progress Section -->
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h4 class="text-center">Progress Penggalangan</h4>
                        <div class="progress my-3" style="height: 20px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: {{ $kampanye->donations->sum('amount') / $kampanye->target_dana * 100 }}%;" aria-valuenow="{{ $kampanye->donations->sum('amount') }}" aria-valuemin="0" aria-valuemax="{{ $kampanye->target_dana }}">
                                {{ number_format($kampanye->donations->sum('amount') / $kampanye->target_dana * 100, 0) }}%
                            </div>
                        </div>
                        <p><strong>Terkumpul:</strong> Rp{{ number_format($kampanye->donations->sum('amount'), 0, ',', '.') }} dari Rp{{ number_format($kampanye->target_dana, 0, ',', '.') }}</p>
                        <a href="#" class="btn btn-primary btn-block mt-3">Lihat Donatur</a>
                    </div>
                </div>

                <!-- Campaign Photo -->
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h4>Foto Kampanye</h4>
                        @if($kampanye->gambar)
                            <img src="{{ asset('images/campaigns/' . $kampanye->gambar) }}" alt="Foto Kampanye" class="img-fluid rounded mt-3">
                        @else
                            <p class="text-muted mt-3">Tidak ada foto kampanye.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Donations Table -->
        <h3 class="mt-5 mb-4 text-center">Daftar Donasi</h3>
        @if($dananya->isEmpty())
            <div class="alert alert-info text-center">Belum ada donasi pada kampanye ini.</div>
        @else
            <div class="table-responsive">
                <table class="table table-hover shadow-sm">
                    <thead class="bg-primary text-white">
                        <tr class="text-center">
                            <th>#</th>
                            <th>Nama Donatur</th>
                            <th>Jumlah</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dananya as $donation)
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
        @endif
    </div>
</x-app-layout>