@extends('layouts.app')

@section('title', 'Detail Barang')

@section('content')
<div class="container">
    <h1 class="mb-3">Detail Barang</h1>

    <table class="table table-bordered">
        <tr>
            <th>Kode Barang</th>
            <td>{{ $barang->kode_barang }}</td>
        </tr>
        <tr>
            <th>Nama Barang</th>
            <td>{{ $barang->nama_barang }}</td>
        </tr>
        <tr>
            <th>Satuan</th>
            <td>{{ $barang->satuan->nama_satuan }}</td>
        </tr>
        <tr>
            <th>Harga Beli</th>
            <td>Rp {{ number_format($barang->harga_beli) }}</td>
        </tr>
        <tr>
            <th>Harga Jual</th>
            <td>Rp {{ number_format($barang->harga_jual) }}</td>
        </tr>
        <tr>
            <th>Stok</th>
            <td>{{ $barang->stok }}</td>
        </tr>
        <tr>
            <th>Keterangan</th>
            <td>{{ $barang->keterangan }}</td>
        </tr>
    </table>

    <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection