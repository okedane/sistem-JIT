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
                    <a href="{{ route('supplier.create') }}" class="btn btn-primary px-3">
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
                            @foreach ($suppliers as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $item->id_suplier }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->telepon }}</td>
                                    <td>{{ $item->kota }}</td>
                                    <td>{{ $item->provinsi }}</td>
                                    <td class="text-center">
                                         <div class="d-flex gap-2 justify-content-center">
                                            <a href="{{ route('supplier.edit', $item->id) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="bx bx-edit-alt"></i> 
                                            </a>
                                            <form action="{{ route('supplier.destroy', $item->id) }}" method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="bx bx-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>
