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
            <h1 class="m-0">Ubah Pelanggan</h1>
            <a class="btn btn-secondary mt-1 mb-2" href="{{ route ('pelanggan.index') }}">←Kembali</a>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route ('pelanggan.update', $pelanggan->id) }}">
                    @csrf
                    @method('put')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="namaPelanggan">Nama</label>
                            <input type="text" class="form-control  @error('namaPelanggan') is-invalid @enderror" name="namaPelanggan" id="namaPelanggan"
                                value="{{old('namaPelanggan', $pelanggan->namaPelanggan)}}"
                                placeholder="masukkan nama kamu">
                            @error('namaPelanggan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nbiPelanggan">Nomor Telepon</label>
                            <input type="text" class="form-control  @error('nbiPelanggan') is-invalid @enderror" name="nbiPelanggan" id="nbiPelanggan"
                                value="{{old('nbiPelanggan', $pelanggan->nbiPelanggan) }}"
                                placeholder="masukkan nbi kamu">
                            @error('nbiPelanggan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="alamatPelanggan" class="form-label">Alamat</label>
                        <textarea class="form-control @error('alamatPelanggan') is-invalid
                        @enderror" name="alamatPelanggan" id="alamatPelanggan" rows="3"
                            placeholder="masukkan alamat kamu" >{{old('alamatPelanggan', $pelanggan->alamatPelanggan)}}</textarea>
                        @error('alamatPelanggan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>
        </div>
        <!-- / End Content -->
    </div>
    <!-- /.container-fluid -->
</div>


@endSection()
