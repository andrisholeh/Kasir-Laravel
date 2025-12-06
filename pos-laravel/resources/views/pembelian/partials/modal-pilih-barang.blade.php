<div class="modal fade" id="modalBarang" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Pilih Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Satuan</th>
                            <th>Harga Beli</th>
                            <th>Pilih</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($barang as $b)
                        <tr>
                            <td>{{ $b->nama_barang }}</td>
                            <td>{{ $b->satuan->nama_satuan }}</td>
                            <td>Rp {{ angka($b->harga_beli) }}</td>
                            <td>
                                <button class="btn btn-primary btn-sm pilihBarang"
                                    data-id="{{ $b->id }}"
                                    data-nama="{{ $b->nama_barang }}"
                                    data-harga="{{ $b->harga_beli }}">
                                    Pilih
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>
    </div>
</div>