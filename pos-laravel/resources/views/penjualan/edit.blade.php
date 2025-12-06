@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Penjualan</h1>

    <form action="{{ route('penjualan.update', $penjualan->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label class="form-label">Tanggal</label>
            <input type="date" name="tanggal" value="{{ $penjualan->tanggal }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Total</label>
            <input type="number" name="total" value="{{ $penjualan->total }}" class="form-control" required>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('penjualan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection