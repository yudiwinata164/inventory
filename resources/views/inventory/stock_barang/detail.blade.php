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
                     <th class="d-flex justify-content-between">Nama Barang <span>:</span></th>
                     <td>{{ $stockbarang->nama_barang }}</td>
                  </tr>
                  <tr>
                     <th class="d-flex justify-content-between">Kategori Barang <span>:</span></th>
                     <td>{{ $stockbarang->kategori }}</td>
                  </tr>
                  <tr>
                     <th class="d-flex justify-content-between">Seri Perangkat <span>:</span></th>
                     <td>{{ $stockbarang->seri_perangkat }}</td>
                  </tr>
                  <tr>
                     <th class="d-flex justify-content-between">RAM <span>:</span></th>
                     <td>{{ $stockbarang->ram }}</td>
                  </tr>
                  <tr>
                     <th class="d-flex justify-content-between">Prosesor <span>:</span></th>
                     <td>{{ $stockbarang->prosesor }}</td>
                  </tr>
                  <tr>
                     <th class="d-flex justify-content-between">Tanggal Terima <span>:</span></th>
                     <td>{{ $stockbarang->tanggal_terima }}</td>
                  </tr>
               </table>
               <div class="row mt-3 justify-content-between">
                  <div class="col-6 col-md-4 col-lg-3">
                     <a href="{{ route("stockbarang.index") }}" class="btn btn-danger d-flex align-items-center gap-2 justify-content-center">Kembali</a>
                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                     <a href="#" class="btn btn-dark d-flex align-items-center gap-2 justify-content-center"><span class="material-symbols-rounded">inventory</span>Mutasi</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Recent Sales End -->
@endsection
