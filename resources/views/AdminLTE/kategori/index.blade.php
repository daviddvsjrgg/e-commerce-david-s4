@extends('AdminLTE.template')

@section('title', 'Makanan')

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
            <h1 class="m-0">Tabel Produk</h1>

        </div>
        <div class="card shadow">

            <div class="card-body">
                <a class="btn btn-primary mt-1 mb-2" href="{{ route ('kategori.create') }}">Tambah</a>

                <form action="/search/kategori" method="get" class="form-inline my-2 my-lg-0 float-right">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                        name="searchKat">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                    <button class="float-left ml-3 btn btn-secondary my-2 my-sm-0" type="submit">Refresh Table</button>
                </form>
                {!! $datas->links('pagination::bootstrap-5') !!}
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Harga Produk</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $datas as $data )
                        <tr>
                            <th scope="row">{{ ($datas->currentPage() - 1) * $datas->perPage() + $loop->iteration }}
                            </th>
                            <td>{{ $data->namaKategori }}</td>
                            <td>{{ $data->deskripsiKategori }}</td>
                            <td>Rp{{ number_format($data->hargaKategori, 0, ',', '.') }}</td>
                            <td><img src="{{ asset ('gambar-kategori/' . $data->gambarKategori ) }}"
                                    class="card-img-top" style="max-height:170px; max-width:180px; alt=" ..."></td>
                            <td>
                                <form action="{{ route ('kategori.destroy', $data->id) }}" method="post">

                                    <a class="btn btn-warning" href="{{ route('kategori.edit', $data->id) }}">Edit</a>

                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        <!-- / End Content -->


    </div><!-- /.container-fluid -->
</div>

@endSection()
