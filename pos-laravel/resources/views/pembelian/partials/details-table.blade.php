<div class="card">
    <div class="card-header">
        <h6 class="mb-0">Detail Barang</h6>
    </div>

    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Barang</th>
                    <th>Qty</th>
                    <th>Harga</th>
                    <th>Subtotal</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($pembelian->detail as $d)
                <tr>
                    <td>{{ $d->barang->nama_barang }}</td>
                    <td>{{ $d->qty }}</td>
                    <td>Rp {{ angka($d->harga) }}</td>
                    <td>Rp {{ angka($d->subtotal) }}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>