@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">
        <h4>Hasil Laporan Stok Barang</h4>
    </div>

    <div class="card-body">

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Barcode</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Satuan</th>
                    <th>Stok</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($data as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->barcode }}</td>
                        <td>{{ $row->nama_barang }}</td>
                        <td>{{ $row->kategori->nama_kategori ?? '-' }}</td>
                        <td>{{ $row->satuan->nama_satuan ?? '-' }}</td>
                        <td>{{ $row->stok }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data</td>
                    </tr>
                @endforelse
            </tbody>

        </table>

    </div>
</div>
@endsection