@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Penjualan</h1>

    <form action="{{ route('penjualan.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>

        <h5>Detail Barang</h5>

        <table class="table" id="detail-table">
            <thead>
                <tr>
                    <th>Barang</th>
                    <th>Qty</th>
                    <th>Harga</th>
                    <th>Subtotal</th>
                    <th></th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>

        <button type="button" class="btn btn-secondary mb-3" id="add-row">Tambah Baris</button>

        <div class="mb-3">
            <label class="form-label">Total</label>
            <input type="number" name="total" id="total" class="form-control" readonly>
        </div>

        <button class="btn btn-primary">Simpan</button>
    </form>
</div>

<script>
document.getElementById('add-row').addEventListener('click', function () {
    let tbody = document.querySelector('#detail-table tbody');
    let tr = document.createElement('tr');

    tr.innerHTML = `
        <td>
            <select name="barang_id[]" class="form-select" required>
                @foreach ($barang as $b)
                    <option value="{{ $b->id }}">{{ $b->nama }}</option>
                @endforeach
            </select>
        </td>
        <td><input type="number" name="qty[]" class="form-control qty" required></td>
        <td><input type="number" name="harga[]" class="form-control harga" required></td>
        <td><input type="number" name="subtotal[]" class="form-control subtotal" readonly></td>
        <td><button type="button" class="btn btn-danger btn-sm remove-row">X</button></td>
    `;

    tbody.appendChild(tr);

    tr.querySelector('.remove-row').addEventListener('click', () => tr.remove());
});
</script>

@endsection