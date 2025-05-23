<x-layout>
    <div class="mb-3 text-uppercase breadcrumb-title">Master Bahan Baku </div>
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Bahan Baku</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)"><i class="bx bx-package"></i></a>
                    </li>
                    <li> Master Bahan Baku</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="page-content">
        <div class="card radius-10">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="mb-0">Master Bahan Baku</h5>
                    </div>
                    <a href="/bahan.create" class="btn btn-primary px-3">
                        <i class="bx bx-plus me-1"></i>Tambah Bahan Baku
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-hover table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th width="5%">No</th>
                                <th width="10%">ID Bahan</th>
                                <th width="20%">Nama Bahan</th>
                                <th width="10%">Jenis</th>
                                <th width="10%">Satuan</th>
                                <th width="10%">Stock</th>
                                <th width="10%">Harga</th>
                                <th width="15%">Gambar</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>BB001</td>
                                <td>Tepung Terigu</td>
                                <td>Pokok</td>
                                <td class="text-center">Kg</td>
                                <td class="text-end">100</td>
                                <td class="text-end">Rp 10.000</td>
                                <td class="text-center">
                                    <img src="assets/images/products/tepung_terigu.jpg" alt="Tepung Terigu"
                                        class="rounded" style="max-height: 50px;">
                                </td>
                                <td class="text-center">
                                    <div class="d-flex gap-2 justify-content-center">
                                        <a href="/bahan.edit" class="btn btn-sm btn-primary">
                                            <i class="bx bx-edit-alt"></i>
                                        </a>
                                        <a href="" class="btn btn-sm btn-danger" 
                                           onclick="return confirm('Are you sure?')">
                                            <i class="bx bx-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <!-- To add more rows, copy the structure of the <tr> element above.
                                 Replace the placeholder values (e.g., ID, Name, Type, etc.) with actual data. -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>
