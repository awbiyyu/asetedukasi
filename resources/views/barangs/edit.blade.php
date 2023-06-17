<div class="modal fade" id="editModal{{$barang->id}}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="editModal{{$barang->id}}">Edit Barang</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="{{ route('barangs.update', $barang->id) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="row">
                    <div class="mb-3">
                        <div class="form-group">
                            <strong>Nama:</strong>
                            <input type="text" name="nama" value="{{ $barang->nama }}" class="form-control" placeholder="Nama Barang">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <strong>Stok:</strong>
                            <input type="number" name="stok" value="{{ $barang->stok }}" class="form-control" placeholder="Stok Barang">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
</form>
