@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Detail Pelanggan</h3>

    <div class="card p-4 shadow-sm">

        <div class="mb-3">
            <strong>Nama Pelanggan:</strong><br>
            {{ $pelanggan->nama_pelanggan }}
        </div>

        <div class="mb-3">
            <strong>Alamat:</strong><br>
            {{ $pelanggan->alamat }}
        </div>

        <div class="mb-3">
            <strong>No. Telp:</strong><br>
            {{ $pelanggan->telp }}
        </div>

        <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary mt-3">Kembali</a>

    </div>
</div>
@endsection