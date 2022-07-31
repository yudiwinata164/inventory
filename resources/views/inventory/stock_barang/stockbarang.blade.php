@extends('inventory.layouts.main')

@section('content')
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        @if (session()->has('sukses'))
        {{-- Alert Sukses --}}
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i>{{ session('sukses') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="bg-light rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Stock Barang RSIA Puri Bunda Denpasar</h6>
                <a href="{{ route("stockbarang.create") }}" class="btn btn-outline-primary text-nowrap d-flex align-items-center gap-2"><span class="material-symbols-rounded">add_circle</span>Tambah Data</a>
            </div>
            <div class="table-responsive">
                <table id="tabel" class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark text-nowrap text-center">
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Kategori Barang</th>
                            <th scope="col">Seri Perangkat</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($stockbarang as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_barang }}</td>
                            <td>{{ $item->kategori }}</td>
                            <td>{{ $item->seri_perangkat }}</td>
                            <td>
                                <div class="row g-2">
                                    <div class="col mb-2 mb-lg-0"><a href="{{ route("stockbarang.detail", [ "stockbarang" => $item->id ]) }}" class="btn btn-primary w-100 d-flex align-items-center gap-2"><span class="material-symbols-rounded">info</span>Detail</a></div>
                                    <div class="col mb-2 mb-lg-0"><a href="{{ route("stockbarang.edit",  $item->id) }}" class="btn btn-warning w-100 d-flex align-items-center gap-2"><span class="material-symbols-rounded">drive_file_rename_outline</span>Ubah</a></div>
                                    <form action="{{ route("stockbarang.destroy", $item->id) }}" method="POST"  class="col w-fit">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger w-100 d-flex align-items-center gap-2"><span class="material-symbols-rounded">delete</span>Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
    <!-- Recent Sales End -->

@endsection