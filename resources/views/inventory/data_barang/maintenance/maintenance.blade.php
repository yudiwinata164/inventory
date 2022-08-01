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
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Data Maintenance dari {{ $databarang->nama_barang }}</h6>
                <a href="{{ route("maintenance.create", ["id" => $databarang->id]) }}" class="btn btn-outline-primary">Tambah Data</a>
            </div>
            <div class="table-responsive">
                <table id="tabel" class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col" class="text-nowrap">No</th>
                            <th scope="col" class="text-nowrap">Tanggal</th>
                            <th scope="col" class="text-nowrap">Jenis Maintenance</th>
                            <th scope="col" class="text-nowrap">PIC</th>
                            <th scope="col" class="text-nowrap">User</th>
                            <th scope="col" class="text-nowrap">Unit</th>
                            <th scope="col" class="text-nowrap">Service</th>
                            <th scope="col" class="text-nowrap">Estimasi</th>
                            <th scope="col" class="text-nowrap">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($databarang->maintenance as $item)
                        <tr>
                            <td class="text-nowrap">{{ $loop->iteration }}</td>
                            <td class="text-nowrap">{{ $item->tanggal }}</td>
                            <td class="text-nowrap">{{ $item->jenis_maintenance }}</td>
                            <td class="text-nowrap">{{ $item->pic }}</td>
                            <td class="text-nowrap">{{ $item->user }}</td>
                            <td class="text-nowrap">{{ $item->unit }}</td>
                            <td class="text-nowrap">{{ $item->service }}</td>
                            <td class="text-nowrap">{{ $item->estimasi }}</td>
                            <td class="d-flex gap-2">
                                <a href="{{ route("maintenance.edit", ["id" => $databarang->id, "maintenance" => $item->id]) }}" class="btn btn-warning">Ubah</a>
                                <form action="{{ route("maintenance.destroy", ["id" => $databarang->id, "maintenance" => $item->id]) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->

@endsection