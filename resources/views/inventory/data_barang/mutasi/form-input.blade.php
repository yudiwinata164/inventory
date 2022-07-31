@extends('inventory.layouts.main')

@section('content')
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-12 col-xl-10 m-auto">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Form {{ $title }}</h6>
                    <form method="POST" action="{{ ($title == "Edit Mutasi") ? route("mutasi.update", ["id" => $databarang->id, "mutasi" => $mutasi->id]) : route("mutasi.store", $databarang->id) }}">
                        @csrf
                        @if ($title == "Edit Mutasi")
                            @method("PUT")
                        @else
                            @method("POST")
                        @endif
                        <div class="row mb-4">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="tanggal_mutasi" class="form-label">Tanggal Mutasi</label>
                                    <input type="date" class="form-control @error('tanggal_mutasi') is-invalid @enderror" name="tanggal_mutasi" value="{{ old('tanggal_mutasi', @$mutasi->tanggal_mutasi) }}" id="tanggal_mutasi">
                                    @error('tanggal_mutasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="nama_unit" class="form-label">Nama Unit</label>
                                    <input type="text" class="form-control @error('nama_unit') is-invalid @enderror" name="nama_unit" id="nama_unit" value="{{ old('nama_unit', @$mutasi->nama_unit) }}">
                                    @error('nama_unit')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="nama_user" class="form-label">Nama User</label>
                                    <input type="text" class="form-control @error('nama_user') is-invalid @enderror" name="nama_user" value="{{ old('nama_user', @$mutasi->nama_user) }}" id="nama_user">
                                    @error('nama_user')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="pic" class="form-label">PIC</label>
                                    <input type="text" class="form-control @error('pic') is-invalid @enderror" name="pic" value="{{ old('pic', @$mutasi->pic) }}" id="pic">
                                    @error('pic')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row gap-4 justify-content-between">
                            <a href="{{ route("databarang.index") }}" class="btn btn-danger col-4">kembali</a>
                            <button type="submit" class="btn btn-primary col-4">{{ $text }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->

@endsection