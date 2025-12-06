@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Penjualan Item #{{ $detail->id }}</h1>

    <div class="mb-3">
        <strong>ID Penjualan:</strong> {{ $detail->penjualan_id }} <br>
        <strong>Barang:</strong> {{ $detail->barang->nama }} <br>
        <strong>Qty:</strong> {{ $detail->qty }} <br>
        <strong>Harga:</strong> Rp {{ number_format($detail->harga,0,',','.') }} <br>
        <strong>Subtotal:</strong> Rp {{ number_format($detail->subtotal,0,',','.') }}
    </div>

    <a href="{{ route('detail-penjualan.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection