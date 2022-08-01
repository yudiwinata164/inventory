@extends('inventory.layouts.main')

@section('content')
   <!-- Recent Sales Start -->
   <div class="container-fluid pt-4 px-4">
      <div class="row">
         <div class="col-12 col-xl-10 m-auto">
            <div class="bg-light rounded h-100 p-4">
               <h6 class="mb-4">Form {{ $title }}</h6>
               <form method="POST" action="{{ ($title == "Edit Maintenance") ? route("maintenance.update", [$maintenance->databarang->id, $maintenance->id]) : route("maintenance.store", ["id" => $databarang->id]) }}">
                  @csrf
                  @if ($title == "Edit Maintenance")
                        @method("PUT")
                  @else
                        @method("POST")
                  @endif
                  <div class="row mb-4">
                     <div class="col">
                        <div class="mb-3">
                           <label for="tanggal" class="form-label">Tanggal Maintenance</label>
                           <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal', @$maintenance->tanggal) }}" id="tanggal">
                           @error('tanggal')
                           <div class="invalid-feedback">
                                 {{ $message }}
                           </div>
                           @enderror
                        </div>
                        <div class="mb-3">
                           <label for="jenis_maintenance" class="form-label">Jenis Maintenance</label>
                           <select class="form-select mb-3 @error('jenis_maintenance') is-invalid @enderror" id="jenis_maintenance" aria-label="Default select example" name="jenis_maintenance">
                               <option selected disabled value="">Pilih Jenis Maintenance</option>
                               @foreach ($jenis_maintenance as $jm_item)
                                   @if (old('jenis_maintenance', @$maintenance->jenis_maintenance) == $jm_item->nama_jenis)
                                       <option selected value="{{ $jm_item->nama_jenis }}">{{ $jm_item->nama_jenis }}</option>
                                   @else
                                       <option value="{{ $jm_item->nama_jenis }}">{{ $jm_item->nama_jenis }}</option>
                                   @endif
                               @endforeach
                           </select>
                           @error('jenis_maintenance')
                           <div class="invalid-feedback">
                               {{ $message }}
                           </div>
                           @enderror
                       </div>
                        <div class="mb-3">
                           <label for="pic" class="form-label">PIC</label>
                           <input type="text" class="form-control @error('pic') is-invalid @enderror" name="pic" id="pic" value="{{ old('pic', @$maintenance->pic) }}">
                           @error('pic')
                           <div class="invalid-feedback">
                                 {{ $message }}
                           </div>
                           @enderror
                        </div>
                        <div class="mb-3">
                           <label for="user" class="form-label">User</label>
                           <input type="text" class="form-control @error('user') is-invalid @enderror" name="user" value="{{ old('user', @$maintenance->user) }}" id="user">
                           @error('user')
                           <div class="invalid-feedback">
                                 {{ $message }}
                           </div>
                           @enderror
                        </div>
                        <div class="mb-3">
                           <label for="unit" class="form-label">Unit</label>
                           <input type="text" class="form-control @error('unit') is-invalid @enderror" name="unit" value="{{ old('unit', @$maintenance->unit) }}" id="unit">
                           @error('unit')
                           <div class="invalid-feedback">
                                 {{ $message }}
                           </div>
                           @enderror
                        </div>
                        <div class="mb-3">
                           <label for="service" class="form-label">service</label>
                           <input type="text" class="form-control @error('service') is-invalid @enderror" name="service" value="{{ old('service', @$maintenance->service) }}" id="service">
                           @error('service')
                           <div class="invalid-feedback">
                                 {{ $message }}
                           </div>
                           @enderror
                        </div>
                        <div class="mb-3">
                           <label for="estimasi" class="form-label">Estimasi</label>
                           <input type="date" class="form-control @error('estimasi') is-invalid @enderror" name="estimasi" value="{{ old('estimasi', @$maintenance->estimasi) }}" id="estimasi">
                           @error('estimasi')
                           <div class="invalid-feedback">
                                 {{ $message }}
                           </div>
                           @enderror
                        </div>
                     </div>
                  </div>
                  <div class="row gap-4 justify-content-between">
                     <a href="{{ ($title == "Edit Maintenance") ? route("maintenance.index", ["id" => $maintenance->databarang->id]) : route("maintenance.index", ["id" => $databarang->id]) }}" class="btn btn-danger col-4">kembali</a>
                     <button type="submit" class="btn btn-primary col-4">{{ $text }}</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <!-- Recent Sales End -->

@endsection