@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Detail Karyawan</h3>

    <div class="card p-4 shadow-sm">

        <div class="mb-3">
            <strong>Nama Karyawan:</strong><br>
            {{ $karyawan->nama_karyawan }}
        </div>

        <div class="mb-3">
            <strong>Jabatan:</strong><br>
            {{ $karyawan->jabatan }}
        </div>

        <div class="mb-3">
            <strong>No. Telp:</strong><br>
            {{ $karyawan->telp }}
        </div>

        <a href="{{ route('karyawan.index') }}" class="btn btn-secondary mt-3">Kembali</a>

    </div>
</div>
@endsection