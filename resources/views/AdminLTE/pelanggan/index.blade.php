@extends('AdminLTE.template')

@section('title', 'Pelanggan')

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
        <h1 class="m-0">Tabel Pelanggan</h1>

        </div>
        <div class="card shadow">

        <div class="card-body">
        {{-- <a class="btn btn-primary mt-1 mb-2" href="{{ route ('pelanggan.create') }}">Tambah</a> --}}

    <form action="/search/pelanggan" method="get" class="form-inline my-2 my-lg-0 float-right">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="searchPel">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
      <button class="float-left ml-3 btn btn-secondary my-2 my-sm-0" type="submit">Refresh Table</button>
    </form>
        <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Nomor Telepon</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
   @foreach ( $datas as $data )
    <tr>
      <th scope="row">{{ ($datas->currentPage() - 1) * $datas->perPage() + $loop->iteration }}</th>
      <td>{{ $data->namaPelanggan }}</td>
      <td>{{ $data->alamatPelanggan }}</td>
      <td>{{ $data->nbiPelanggan }}</td>
      <td>
         <form action="{{ route ('pelanggan.destroy', $data->id) }}" method="post">

         <a class="btn btn-warning" href="{{ route('pelanggan.edit', $data->id) }}">Edit</a>

          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">Delete</button>
          </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{!! $datas->links('pagination::bootstrap-5') !!}
</div>
</div>
      <!-- / End Content -->


    </div><!-- /.container-fluid -->
</div>

@endSection()

