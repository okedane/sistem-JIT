<x-layout>
    <div class="mb-3 text-uppercase breadcrumb-title">Edit Suplier</div>
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Master Suplier</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="">
                        <a href="{{ url('/') }}"><i class="bx bx-home"></i></a>
                    </li>
                    <li class="active" aria-current="page">Edit Suplier</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body p-4">
                <h5 class="mb-4">Form Edit Suplier</h5>
                <form class="row g-3" action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12">
                        <label for="id_suplier" class="form-label">ID Suplier</label>
                        <input type="text" class="form-control" id="id_suplier" name="id_suplier" value="" required>
                    </div>
                    <div class="col-md-12">
                        <label for="nama_suplier" class="form-label">Nama Suplier</label>
                        <input type="text" class="form-control" id="nama_suplier" name="nama_suplier" value="" required>
                    </div>
                    <div class="col-md-12">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat ..." rows="3" required></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="text" class="form-control" id="telepon" name="telepon" value="" required>
                    </div>
                    <div class="col-md-12">
                        <label for="kota" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="kota" name="kota" value="" required>
                    </div>
                    <div class="col-md-12">
                        <label for="provinsi" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" name="provinsi" value="" required>
                    </div>
                    <div class="col-md-12">
                        <div class="d-flex justify-content-end align-items-center gap-3">
                            <button type="submit" class="btn btn-warning px-4">Update</button>
                            <a href="{{ url('/suplier') }}" class="btn btn-secondary px-4">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
