@extends('layouts.master')



@section('content')

<div class="container mt-2 shadow mt-5">

    <div class="card mb-3">
        <img src="{{ asset ('gambar-kategori/' . $kategori->gambarKategori) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h4 class="card-title float-right">Rp{{ number_format($kategori->hargaKategori, 0, ',', '.') }}</h4>
            <h5 class="card-title">{{ $kategori->namaKategori }}</h5>

            <p class="card-text text-muted">Deskripsi: {{ $kategori->deskripsiKategori }}</p>


            <hr>

            <form method="post" action="{{ route('detail.store') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="namaPelanggan">Nama</label>
                        <input type="text"
                            class="form-control @error('namaPelanggan') is-invalid @enderror"
                            name="namaPelanggan" id="namaPelanggan" value="{{old('namaPelanggan')}}"
                            placeholder="masukkan nama kamu">
                        @error('namaPelanggan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nbiPelanggan">No Wa. Aktif</label>
                        <input type="text" class="form-control @error('nbiPelanggan') is-invalid @enderror"
                            name="nbiPelanggan" id="nbiPelanggan" value="{{old('nbiPelanggan')}}"
                            placeholder="masukkan nomor kamu">
                        @error('nbiPelanggan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="alamatPelanggan" class="form-label">Alamat</label>
                    <textarea class="form-control @error('alamatPelanggan') is-invalid @enderror" name="alamatPelanggan"
                        id="alamatPelanggan" rows="3"
                        placeholder="masukkan alamat kamu">{{old('alamatPelanggan')}}</textarea>
                    @error('alamatPelanggan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="kuantitas">Kuantitas</label>
                    <input type="text" class="form-control @error('kuantitas') is-invalid @enderror" name="kuantitas"
                        id="kuantitas" value="{{old('kuantitas')}}" placeholder="mau beli berapa?">
                    @error('kuantitas')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <input type="hidden" value="{{ $kategori->id }}" name="idKategori">

                <input type="hidden" value="{{ $kategori->hargaKategori }}" name="hargaKategori">


                <a class="btn btn-secondary mt-1 mb-2" href="/profile">Kembali</a>
                <button type="submit" class="btn btn-info float-right mb-5">Pesan</button>
            </form>
        </div>
    </div>
    <br>
</div>

@endSection
