<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datas = Pelanggan::paginate(5);
        return view('AdminLTE.pelanggan.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('AdminLTE.pelanggan.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([

          'namaPelanggan' => 'required',
          'alamatPelanggan' => 'required',
          'nbiPelanggan' => 'required|unique:pelanggan'
        ]);


        $newPelanggan = new Pelanggan();

        $newPelanggan->namaPelanggan = $request->namaPelanggan;
        $newPelanggan->alamatPelanggan = $request->alamatPelanggan;
        $newPelanggan->nbiPelanggan = $request->nbiPelanggan;


        $newPelanggan->save();

        return redirect()->route('pelanggan.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelanggan $pelanggan)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelanggan $pelanggan)
    {
        //
        return view('AdminLTE.pelanggan.edit', compact('pelanggan'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $post = Pelanggan::findOrFail($id);

        $request->validate([

          'namaPelanggan' => 'required',
          'alamatPelanggan' => 'required',
          'nbiPelanggan' => 'required|unique:pelanggan',
        ]);

          $post->update([
          'namaPelanggan'     => $request->namaPelanggan,
          'alamatPelanggan'     => $request->alamatPelanggan,
          'nbiPelanggan'   => $request->nbiPelanggan

          ]);
          return redirect()->route('pelanggan.index')
            ->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelanggan $pelanggan)
    {
        //
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')
            ->with('success', 'Data berhasil dihapus');


    }




}
