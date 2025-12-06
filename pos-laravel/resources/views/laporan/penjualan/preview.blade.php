@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">
        <h4>Hasil Laporan Penjualan</h4>
    </div>

    <div class="card-body">

        <p><strong>Periode:</strong> {{ $tanggal_awal }} s/d {{ $tanggal_akhir }}</p>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>No Nota</th>
                    <th>Pelanggan</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->tanggal }}</td>
                        <td>{{ $row->no_nota }}</td>
                        <td>{{ $row->pelanggan->nama_pelanggan ?? '-' }}</td>
                        <td>{{ number_format($row->total, 0, ',', '.') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>
@endsection