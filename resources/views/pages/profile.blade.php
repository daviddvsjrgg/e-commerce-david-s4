@extends('layouts.master')
@section('title', "Profile")
@section('content')

<div class="m-5">
    <div class="row">
        {!! $datas->links('pagination::bootstrap-5') !!}
        @foreach ($datas as $data)
        <div class="col-sm-3 mt-2">
            <div class="card m-3 shadow-lg" style="max-width: 25rem;">
                <img src="{{ asset ('gambar-kategori/' . $data->gambarKategori ) }}"
                    class="card-img-top img-fluid  rounded" style="max-height: 150px;" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $data->namaKategori }}</h5>
                    <p class="card-text">{{ $data->deskripsiKategori }}</p>
                    <h5 class="card-text font-weight-light float-left">Rp{{ number_format($data->hargaKategori, 0, ',', '.') }}</h5>
                    <a href="{{ route('kategori.show', $data->id)}}" class="btn btn-info float-right">Beli</a>
                </div>
            </div>
        </div>
        @endForeach
    </div>
    {!! $datas->links('pagination::bootstrap-5') !!}
</div>

@endSection
