@extends('AdminLTE.template')

@section('title', 'Ubah Kategori')

@section('content') <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6"></div>
            <!-- /.col -->
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        @if ($message = Session::get('warning'))
        <div class="alert alert-warning">
            <p>{{ $message }}</p>
        </div>
        @endif
        <!-- /.row -->
        <!-- /.Content -->
        <div class="">
            <h1 class="m-0">Ubah Produk</h1>
            <h6 class="text-muted">Tanggal Pembuatan: {{ $kategori->created_at->format('M/d/Y - H:i') }} WIB</h6>
            <h6 class="text-muted">Terakhir perubahan: {{ $kategori->updated_at->format('M/d/Y - H:i') }} WIB</h6>
            <a class="btn btn-secondary mt-1 mb-2" href="{{ route ('kategori.index') }}">←Kembali</a>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route ('kategori.update', $kategori->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="namaKategori">Nama Produk</label>
                            <input type="text" class="form-control @error('namaKategori') is-invalid @enderror"
                                name="namaKategori" id="namaKategori"
                                value="{{old('namaKategori', $kategori->namaKategori)}}"
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
                                name="hargaKategori" id="hargaKategori"
                                value="{{old('hargaKategori', $kategori->hargaKategori)}}"
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
                            placeholder="masukkan deskripsi">{{old('deskripsiKategori', $kategori->deskripsiKategori)}}</textarea>
                        @error('deskripsiKategori')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Gambar Produk</label>
                        <br>
                        <div class="row">

                            <div class="col-5">
                                <img src="{{ asset ('gambar-kategori/' . $kategori->gambarKategori ) }}"
                                    class="card-img-top mb-2 img-fluid" alt="...">
                            </div>

                            <div class="col-1">
                                <label for="" class="form-label">To :</label>
                            </div>

                            <div class="col-5">

                                <img class="card-img-top img-preview img-fluid mb-2">
                            </div>
                        </div>


                        <input class="form-control @error('gambarKategori') is-invalid @enderror" name="gambarKategori"
                            type="file" id="gambarKategori" onchange="previewImage()">
                        @error('gambarKategori')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <input type="hidden" name="oldGambar" value="{{ ( $kategori->gambarKategori ) }}"
                        @error('gambarKategori') is-invalid @enderror>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>
        </div>
        <!-- / End Content -->
    </div>
    <!-- /.container-fluid -->
</div>
@endSection()
