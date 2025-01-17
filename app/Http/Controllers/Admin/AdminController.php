<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function laporan()
    {
        return view('admin.laporan');
    }
    public function produk()
    {
        // $produk = Produk::where('id_kategori','=',1)->get();
        $produk = Produk::with('kategori')->orderByDesc('stok_produk')->limit(3)->get();
        $kategori = Kategori::with('produk')->where('id_kategori', '=',2)->get();
        return view('admin.produk', ['produk'=>$produk, 'kategori'=>$kategori]);
    }
    public function tambah_produk()
    {
        return view('admin.tambah_produk');
    }

}
