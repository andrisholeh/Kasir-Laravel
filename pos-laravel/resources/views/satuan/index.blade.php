@extends('layouts.app')

@section('title', 'Data Satuan')

@section('content')
<div class="container">
    <h1 class="mb-3">Data Satuan</h1>

    <a href="{{ route('satuan.create') }}" class="btn btn-primary mb-3">Tambah Satuan</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Satuan</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($satuan as $item)
                <tr>
                    <td>{{ $item->nama_satuan }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>
                        <a href="{{ route('satuan.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('satuan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('satuan.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection