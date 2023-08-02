@extends('AdminLTE.template')

@section('title', 'Detail Penjualan')

@section('content')

<div class="content-header">
    <div class="container-fluid">

        <!-- /.Content -->
        <div class="">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
               <p>{{ $message }}</p>
            </div>
        @endif
        <h1 class="m-0">Detail Penjualan</h1>

        </div>
        <div class="card shadow">

        <div class="card-body">
        <a class="btn btn-info mt-1 mb-2" href="/profile">Pesan Makanan</a>
    {{-- <form action="/search/detail" method="get" class="form-inline my-2 my-lg-0 float-right">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="searchDet">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
      <button class="float-left ml-3 btn btn-secondary my-2 my-sm-0" type="submit">Refresh Table</button>
    </form> --}}
        <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Pelanggan</th>
      <th scope="col">Makanan</th>
      <th scope="col">Harga</th>
      <th scope="col">Total</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
     @php
         $i = 0;
     @endphp
   @foreach ( $kategori as $get )
   @foreach ( $get->pelanggan as $pelanggan )
    <tr>
      <th scope="row">{{ ++$i }}</th>
      <td>{{ $pelanggan->namaPelanggan }}</td>
      <td>{{ $get->namaKategori }}</td>
      <td>Rp{{ number_format($pelanggan->pivot->total / $pelanggan->pivot->kuantitas, 0, ',', '.') }}</td>
      <td>Rp{{ number_format($pelanggan->pivot->total, 0, ',', '.') }}</td>
      <td>
            <form action="{{ route('detail.destroy', $pelanggan->pivot->id) }}" method="post">

         <!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Transaksi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <div class="card" style="">
  <img src="{{ asset('gambar-kategori/' . $get->gambarKategori) }}" class="card-img-top" alt="...">
  <div class="card-body">


    <div class="row">
    <div class="col-md-6">
    <h5 class="card-title">{{ $get->namaKategori }}</h5>
    </div>
    <div class="col-md-6">
    Kode Transaksi: {{ $pelanggan->pivot->kode }}
    </div>


    <div class="col-md-6">
    <h4 class="text-muted">Rp{{ number_format($pelanggan->pivot->total / $pelanggan->pivot->kuantitas, 0, ',', '.') }}</h4>
</div>
    <div class="col-md-6">
    <p class="text-muted">Alamat : {{ $pelanggan->alamatPelanggan }}</p>
</div>
    <hr>
    <div class="col-md-6">
         <p class="card-text">Pemesan</p>
         <p class="card-text">Total Pembelian {{ $pelanggan->pivot->kuantitas }}x {{ $get->namaKategori }}</p>

    </div>

    <div class="col-md-6">
    <p class="card-text">: {{ $pelanggan->namaPelanggan}}</p>
    <p class="card-text">: Rp{{ number_format($pelanggan->pivot->total, 0, ',', '.') }}</p>
    </div>

    </div>


  </div>
</div>



      </div>
      <div class="modal-footer">
       @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger d-block float-left">Delete</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



          </form>
      </td>
    </tr>


    @endForeach
    @endForeach
</tbody>
</table>
{!! $kategori->links('pagination::bootstrap-5') !!}
</div>
</div>
      <!-- / End Content -->


    </div><!-- /.container-fluid -->
</div>

<script>
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>

@endSection()

