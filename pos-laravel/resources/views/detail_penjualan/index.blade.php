@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Detail Penjualan</h1>

    <a href="{{ route('detail-penjualan.create') }}" class="btn btn-primary mb-3">Tambah Detail</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Penjualan</th>
                <th>Barang</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Subtotal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($detail as $d)
                <tr>
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->penjualan_id }}</td>
                    <td>{{ $d->barang->nama }}</td>
                    <td>{{ $d->qty }}</td>
                    <td>{{ number_format($d->harga,0,',','.') }}</td>
                    <td>{{ number_format($d->subtotal,0,',','.') }}</td>
                    <td>
                        <a href="{{ route('detail-penjualan.show', $d->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('detail-penjualan.edit', $d->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('detail-penjualan.destroy', $d->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Hapus baris ini?')" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="7" class="text-center">Belum ada data</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection