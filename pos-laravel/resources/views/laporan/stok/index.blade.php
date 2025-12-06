@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">
        <h4>Laporan Stok Barang</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('laporan.stok.preview') }}" method="GET">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label>Kategori (Opsional)</label>
                    <select name="kategori_id" class="form-control">
                        <option value="">Semua Kategori</option>
                        @foreach ($kategori as $k)
                            <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">Tampilkan</button>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection