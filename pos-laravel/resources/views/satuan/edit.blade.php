@extends('layouts.app')

@section('title', 'Edit Satuan')

@section('content')
<div class="container">
    <h1 class="mb-3">Edit Satuan</h1>

    <form action="{{ route('satuan.update', $satuan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Satuan</label>
            <input type="text" name="nama_satuan" class="form-control"
                value="{{ $satuan->nama_satuan }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea name="keterangan" class="form-control">{{ $satuan->keterangan }}</textarea>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('satuan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection