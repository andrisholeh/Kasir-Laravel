@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Data Pembelian</h5>
        <a href="{{ route('pembelian.create') }}" class="btn btn-primary">Tambah Pembelian</a>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Pembelian</th>
                    <th>Tanggal</th>
                    <th>Supplier</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($pembelian as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->kode_pembelian }}</td>
                    <td>{{ tanggal($row->tanggal) }}</td>
                    <td>{{ $row->supplier->nama_supplier }}</td>
                    <td>Rp {{ angka($row->total) }}</td>
                    <td>
                        <a href="{{ route('pembelian.show', $row->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('pembelian.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
@endsection