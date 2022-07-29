@extends('inventory.layouts.main')

@section('content')
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-12 col-xl-10 m-auto">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Form {{ $title }}</h6>
                    <form method="POST" action="{{ ($title == "Edit Stock Barang") ? route("stockbarang.update", ["stockbarang" => $stockbarang->id]) : route("stockbarang.store") }}">
                        @csrf
                        @if ($title == "Edit Stock Barang")
                            @method("PUT")
                        @else
                            @method("POST")
                        @endif
                        <div class="row mb-4">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="nama_barang" class="form-label">Nama Barang</label>
                                    <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" id="nama_barang" value="{{ old('nama_barang', @$stockbarang->nama_barang) }}">
                                    @error('nama_barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Kategori Barang</label>
                                    <select class="form-select mb-3 @error('kategori') is-invalid @enderror" id="kategori" aria-label="Default select example" name="kategori">
                                        <option selected disabled value="">Pilih Kategori</option>
                                        @foreach ($kategoribarang as $k_item)
                                            @if (old('kategori', @$stockbarang->kategori) == $k_item->nama_kategori)
                                                <option selected value="{{ $k_item->nama_kategori }}">{{ $k_item->nama_kategori }}</option>
                                            @else
                                                <option value="{{ $k_item->nama_kategori }}">{{ $k_item->nama_kategori }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('kategori')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="seri_perangkat" class="form-label">Seri Perangkat</label>
                                    <input type="text" class="form-control @error('seri_perangkat') is-invalid @enderror" name="seri_perangkat" value="{{ old('seri_perangkat', @$stockbarang->seri_perangkat) }}" id="seri_perangkat">
                                    @error('seri_perangkat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="ram" class="form-label">RAM</label>
                                    <input type="text" class="form-control @error('ram') is-invalid @enderror" name="ram" value="{{ old('ram', @$stockbarang->ram) }}" id="ram">
                                    @error('ram')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="prosesor" class="form-label">Prosesor</label>
                                    <input type="text" class="form-control @error('prosesor') is-invalid @enderror" name="prosesor" value="{{ old('prosesor', @$stockbarang->prosesor) }}" id="prosesor">
                                    @error('prosesor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_terima" class="form-label">Tanggal Terima</label>
                                    <input type="date" class="form-control @error('tanggal_terima') is-invalid @enderror" name="tanggal_terima" value="{{ old('tanggal_terima', @$stockbarang->tanggal_terima) }}" id="tanggal_terima">
                                    @error('tanggal_terima')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row gap-4 justify-content-between">
                            <a href="{{ route("stockbarang.index") }}" class="btn btn-danger col-4">kembali</a>
                            <button type="submit" class="btn btn-primary col-4">{{ $text }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->

@endsection