@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Tambah Pembelian</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('pembelian.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Supplier</label>
                <select name="supplier_id" class="form-control" required>
                    <option value="">Pilih Supplier</option>
                    @foreach ($supplier as $sup)
                    <option value="{{ $sup->id }}">{{ $sup->nama_supplier }}</option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-primary">Simpan</button>
            <a href="{{ route('pembelian.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection