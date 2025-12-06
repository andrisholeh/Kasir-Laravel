@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-4">Daftar Users</h4>

    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Tambah User</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Username</th>
                <th>Nama Lengkap</th>
                <th>Role</th>
                <th>Status</th>
                <th width="150">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $u)
            <tr>
                <td>{{ $u->username }}</td>
                <td>{{ $u->nama_lengkap }}</td>
                <td>{{ $u->role->nama_role }}</td>
                <td>{{ $u->status }}</td>
                <td>
                    <a href="{{ route('users.show', $u->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('users.edit', $u->id) }}" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection