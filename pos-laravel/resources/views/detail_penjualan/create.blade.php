@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Detail Penjualan</h1>

    <form action="{{ route('detail-penjualan.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Penjualan</label>
            <select name="penjualan_id" class="form-select" required>
                @foreach ($penjualan as $p)
                    <option value="{{ $p->id }}">#{{ $p->id }} - {{ $p->tanggal }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Barang</label>
            <select name="barang_id" class="form-select" required>
                @foreach ($barang as $b)
                    <option value="{{ $b->id }}">{{ $b->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Qty</label>
            <input type="number" name="qty" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" required>
        </div>

        <button class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection