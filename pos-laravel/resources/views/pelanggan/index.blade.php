@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-3">Data Pelanggan</h3>

    <a href="{{ route('pelanggan.create') }}" class="btn btn-primary mb-3">+ Tambah Pelanggan</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Pelanggan</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pelanggan as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->nama_pelanggan }}</td>
                <td>{{ $p->alamat }}</td>
                <td>{{ $p->telp }}</td>
                <td>
                    <a href="{{ route('pelanggan.show', $p->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('pelanggan.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center text-muted">Belum ada data pelanggan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection