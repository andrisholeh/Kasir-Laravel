@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Detail Penjualan</h1>

    <form action="{{ route('detail-penjualan.update', $detail->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label class="form-label">Qty</label>
            <input type="number" name="qty" value="{{ $detail->qty }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="harga" value="{{ $detail->harga }}" class="form-control" required>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('detail-penjualan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection