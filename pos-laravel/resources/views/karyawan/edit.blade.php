@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-3">Edit Karyawan</h3>

    <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Karyawan</label>
            <input type="text" name="nama_karyawan" class="form-control"
                value="{{ $karyawan->nama_karyawan }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jabatan</label>
            <input type="text" name="jabatan" class="form-control"
                value="{{ $karyawan->jabatan }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">No. Telp</label>
            <input type="text" name="telp" class="form-control"
                value="{{ $karyawan->telp }}" required>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection