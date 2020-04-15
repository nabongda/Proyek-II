<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Kategori;

class ProdukController extends Controller
{
    public function shop(){
        $produk=Produk::all();
        $byCate="";
        return view('content.produk',compact('produk','byCate'));
    }

    public function listByCat($id){
        $list_produk=Produk::where('kategori',$id)->get();
        $byCate=Kategori::select('nama_kategori')->where('id_kategori',$id)->first();
        return view('content.produk',compact('list_produk','byCate'));
    }

}
