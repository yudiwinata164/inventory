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
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">User Awal</th>
                            <th scope="col">Posisi Awal</th>
                            <th scope="col">Lantai</th>
                            <th scope="col">RAM</th>
                            <th scope="col">Prosesor</th>
                            <th scope="col">PIC</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($databarang->maintenance as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->user_awal }}</td>
                            <td>{{ $item->posisi_awal }}</td>
                            <td>{{ $item->lantai }}</td>
                            <td>{{ $item->ram }}</td>
                            <td>{{ $item->prosesor }}</td>
                            <td>{{ $item->kondisi }}</td>
                            <td>{{ $item->pic }}</td>
                            <td>
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