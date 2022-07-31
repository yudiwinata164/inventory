@extends('inventory.layouts.main')

@section('content')
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-12 m-auto">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Info lengkap Data Barang RSIA Puri Bunda Denpasar</h6>
                    <table class="table text-start table-hover mb-0">
                      <tr>
                        <th class="d-flex justify-content-between">Kode Barang <span>:</span></th>
                        <td>{{ @$databarang->kode_barang }}</td>
                      </tr>
                     <tr>
                       <th class="d-flex justify-content-between">Nama Barang <span>:</span></th>
                       <td>{{ @$databarang->nama_barang }}</td>
                     </tr>
                     <tr>
                       <th class="d-flex justify-content-between">Kategori<span>:</span></th>
                       <td>{{ @$databarang->kategori }}</td>
                     </tr>
                     <tr>
                       <th class="d-flex justify-content-between">Seri Perangkat <span>:</span></th>
                       <td>{{ @$databarang->seri_perangkat }}</td>
                     </tr>
                     <tr>
                       <th class="d-flex justify-content-between">Serial Number <span>:</span></th>
                       <td>{{ @$databarang->serial_number }}</td>
                     </tr>
                     <tr>
                        <th class="d-flex justify-content-between">Nama Unit <span>:</span></th>
                        <td>{{ @$mutasi->nama_unit }}</td>
                     </tr>
                     <tr>
                        <th class="d-flex justify-content-between">Nama User <span>:</span></th>
                        <td>{{ @$mutasi->nama_user }}</td>
                     </tr>
                     <tr>
                        <th class="d-flex justify-content-between">Prosesor <span>:</span></th>
                        <td>{{ @$databarang->prosesor }}</td>
                     </tr>
                     <tr>
                        <th class="d-flex justify-content-between">RAM <span>:</span></th>
                        <td>{{ @$databarang->ram }}</td>
                     </tr>
                     <tr>
                       <th class="d-flex justify-content-between">Password Teamviewer <span>:</span></th>
                       <td>{{ @$databarang->password_teamviewer }}</td>
                     </tr>
                     <tr>
                       <th class="d-flex justify-content-between">Password Anydesk <span>:</span></th>
                       <td>{{ @$databarang->password_anydesk }}</td>
                     </tr>
                     <tr>
                      <th class="d-flex justify-content-between">Tanggal Terima <span>:</span></th>
                      <td>{{ @$databarang->tanggal_terima }}</td>
                    </tr>
                     <tr>
                      <th class="d-flex justify-content-between">Tanggal Distribusi <span>:</span></th>
                      <td>{{ @$databarang->tanggal_terima }}</td>
                    </tr>
                     <tr>
                      <th class="d-flex justify-content-between">Tanggal & Waktu Pencatatan <span>:</span></th>
                      <td>{{ @$databarang->created_at }}</td>
                    </tr>
                   </table>
                </div>
            </div>
            <div class="col-12 mt-3 d-flex justify-content-between gap-3">
              <div><a href="{{ route("databarang.index") }}" class="btn btn-danger w-100 d-flex align-items-center gap-2">Kembali</a></div>
              <div class="d-flex gap-3">
                <a href="{{ route("mutasi.index", $databarang->id) }}" class="btn btn-dark w-100 d-flex align-items-center gap-2"><span class="material-symbols-rounded">inventory</span>Mutasi</a>
                <a href="{{ route("maintenance.index", $databarang->id) }}" class="btn btn-warning w-100 d-flex align-items-center gap-2"><span class="material-symbols-rounded">settings</span>Maintenance</a>
              </div>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->

@endsection