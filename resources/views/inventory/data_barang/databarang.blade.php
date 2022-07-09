@extends('inventory/layouts/sidebar')

@section('content')
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Data Barang IT RSIA Puri Bunda Denpasar</h6>
                <a href="/databarang/create" class="btn btn-success">Tambah Data</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Detail Barang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Laptop1</td>
                            <td>111.111.111</td>
                            <td>Mezzanin</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailBarang">Detail</button>
                                <button type="button" class="btn btn-warning">Ubah</button>
                                <button type="button" onclick="return " class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Modal -->
                <div class="modal fade" id="detailBarang" tabindex="-1" aria-labelledby="detailBarangLabel" aria-hidden="true">
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
    </div>
    <!-- Recent Sales End -->

    <!-- Footer Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded-top p-4">
            <div class="row">
                <div class="col-12 col-sm-6 text-center text-sm-start">
                    <footer class="blockquote-footer mt-2">&copy; 2022 All Rights Reserved by Puri Bunda - Y&G</footer>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Footer End -->

@endsection