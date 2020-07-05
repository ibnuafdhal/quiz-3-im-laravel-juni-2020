<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use App\Artikel;
use Illuminate\Http\Request;


class ArtikelController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view('artikel.index', [
            'title' => "Artikel",
            'artikel'    => $artikel
        ]);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artikel.create');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $artikel = Artikel::create([
            'judul'  => $request->judul,
            'isi'    => $request->isi,
            'slug'    => $request->slug,
            'tag'    => $request->tag,
        ]);
        return redirect('/artikel');
    }
}
