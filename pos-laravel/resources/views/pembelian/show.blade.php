@extends('layouts.app')

@section('content')
<div class="card mb-4">
    <div class="card-header d-flex justify-content-between">
        <h5>Detail Pembelian</h5>
        <a href="{{ route('pembelian.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
    </div>

    <div class="card-body">
        <p><strong>Kode Pembelian:</strong> {{ $pembelian->kode_pembelian }}</p>
        <p><strong>Tanggal:</strong> {{ tanggal($pembelian->tanggal) }}</p>
        <p><strong>Supplier:</strong> {{ $pembelian->supplier->nama_supplier }}</p>
        <p><strong>Total:</strong> Rp {{ angka($pembelian->total) }}</p>
    </div>
</div>

@include('pembelian.partials.detail-table')

@endsection