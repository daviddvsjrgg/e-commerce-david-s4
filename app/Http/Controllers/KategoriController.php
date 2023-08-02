<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\File;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $datas = Kategori::paginate(5);
        return view('AdminLTE.kategori.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AdminLTE.kategori.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {


        $request->validate([

          'namaKategori' => 'required',
          'hargaKategori' => 'required|integer',
          'deskripsiKategori' => 'required',
          'gambarKategori' => 'required|image|file|max:10000',


        ]);

        $picture = $request->file('gambarKategori');
        if($picture->isValid()){
            $destinationPath = public_path() . '/gambar-kategori/';
     $picture_name = time() . '-' . Str::random(15) . '.' .        $picture->getClientOriginalExtension();
            $picture->move($destinationPath, $picture_name);

        }

        $newKategori = new Kategori();

        $newKategori->namaKategori = $request->namaKategori;
        $newKategori->hargaKategori = $request->hargaKategori;
        $newKategori->deskripsiKategori = $request->deskripsiKategori;
        $newKategori->gambarKategori = $picture_name;

        $newKategori->save();

        return redirect()->route('kategori.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
        return view('pages.beli', compact('kategori'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        //
        return view('AdminLTE.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Kategori::findOrFail($id);

         if ($request->file('gambarKategori')) {

            $request->validate([

          'namaKategori' => 'required',
          'hargaKategori' => 'required|integer',
          'deskripsiKategori' => 'required',
          'gambarKategori' => 'image|file|max:10000',


        ]);

            $picture = $request->file('gambarKategori');
            if($picture->isValid()){
            $destinationPath = public_path() . '/gambar-kategori/';
            $picture_name = time() . '-' . Str::random(15) . '.' .
            $picture->getClientOriginalExtension();
            $picture->move($destinationPath, $picture_name);

        }
            $post->update([
          'namaKategori'     => $request->namaKategori,
          'hargaKategori'     => $request->hargaKategori,
          'deskripsiKategori'   => $request->deskripsiKategori,
          'gambarKategori'   => $picture_name
            ]);


            $fileOld = $request->oldGambar;
            File::delete('gambar-kategori/'  .$fileOld);

            return redirect()->route('kategori.edit', $id)
            ->with('success', 'Data berhasil diubah');

            }

           else if ($request->namaKategori == $post->namaKategori AND
                $request->hargaKategori == $post->hargaKategori AND
                $request->deskripsiKategori == $post->deskripsiKategori AND
                $request->oldGambar == $post->gambarKategori
            )
                {
                    return redirect()->route('kategori.edit', $id)
                    ->with('warning', 'Tidak ada data yang diubah');
                }

            else {

            $request->validate([

          'namaKategori' => 'required',
          'hargaKategori' => 'required|integer',
          'deskripsiKategori' => 'required',
        ]);
                $post->update([
          'namaKategori'     => $request->namaKategori,
          'hargaKategori'     => $request->hargaKategori,
          'deskripsiKategori'   => $request->deskripsiKategori,
          'gambarKategori'   => $request->oldGambar

          ]);



          return redirect()->route('kategori.edit', $id)
            ->with('success', 'Data berhasil diubah');

            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        //
            $fileOld = $kategori->gambarKategori;
            File::delete('gambar-kategori/'  .$fileOld);


        $kategori->delete();

        return redirect()->route('kategori.index')
            ->with('success', 'Data berhasil dihapus');
    }



}






