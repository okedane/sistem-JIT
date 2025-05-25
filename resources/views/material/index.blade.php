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
                    <a href="{{ route('bahanBaku.create') }}" class="btn btn-primary px-3">
                        <i class="bx bx-plus me-1"></i>Tambah Bahan Baku
                    </a>

                </div>
            </div>

            <div class="card-body" enctype="multipart/form-data">
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
                            @foreach ($bahanBakus as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $item->id_bahan_baku }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->jenis }}</td>
                                    <td class="text-center">{{ $item->satuan }}</td>
                                    <td class="text-end">{{ $item->stok }}</td>
                                    <td class="text-end">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                    <td class="text-center">
                                        @if ($item->gambar)
                                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar Bahan Baku" class="img-fluid" style="max-width: 100px; max-height: 100px;" onerror="this.style.display='none'; this.insertAdjacentHTML('afterend', '<span class=\'text-muted\'>Tidak ada</span>');">
                                        @else
                                            <span class="text-muted">Tidak ada</span>
                                        @endif
                                    </td>

                                    <td class="text-center">
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="{{ route('bahanBaku.edit', $item->id) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="bx bx-edit-alt"></i>
                                            </a>
                                            <form action="{{ route('bahanBaku.destroy', $item->id) }}" method="POST"
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
