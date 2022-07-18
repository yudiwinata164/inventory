@extends('inventory.layouts.main')

@section('content')
    
    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light px-4"><marquee class="py-2">Selamat datang di aplikasi pendataan barang Puri Bunda</marquee></div>
        <div class="row g-5 justify-content-between mt-1">
            <div class="col-sm-6 col-xl-4">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    {{-- <i class="bi bi-display fa-3x text-primary"></i> --}}
                    <span class="material-symbols-rounded fa-3x text-primary ">inventory</span>
                    <div class="ms-3">
                        <p class="mb-2">Data Barang Terpakai</p>
                        <h6 class="mb-0">{{ $databarang }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    {{-- <i class="bi bi-hammer fa-3x text-primary"></i> --}}
                    <span class="material-symbols-rounded fa-3x text-primary ">settings</span>
                    <div class="ms-3">
                        <p class="mb-2">Maintenance</p>
                        <h6 class="mb-0">{{ $maintenance }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    {{-- <i class="bi bi-box-seam fa-3x text-primary"></i> --}}
                    <span class="material-symbols-rounded fa-3x text-primary ">inventory_2</span>
                    <div class="ms-3">
                        <p class="mb-2">Stock Barang</p>
                        <h6 class="mb-0">{{ $stockbarang }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->

    

@endsection