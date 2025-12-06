@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-3">Data Karyawan</h3>

    <a href="{{ route('karyawan.create') }}" class="btn btn-primary mb-3">+ Tambah Karyawan</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Karyawan</th>
                <th>Jabatan</th>
                <th>No. Telp</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($karyawan as $k)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $k->nama_karyawan }}</td>
                <td>{{ $k->jabatan }}</td>
                <td>{{ $k->telp }}</td>
                <td>
                    <a href="{{ route('karyawan.show', $k->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('karyawan.edit', $k->id) }}" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center text-muted">Belum ada data karyawan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection