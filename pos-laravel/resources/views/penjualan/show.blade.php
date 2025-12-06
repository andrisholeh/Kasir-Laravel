@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Penjualan #{{ $penjualan->id }}</h1>

    <div class="mb-3">
        <strong>Tanggal:</strong> {{ $penjualan->tanggal }} <br>
        <strong>Kasir:</strong> {{ $penjualan->user->name }} <br>
        <strong>Total:</strong> Rp {{ number_format($penjualan->total,0,',','.') }}
    </div>

    <h4>Detail Barang</h4>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Barang</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penjualan->detail as $d)
                <tr>
                    <td>{{ $d->barang->nama }}</td>
                    <td>{{ $d->qty }}</td>
                    <td>{{ number_format($d->harga,0,',','.') }}</td>
                    <td>{{ number_format($d->subtotal,0,',','.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('penjualan.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection