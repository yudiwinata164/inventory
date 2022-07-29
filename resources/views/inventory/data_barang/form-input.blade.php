@extends('inventory.layouts.main')

@section('content')
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-12 col-xl-10 m-auto">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Form {{ $title }}</h6>
                    <form method="POST" action="{{ ($title == "Edit Stock Barang") ? route("databarang.update", ["databarang" => $databarang->id]) : route("databarang.store") }}">
                        @csrf
                        @if ($title == "Edit Stock Barang")
                            @method("PUT")
                        @else
                            @method("POST")
                        @endif
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="kode_barang" class="form-label">Kode Barang</label>
                                    <input type="text" class="form-control @error('kode_barang') is-invalid @enderror" name="kode_barang" value="{{ old('kode_barang', @$databarang->kode_barang) }}" id="kode_barang">
                                    @error('kode_barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="nama_barang" class="form-label">Nama Barang</label>
                                    <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" id="nama_barang" value="{{ old('nama_barang', @$databarang->nama_barang) }}">
                                    @error('nama_barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Kategori Barang</label>
                                    <select class="form-select mb-3" id="kategori" aria-label="Default select example" name="kategori">
                                        <option selected disabled>Pilih Kategori</option>
                                        <option value="CPU">CPU</option>
                                        <option value="Monitor">Monitor</option>
                                        <option value="AIO">AIO</option>
                                        <option value="Laptop">Laptop</option>
                                        <option value="Printer">Printer</option>
                                        <option value="Periferal">Periferal</option>
                                    </select>
                                    @error('kategori')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="seri_perangkat" class="form-label">Seri Perangkat</label>
                                    <input type="text" class="form-control @error('seri_perangkat') is-invalid @enderror" name="seri_perangkat" value="{{ old('seri_perangkat', @$databarang->seri_perangkat) }}" id="seri_perangkat">
                                    @error('seri_perangkat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="serial_number" class="form-label">Serial Number</label>
                                    <input type="text" class="form-control @error('serial_number') is-invalid @enderror" name="serial_number" value="{{ old('serial_number', @$databarang->serial_number) }}" id="serial_number">
                                    @error('serial_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="ip_sistem" class="form-label">IP Sistem</label>
                                    <input type="text" class="form-control @error('ip_sistem') is-invalid @enderror" name="ip_sistem" value="{{ old('ip_sistem', @$databarang->ip_sistem) }}" id="ip_sistem">
                                    @error('ip_sistem')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="vendor" class="form-label">Vendor</label>
                                    <input type="text" class="form-control @error('vendor') is-invalid @enderror" name="vendor" value="{{ old('vendor', @$databarang->vendor) }}" id="vendor">
                                    @error('vendor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">  
                                <div class="mb-3">
                                    <label for="nama_unit" class="form-label">Nama Unit</label>
                                    <input type="text" class="form-control @error('nama_unit') is-invalid @enderror" name="nama_unit" value="{{ old('nama_unit', @$databarang->nama_unit) }}" id="nama_unit">
                                    @error('nama_unit')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="nama_user" class="form-label">Nama User</label>
                                    <input type="text" class="form-control @error('nama_user') is-invalid @enderror" name="nama_user" value="{{ old('nama_user', @$databarang->nama_user) }}" id="nama_user">
                                    @error('nama_user')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password_teamviewer" class="form-label">Password Teamviewer</label>
                                    <input type="text" class="form-control @error('password_teamviewer') is-invalid @enderror" name="password_teamviewer" value="{{ old('password_teamviewer', @$databarang->password_teamviewer) }}" id="password_teamviewer">
                                    @error('password_teamviewer')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password_anydesk" class="form-label">Password Anydesk</label>
                                    <input type="text" class="form-control @error('password_anydesk') is-invalid @enderror" name="password_anydesk" value="{{ old('password_anydesk', @$databarang->password_anydesk) }}" id="password_anydesk">
                                    @error('password_anydesk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_terima" class="form-label">Tanggal Terima</label>
                                    <input type="date" class="form-control @error('tanggal_terima') is-invalid @enderror" name="tanggal_terima" value="{{ old('tanggal_terima', @$databarang->tanggal_terima) }}" id="tanggal_terima">
                                    @error('tanggal_terima')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_distribusi" class="form-label">Tanggal Distribusi</label>
                                    <input type="date" class="form-control @error('tanggal_distribusi') is-invalid @enderror" name="tanggal_distribusi" value="{{ old('tanggal_distribusi', @$databarang->tanggal_distribusi) }}" id="tanggal_distribusi">
                                    @error('tanggal_distribusi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-CPU2 mb-2">
                                <h5>Spesifikasi</h1>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="mb-3">
                                    <label for="prosesor" class="form-label">Prosesor</label>
                                    <input type="text" class="form-control @error('prosesor') is-invalid @enderror" name="prosesor" value="{{ old('prosesor', @$databarang->prosesor) }}" id="prosesor">
                                    @error('prosesor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="mb-3">
                                    <label for="ram" class="form-label">RAM</label>
                                    <input type="text" class="form-control @error('ram') is-invalid @enderror" name="ram" value="{{ old('ram', @$databarang->ram) }}" id="ram">
                                    @error('ram')
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