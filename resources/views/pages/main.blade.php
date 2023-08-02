@extends('layouts.master')

@section('title', "Home")

@section('content')

<!-- Slide -->

<div class="jumbotron jumbotron-fluid">

    <div class="container">

        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active makan" data-interval="10000">

                    <img src="{{ asset ('img/card1.png') }}" class="d-block w-100" alt="gambar1">

                </div>

                <div class="carousel-item makan" data-interval="2000">

                    <img src="{{ asset ('img/card2.png') }}" class="d-block w-100" alt="gambar2">

                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-target="#carouselExampleInterval"
                data-slide="prev">

                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                <span class="sr-only">Previous</span>

            </button>

            <button class="carousel-control-next" type="button" data-target="#carouselExampleInterval"
                data-slide="next">

                <span class="carousel-control-next-icon" aria-hidden="true"></span>

                <span class="sr-only">Next</span>

            </button>

        </div>

    </div>

</div>

<!-- End Slide -->

<div class="container">

    <div class="row">

        <div class="col-sm-8">

            <h1 class="text-muted">Toko QueTag</h1>

            <p>Selamat datang di dunia keajaiban rasa yang tiada tara! Toko QueTag hadir dengan satu misi yang tulus:
                menghadirkan kesenangan manis yang tak terlupakan dalam setiap gigitan. Kami dengan penuh semangat
                menciptakan kue-kue yang luar biasa, menggabungkan keahlian tangan terampil dengan bahan-bahan segar
                terbaik. Di sini, kami tidak hanya menyajikan kue-kue biasa. Kami menciptakan karya seni rasa yang
                memukau, menggugah selera, dan menghantarkan kebahagiaan kepada setiap pelanggan yang membelii
                di Toko QueTag.</p>

            <a href="/profile" class="btn btn-info mb-5">Pesan</a>

        </div>

        <div class="col-sm-4">

            <img src="{{ asset ('img/card2.png') }}" class="makan2 img-fluid" alt="">

        </div>
        {!! $datas->links('pagination::bootstrap-5') !!}

        @foreach ($datas as $data)
        <div class="card m-3 shadow-lg"  style="max-width: 12rem;">
            <img src="{{ asset ('gambar-kategori/' . $data->gambarKategori ) }}" class="card-img-top img-fluid rounded mt-2"
                style="max-height: 150px;" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $data->namaKategori }}</h5>
                <h5 class="card-text font-weight-light float-left">
                    Rp{{ number_format($data->hargaKategori, 0, ',', '.') }}</h5>
                </div>
                <a href="{{ route('kategori.show', $data->id)}}" class="btn btn-info float-right mb-3">Beli</a>
        </div>
        @endForeach
    </div>

</div>

@endSection
