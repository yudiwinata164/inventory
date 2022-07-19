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
                     <div class="col-md-6">
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
                           <label for="user_awal" class="form-label">User Awal</label>
                           <input type="text" class="form-control @error('user_awal') is-invalid @enderror" name="user_awal" id="user_awal" value="{{ old('user_awal', @$maintenance->user_awal) }}">
                           @error('user_awal')
                           <div class="invalid-feedback">
                                 {{ $message }}
                           </div>
                           @enderror
                        </div>
                        <div class="mb-3">
                           <label for="posisi_awal" class="form-label">Posisi Awal</label>
                           <input type="text" class="form-control @error('posisi_awal') is-invalid @enderror" name="posisi_awal" value="{{ old('posisi_awal', @$maintenance->posisi_awal) }}" id="posisi_awal">
                           @error('posisi_awal')
                           <div class="invalid-feedback">
                                 {{ $message }}
                           </div>
                           @enderror
                        </div>
                        <div class="mb-3">
                           <label for="lantai" class="form-label">Lantai</label>
                           <input type="text" class="form-control @error('lantai') is-invalid @enderror" name="lantai" value="{{ old('lantai', @$maintenance->lantai) }}" id="lantai">
                           @error('lantai')
                           <div class="invalid-feedback">
                                 {{ $message }}
                           </div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mb-3">
                           <label for="ram" class="form-label">RAM</label>
                           <input type="text" class="form-control @error('ram') is-invalid @enderror" name="ram" value="{{ old('ram', @$maintenance->ram) }}" id="ram">
                           @error('ram')
                           <div class="invalid-feedback">
                                 {{ $message }}
                           </div>
                           @enderror
                        </div>
                        <div class="mb-3">
                           <label for="prosesor" class="form-label">Prosesor</label>
                           <input type="text" class="form-control @error('prosesor') is-invalid @enderror" name="prosesor" value="{{ old('prosesor', @$maintenance->prosesor) }}" id="prosesor">
                           @error('prosesor')
                           <div class="invalid-feedback">
                                 {{ $message }}
                           </div>
                           @enderror
                        </div>  
                        <div class="mb-3">
                           <label for="kondisi" class="form-label">Kondisi</label>
                           <input type="text" class="form-control @error('kondisi') is-invalid @enderror" name="kondisi" value="{{ old('kondisi', @$maintenance->kondisi) }}" id="kondisi">
                           @error('kondisi')
                           <div class="invalid-feedback">
                                 {{ $message }}
                           </div>
                           @enderror
                        </div>
                        <div class="mb-3">
                           <label for="pic" class="form-label">PIC</label>
                           <input type="text" class="form-control @error('pic') is-invalid @enderror" name="pic" value="{{ old('pic', @$maintenance->pic) }}" id="pic">
                           @error('pic')
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