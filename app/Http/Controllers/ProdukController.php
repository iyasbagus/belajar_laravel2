<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function menampilkan()
    {
        $produk = Produk::all();
        return view('produks.index', compact('produk'));
    }

    public function show($id)
    {
        $produk = Produk::FindOrFail($id);
        return view('produks.show', compact('produk'));
    }
}
