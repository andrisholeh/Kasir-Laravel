@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">
        <h4>Laporan Pembelian</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('laporan.pembelian.preview') }}" method="GET">
            <div class="row mb-3">
                <div class="col-md-4">
                    <label>Dari Tanggal</label>
                    <input type="date" name="tanggal_awal" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label>Sampai Tanggal</label>
                    <input type="date" name="tanggal_akhir" class="form-control" required>
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">Tampilkan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection