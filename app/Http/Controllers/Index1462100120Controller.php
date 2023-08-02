<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
// use Illuminate\Http\Request;

class Index1462100120Controller extends Controller
{
    function main()
    {
        $datas = Kategori::paginate(5);
        return view('pages.main', compact('datas'));
    }

    function profile()
    {
        $datas = Kategori::paginate(8);
        return view('pages.profile', compact('datas'));
    }

    function beli1()
    {
        return view('pages.beli1');
    }


    function about()
    {
        return view('pages.about');
    }
}
