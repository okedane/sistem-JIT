<x-layout>
    <div class="mb-3 text-uppercase breadcrumb-title">Tambah Bahan Baku</div>
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Master Bahan Baku</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="">
                        <a href="{{ url('/') }}"><i class="bx bx-home"></i></a>
                    </li>
                    
                    <li class=" active" aria-current="page">Tambah Bahan Baku</li>
                </ol>
            </nav>

        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body p-4">
                <h5 class="mb-4">Form Tambah Bahan Baku</h5>
                <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <label for="id_bahan" class="form-label">ID Bahan</label>
                        <input type="text" class="form-control" id="id_bahan" name="id_bahan" required>
                    </div>
                    <div class="col-md-12">
                        <label for="nama_bahan" class="form-label">Nama Bahan</label>
                        <input type="text" class="form-control" id="nama_bahan" name="nama_bahan" required>
                    </div>
                    <div class="col-md-12">
                        <label for="jenis" class="form-label">Jenis</label>
                        <select id="jenis" name="jenis" class="form-select" required>
                            <option selected disabled>Pilih Jenis...</option>
                            <option value="Bahan Baku">Bahan Baku</option>
                            <option value="Bahan Pendukung">Bahan Pendukung</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="satuan" class="form-label">Satuan</label>
                        <select id="satuan" name="satuan" class="form-select" required>
                            <option selected disabled>Pilih Satuan...</option>
                            <option value="Kg">Kg</option>
                            <option value="Gram">Gram</option>
                            <option value="Pcs">Pcs</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock" required>
                    </div>
                    <div class="col-md-12">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" required>
                    </div>
                    <div class="col-md-12">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*"
                            required>
                    </div>
                    <div class="col-md-12">
                        <div class="d-flex justify-content-end align-items-center gap-3">
                            <button type="submit" class="btn btn-grd-primary px-4">Simpan</button>
                            <a href="" class="btn btn-grd-royal px-4">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
