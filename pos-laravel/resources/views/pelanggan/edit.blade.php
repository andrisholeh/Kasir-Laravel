@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-3">Edit Pelanggan</h3>

    <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" class="form-control"
                value="{{ $pelanggan->nama_pelanggan }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" rows="3" required>{{ $pelanggan->alamat }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">No. Telp</label>
            <input type="text" name="telp" class="form-control"
                value="{{ $pelanggan->telp }}" required>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection