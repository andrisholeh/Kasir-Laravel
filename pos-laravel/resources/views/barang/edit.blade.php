@extends('layouts.app')

@section('title', 'Edit Barang')

@section('content')
<div class="container">
    <h1 class="mb-3">Edit Barang</h1>

    <form action="{{ route('barang.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Kode Barang</label>
            <input type="text" name="kode_barang" class="form-control"
                value="{{ $barang->kode_barang }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control"
                value="{{ $barang->nama_barang }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Satuan</label>
            <select name="satuan_id" class="form-control" required>
                @foreach ($satuan as $s)
                    <option value="{{ $s->id }}" {{ $barang->satuan_id == $s->id ? 'selected' : '' }}>
                        {{ $s->nama_satuan }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga Beli</label>
            <input type="number" name="harga_beli" class="form-control"
                value="{{ $barang->harga_beli }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga Jual</label>
            <input type="number" name="harga_jual" class="form-control"
                value="{{ $barang->harga_jual }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Stok</label>
            <input type="number" name="stok" class="form-control"
                value="{{ $barang->stok }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea name="keterangan" class="form-control">{{ $barang->keterangan }}</textarea>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection