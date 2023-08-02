@extends('AdminLTE.template')

@section('title', 'Tambah Kategori')

@section('content') <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6"></div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- /.Content -->
        <div class="">
            <h1 class="m-0">Tambah Produk</h1>
            <a class="btn btn-secondary mt-1 mb-2" href="{{ route ('kategori.index') }}">←Kembali</a>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route ('kategori.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="namaKategori">Nama Produk</label>
                            <input type="text" class="form-control @error('namaKategori') is-invalid @enderror"
                                name="namaKategori" id="namaKategori" value="{{old('namaKategori')}}" autofocus
                                placeholder="masukkan nama kategori">
                            @error('namaKategori')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="hargaKategori">Harga (Rp)</label>
                            <input type="text" class="form-control @error('hargaKategori') is-invalid @enderror"
                                name="hargaKategori" id="hargaKategori" value="{{old('hargaKategori')}}"
                                placeholder="masukkan harga kategori">
                            @error('hargaKategori')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsiKategori" class="form-label">Deskripsi</label>
                        <textarea class="form-control @error('deskripsiKategori') is-invalid @enderror"
                            name="deskripsiKategori" id="deskripsiKategori" rows="3"
                            placeholder="masukkan deskripsi">{{old('deskripsiKategori')}}</textarea>
                        @error('deskripsiKategori')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Gambar Produk</label>
                        <img class="img-preview img-fluid mb-2 col-sm-5">
                        <input class="form-control @error('gambarKategori') is-invalid @enderror" name="gambarKategori"
                            type="file" id="gambarKategori" onchange="previewImage()">
                        @error('gambarKategori')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
        </div>
        <!-- / End Content -->
    </div>
    <!-- /.container-fluid -->
</div>


@endSection()
