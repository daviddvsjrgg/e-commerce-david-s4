<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Pelanggan;

use Illuminate\Database\Eloquent\Builder;

class SearchController extends Controller
{
    public function searchKat(Request $request)
    {

        if($request->searchKat){
        $datas = Kategori::query()
        ->when(
        $request->searchKat,
         function (Builder $builder) use ($request)
          {
              $builder->where('namaKategori', 'like', "%{$request->searchKat}%")
              ->orWhere('hargaKategori', 'like', "%{$request->searchKat}%")
      ->orWhere('deskripsiKategori', 'like', "%{$request->searchKat}%");
               }
              )
               ->Paginate(5);
               return view('AdminLTE.kategori.index', compact('datas'));

               } else if (!$request->searchKat){
                   $datas = Kategori::paginate(5);
        return view('AdminLTE.kategori.index', compact('datas'));

        }
}


public function searchPel(Request $request)
    {

        if($request->searchPel){
        $datas = Pelanggan::query()
        ->when(
        $request->searchPel,
         function (Builder $builder) use ($request)
          {
              $builder->where('namaPelanggan', 'like', "%{$request->searchPel}%")
              ->orWhere('alamatPelanggan', 'like', "%{$request->searchPel}%")
      ->orWhere('nbiPelanggan', 'like', "%{$request->searchPel}%");
               }
              )

               ->Paginate(3);
               return view('AdminLTE.pelanggan.index', compact('datas'));

               } else if (!$request->searchPel){
                   $datas = Pelanggan::paginate(3);
        return view('AdminLTE.pelanggan.index', compact('datas'));

        }



}




public function searchDet(Request $request)
    {

        if($request->searchDet){
        $kategori = Kategori::query()
        ->when(
        $request->searchDet,
         function (Builder $builder) use ($request)
          {
              $builder->where('namaKategori', 'like', "%{$request->searchDet}%")
              ->orWhere('hargaKategori', 'like', "%{$request->searchDet}%");
               }
              )
               ->Paginate(3);
               return view('AdminLTE.detail.index', compact('kategori'));

               } else if (!$request->searchDet){
                   $kategori = Kategori::with('pelanggan')->paginate(3);
        return view('AdminLTE.detail.index', compact('kategori'));

        }
}






 }
