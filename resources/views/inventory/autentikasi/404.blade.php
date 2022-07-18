@extends('inventory.layouts.main')

@section('content')
   <!-- 404 Start -->
   <div class="container-fluid px-4">
      <div class="row bg-light rounded align-items-center justify-content-center mx-0">
         <div class="col-md-6 text-center p-4">
               <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
               <h1 class="display-1 fw-bold">404</h1>
               <h1 class="mb-4">Page Not Found</h1>
               <p class="mb-4">Maaf, halaman yang Anda cari tidak ada! <br>
                  Mungkin anda bisa pergi ke Home atau mencoba untuk mencari halaman menggunakan menu bar disamping.</p>
               <a class="btn btn-primary rounded-pill py-3 px-5" href="index.html">Go Back To Home</a>
         </div>
      </div>
   </div>
   <!-- 404 End -->
@endsection
