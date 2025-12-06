@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-3">Edit Supplier</h3>

    <form action="{{ route('supplier.update', $supplier->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Supplier</label>
            <input type="text" name="nama_supplier" class="form-control"
                value="{{ $supplier->nama_supplier }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" rows="3" required>{{ $supplier->alamat }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">No. Telp</label>
            <input type="text" name="telp" class="form-control"
                value="{{ $supplier->telp }}" required>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('supplier.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection