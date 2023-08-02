<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Pelanggan;
use App\Models\DetailPenjualan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DetailPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kategori = Kategori::with('pelanggan')->paginate(50);
        return view('AdminLTE.detail.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
          'nbiPelanggan' => 'required',
          'kuantitas' => 'required|integer',
        ]);


        $newPelanggan = new Pelanggan();
        $newPelanggan->namaPelanggan = $request->namaPelanggan;
        $newPelanggan->alamatPelanggan = $request->alamatPelanggan;
        $newPelanggan->nbiPelanggan = $request->nbiPelanggan;
        $newPelanggan->save();


        $newDetail = new DetailPenjualan();
        $lastPelanggan = DB::table('pelanggan')->latest('id')->first();
        $newDetail->pelanggan_id = $lastPelanggan->id;
        $newDetail->kategori_id = $request->idKategori;
        $newDetail->kuantitas = $request->kuantitas;
        $totalOutput = ( $request->kuantitas * $request->hargaKategori );
        $newDetail->total = $totalOutput;
        $kodeName = 'PAW-' . Str::random(7) . '-UPRAK';
        $newDetail->kode = $kodeName;
        $newDetail->save();


        return redirect()->route('detail.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailPenjualan $dp)
    {
        //
        dd($dp);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $detail = DetailPenjualan::find($id);
        $detail->delete();

        return redirect()->route('detail.index')
            ->with('success', 'Data berhasil dihapus');





    }
}
