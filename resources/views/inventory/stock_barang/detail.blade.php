@extends('inventory.layouts.main')

@section('content')
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-12 m-auto">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Info lengkap Stock Barang RSIA Puri Bunda Denpasar</h6>
                    <table class="table text-start table-hover mb-0">
                     <tr>
                       <th class="d-flex justify-content-between">Tanggal Terima <span>:</span></th>
                       <td>{{ $stockbarang->tanggal_terima }}</td>
                     </tr>
                     <tr>
                       <th class="d-flex justify-content-between">Nama Perangkat <span>:</span></th>
                       <td>{{ $stockbarang->nama_barang }}</td>
                     </tr>
                     <tr>
                       <th class="d-flex justify-content-between">Kode Perangkat <span>:</span></th>
                       <td>{{ $stockbarang->kode_barang }}</td>
                     </tr>
                     <tr>
                        <th class="d-flex justify-content-between">IP Sistem <span>:</span></th>
                        <td>{{ $stockbarang->ip_sistem }}</td>
                     </tr>
                     <tr>
                        <th class="d-flex justify-content-between">Spesifikasi <span>:</span></th>
                        <td>{{ $stockbarang->spesifikasi }}</td>
                     </tr>
                     <tr>
                        <th class="d-flex justify-content-between">Vendor <span>:</span></th>
                        <td>{{ $stockbarang->vendor }}</td>
                     </tr>
                     <tr>
                       <th class="d-flex justify-content-between">Password Teamviewer <span>:</span></th>
                       <td>{{ $stockbarang->password_teamviewer }}</td>
                     </tr>
                     <tr>
                       <th class="d-flex justify-content-between">Password Anydesk <span>:</span></th>
                       <td>{{ $stockbarang->password_anydesk }}</td>
                     </tr>
                   </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->

@endsection