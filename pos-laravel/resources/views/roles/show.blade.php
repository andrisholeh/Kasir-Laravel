@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="mb-0">Detail Role</h4>
    </div>

    <div class="card-body">
        <div class="mb-3">
            <label class="form-label fw-bold">ID</label>
            <p>{{ $role->id }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Nama Role</label>
            <p>{{ $role->nama_role }}</p>
        </div>

        <a href="{{ route('roles.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection