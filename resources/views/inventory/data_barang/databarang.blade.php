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
                <h6 class="mb-0">Data Barang Aktif RSIA Puri Bunda Denpasar</h6>
                <a href="{{ route("databarang.create") }}" class="btn btn-outline-primary text-nowrap d-flex align-items-center gap-2"><span class="material-symbols-rounded">add_circle</span>Tambah Data</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark text-center text-nowrap">
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Jumlah Maintenance</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($databarang as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="text-start">{{ $item->nama_barang }}</td>
                            <td>{{ $item->kode_barang }}</td>
                            <td>{{ $item->maintenance->count() }}</td>
                            <td>
                                <div class="row g-2">
                                    <div class="col"><a href="{{ route("databarang.detail", $item->id) }}" class="btn btn-primary w-100 d-flex align-items-center gap-2"><span class="material-symbols-rounded">info</span>Detail</a></div>
                                    <div class="col"><a href="{{ route("maintenance.index", $item->id) }}" class="btn btn-warning w-100 d-flex align-items-center gap-2"><span class="material-symbols-rounded">settings</span>Maintenance</a></div>
                                    <form action="{{ route("databarang.destroy", $item->id) }}" method="POST"  class="col w-fit">
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

                <!-- Modal -->
                {{-- <div class="modal fade" id="detailBarang" tabindex="-1" aria-labelledby="detailBarangLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="detailBarangLabel">Detail Barang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                         <table class="table text-start align-middle table-borderless table-hover mb-0">
                            <tbody>
                                    <th>Nama Barang</th>
                                    <td>:</td>
                                    <td>Laptop 1</td>
                            </tbody>

                            <tbody>
                                <th>Kode</th>
                                <td>:</td>
                                <td></td>
                            </tbody>

                            <tbody>
                                <th>User Awal</th>
                                <td>:</td>
                                <td>Vaksinasi</td>
                            </tbody>

                            <tbody>
                                <th>Posisi Awal</th>
                                <td>:</td>
                                <td>Mezzanin</td>
                            </tbody>

                            <tbody>
                                <th>Posisi Saat Ini</th>
                                <td>:</td>
                                <td>Mezzanin</td>
                            </tbody>

                            <tbody>
                                <th>User Saat Ini</th>
                                <td>:</td>
                                <td>Sri</td>
                            </tbody>

                            <tbody>
                                <th>Type Laptop</th>
                                <td>:</td>
                                <td>Asus</td>
                            </tbody>

                            <tbody>
                                <th>Storage</th>
                                <td>:</td>
                                <td>HDD</td>
                            </tbody>

                            <tbody>
                                <th>RAM</th>
                                <td>:</td>
                                <td>4 GB DDR3</td>
                            </tbody>

                            <tbody>
                                <th>Vendor</th>
                                <td>:</td>
                                <td></td>
                            </tbody>

                            <tbody>
                                <th>Tanggal Terima</th>
                                <td>:</td>
                                <td>Januari 2020</td>
                            </tbody>

                            <tbody>
                                <th>Pendataan</th>
                                <td>:</td>
                                <td></td>
                            </tbody>

                            <tbody>
                                <th>IP</th>
                                <td>:</td>
                                <td>111.111.111</td>
                            </tbody>

                            <tbody>
                                <th>Kondisi</th>
                                <td>:</td>
                                <td></td>
                            </tbody>

                            <tbody>
                                <th>Serah Terima</th>
                                <td>:</td>
                                <td></td>
                            </tbody>

                            <tbody>
                                <th>PIC</th>
                                <td>:</td>
                                <td></td>
                            </tbody>

                            <tbody>
                                <th>Catatan</th>
                                <td>:</td>
                                <td></td>
                            </tbody>
                         </table>
                         <hr>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Ubah</button>
                        
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Recent Sales End -->

@endsection