@extends('layouts.app')

@section('title', 'Detail Satuan')

@section('content')
<div class="container">
    <h1 class="mb-3">Detail Satuan</h1>

    <table class="table table-bordered">
        <tr>
            <th>Nama Satuan</th>
            <td>{{ $satuan->nama_satuan }}</td>
        </tr>
        <tr>
            <th>Keterangan</th>
            <td>{{ $satuan->keterangan }}</td>
        </tr>
    </table>

    <a href="{{ route('satuan.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection