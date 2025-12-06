@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-4">Detail User</h4>

    <div class="card p-4">
        <p><strong>Username:</strong> {{ $user->username }}</p>
        <p><strong>Nama Lengkap:</strong> {{ $user->nama_lengkap }}</p>
        <p><strong>Role:</strong> {{ $user->role->nama_role }}</p>
        <p><strong>Status:</strong> {{ $user->status }}</p>
        <p><strong>Dibuat:</strong> {{ $user->created_at }}</p>
    </div>

    <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection