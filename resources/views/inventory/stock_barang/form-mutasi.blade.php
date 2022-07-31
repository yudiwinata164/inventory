@extends('inventory.layouts.main')

@section('content')
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-12 col-xl-10 m-auto">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Form {{ $title }}</h6>
                    <form method="POST" action="{{ route("stockbarang.mutasimove", $stockbarang->id) }}">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="kode_barang" class="form-label">Kode Barang</label>
                                    <input type="text" class="form-control @error('kode_barang') is-invalid @enderror" name="kode_barang" id="kode_barang" value="{{ old('kode_barang') }}">
                                    @error('kode_barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="serial_number" class="form-label">Serial Number</label>
                                    <input type="text" class="form-control @error('serial_number') is-invalid @enderror" name="serial_number" id="serial_number" value="{{ old('serial_number') }}">
                                    @error('serial_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="nama_unit" class="form-label">Nama Unit</label>
                                    <input type="text" class="form-control @error('nama_unit') is-invalid @enderror" name="nama_unit" value="{{ old('nama_unit') }}" id="nama_unit">
                                    @error('nama_unit')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="nama_user" class="form-label">Nama User</label>
                                    <input type="text" class="form-control @error('nama_user') is-invalid @enderror" name="nama_user" value="{{ old('nama_user') }}" id="nama_user">
                                    @error('nama_user')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="password_anydesk" class="form-label">Password Anydesk</label>
                                    <input type="text" class="form-control @error('password_anydesk') is-invalid @enderror" name="password_anydesk" value="{{ old('password_anydesk') }}" id="password_anydesk">
                                    @error('password_anydesk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password_teamviewer" class="form-label">Password Teamviewer</label>
                                    <input type="text" class="form-control @error('password_teamviewer') is-invalid @enderror" name="password_teamviewer" value="{{ old('password_teamviewer') }}" id="password_teamviewer">
                                    @error('password_teamviewer')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="pic" class="form-label">PIC</label>
                                    <input type="text" class="form-control @error('pic') is-invalid @enderror" name="pic" value="{{ old('pic') }}" id="pic">
                                    @error('pic')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_distribusi" class="form-label">Tanggal Distribusi</label>
                                    <input type="date" class="form-control @error('tanggal_distribusi') is-invalid @enderror" name="tanggal_distribusi" value="{{ old('tanggal_distribusi') }}" id="tanggal_distribusi">
                                    @error('tanggal_distribusi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row gap-4 justify-content-between">
                            <a href="{{ route("stockbarang.index") }}" class="btn btn-danger col-4">Kembali</a>
                            <button type="submit" class="btn btn-primary col-4">{{ $text }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->

@endsection