<x-layout>
    <div class="mb-3 text-uppercase breadcrumb-title">Transaksi Bahan Baku Masuk</div>
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Transaksi</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)"><i class="bx bx-package"></i></a>
                    </li>
                    <li> Transaksi Bahan Baku Masuk</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="page-content">
        <div class="card radius-10">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="mb-0">Transaksi Bahan Baku Masuk</h5>
                    </div>
                    <a href="/transaksi-masuk.create" class="btn btn-primary px-3">
                        <i class="bx bx-plus me-1"></i>Tambah Transaksi
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-hover table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th width="5%">No</th>
                                <th width="10%">ID Trx</th>
                                <th width="20%">Penerima</th>
                                <th width="10%">Suplier</th>
                                <th width="10%">Bahan Baku</th>
                                <th width="10%">Stok Masuk</th>
                                <th width="10%">Tanggal</th>
                                <th width="10%">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Tr001</td>
                                <td>Admin</td>
                                <td>Suplier 1</td>
                                <td>BB001</td>
                                <td>100</td>
                                <td class="text-center">2023-10-01</td>
                                <td class="text-end">Rp 10.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>
