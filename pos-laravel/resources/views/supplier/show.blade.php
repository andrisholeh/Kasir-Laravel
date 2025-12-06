@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Detail Supplier</h3>

    <div class="card p-4 shadow-sm">

        <div class="mb-3">
            <strong>Nama Supplier:</strong><br>
            {{ $supplier->nama_supplier }}
        </div>

        <div class="mb-3">
            <strong>Alamat:</strong><br>
            {{ $supplier->alamat }}
        </div>

        <div class="mb-3">
            <strong>No. Telp:</strong><br>
            {{ $supplier->telp }}
        </div>

        <a href="{{ route('supplier.index') }}" class="btn btn-secondary mt-3">Kembali</a>

    </div>
</div>
@endsection