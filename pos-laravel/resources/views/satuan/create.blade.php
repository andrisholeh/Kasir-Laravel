@extends('layouts.app')

@section('title', 'Tambah Satuan')

@section('content')
<div class="container">
    <h1 class="mb-3">Tambah Satuan</h1>

    <form action="{{ route('satuan.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Satuan</label>
            <input type="text" name="nama_satuan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea name="keterangan" class="form-control"></textarea>
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('satuan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection