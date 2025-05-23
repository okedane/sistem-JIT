<x-layout>
    <div class="mb-3 text-uppercase breadcrumb-title">Master Suplier</div>
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Suplier</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)"><i class="bx bx-package"></i></a>
                    </li>
                    <li> Master Suplier</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="page-content">
        <div class="card radius-10">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="mb-0">Master Suplier</h5>
                    </div>
                    <a href="/suplier.create" class="btn btn-primary px-3">
                        <i class="bx bx-plus me-1"></i>Tambah Suplier
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-hover table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th width="5%">No</th>
                                <th width="10%">ID Suplier</th>
                                <th width="20%">Nama Suplier</th>
                                <th width="10%">Alamat</th>
                                <th width="10%">Telepon</th>
                                <th width="10%">Kota</th>
                                <th width="10%">Provinsi</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>SU001</td>
                                <td>PT. Sumber Makmur</td>
                                <td>Jl. Raya No. 1</td>
                                <td class="text-center">08123456789</td>
                                <td class="text-end">Jakarta</td>
                                <td class="text-end">DKI Jakarta</td>
                                <td class="text-center">
                                    <div class="d-flex gap-2 justify-content-center">
                                        <a href="/suplier.edit" class="btn btn-sm btn-primary">
                                            <i class="bx bx-edit-alt"></i>
                                        </a>
                                        <a href="" class="btn btn-sm btn-danger" 
                                           onclick="return confirm('Are you sure?')">
                                            <i class="bx bx-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>SU002</td>
                                <td>CV. Maju Jaya</td>
                                <td>Jl. Melati No. 5</td>
                                <td class="text-center">082233445566</td>
                                <td class="text-end">Bandung</td>
                                <td class="text-end">Jawa Barat</td>
                                <td class="text-center">
                                    <div class="d-flex gap-2 justify-content-center">
                                        <a href="/suplier.edit" class="btn btn-sm btn-primary">
                                            <i class="bx bx-edit-alt"></i>
                                        </a>
                                        <a href="" class="btn btn-sm btn-danger" 
                                           onclick="return confirm('Are you sure?')">
                                            <i class="bx bx-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>SU003</td>
                                <td>UD. Sejahtera</td>
                                <td>Jl. Kenanga No. 10</td>
                                <td class="text-center">085677889900</td>
                                <td class="text-end">Surabaya</td>
                                <td class="text-end">Jawa Timur</td>
                                <td class="text-center">
                                    <div class="d-flex gap-2 justify-content-center">
                                        <a href="/suplier.edit" class="btn btn-sm btn-primary">
                                            <i class="bx bx-edit-alt"></i>
                                        </a>
                                        <a href="" class="btn btn-sm btn-danger" 
                                           onclick="return confirm('Are you sure?')">
                                            <i class="bx bx-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>
