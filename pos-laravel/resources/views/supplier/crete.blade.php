@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-3">Tambah Supplier</h3>

    <form action="{{ route('supplier.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Supplier</label>
            <input type="text" name="nama_supplier" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">No. Telp</label>
            <input type="text" name="telp" class="form-control" required>
        </div>

        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('supplier.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection