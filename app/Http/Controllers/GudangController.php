<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use Illuminate\Support\Facades\DB;

class GudangController extends Controller
{
    private $pages;
    private const ACTIVE = 'active';

    public function _construct() {
        $this ->pages =array();
    }

    public function index(Request $request){
        if($request->session()->get('s_status') == self::ACTIVE){
            $data['session'] = array(
                'id' => $request->session()->get('s_id'),
                'username' => $request->session()->get('s_username'),
                'role' => $request->session()->get('s_role'),
            );
            $data['title']= "Admin - Goodget";
            $data['produk']=DB::select("SELECT p.id, p.nama_barang, p.tgl_masuk, p.harga, p.harga_jual, p.stok, p.warna, p.spesifikasi, p.foto, k.nama_kategori AS kategori FROM produk AS p RIGHT JOIN kategori AS k ON p.kategori_id = k.id");
            return view('gudang_index', $data);
        }else {
            return redirect('/login');
        }
    }

    public function signOut(Request $request) {
        $request->session()->flush();
        return redirect('/login');
    }

    public function gudangAddPost(Request $request){
        if($request->session()->get('s_status') == self::ACTIVE){
            $data['session'] = array(
                'id' => $request->session()->get('s_id'),
                'username' => $request->session()->get('s_username'),
                'role' => $request->session()->get('s_role'),
        );
        $data['title']="Form Add Product";
        $data['kategori'] = Produk::join('kategori', 'kategori.id', '=', 'kategori_id')
            ->select('produk.*')
            ->get();
        return view('gudang_add', $data);
        } else {
            return redirect('/login');
        }
    }

    public function gudangAddSave(Request $request){
        $method = $request->method();
        if($method=="POST"){
            $directory = '/assets/produk';
            $file = $request->file('file');
                    $file->move($directory, $file->getClientOriginalName());

             $produk = new Produk;
             $produk->id = $request->id;
             $produk->nama_barang = $request->nama_barang;
             $produk->tgl_masuk = $request->tgl_masuk;
             $produk->harga = $request->harga;
             $produk->harga_jual = $request->harga_jual;
             $produk->stok = $request->stok;
             $produk->warna = $request->warna;
             $produk->spesifikasi = $request->spesifikasi;
             $produk->foto= $directory."/".$file->getClientOriginalName();
             $produk->kategori_id = $request->kategori_id;
             $produk->save();
            return redirect('/admin');
        }else {
            return redirect('/admin');
        }
    }

    public function gudangEditPost($id, Request $request){
        if($request->session()->get('s_status') == self::ACTIVE){
            $data['session'] = array(
                'id' => $request->session()->get('s_id'),
                'username' => $request->session()->get('s_username'),
                'role' => $request->session()->get('s_role'),
        );
        $data['produk'] = DB::selectOne("SELECT * FROM produk WHERE id=?",[$id]);
        $data['title'] = $data['produk']->nama_barang. ' - Edited';
        return view('gudang_edit', $data);
        } else {
            return redirect('/login');
        }
    }

    public function gudangDetailPost($id, Request $request){
        if($request->session()->get('s_status') == self::ACTIVE){
            $data['session'] = array(
                'id' => $request->session()->get('s_id'),
                'username' => $request->session()->get('s_username'),
                'role' => $request->session()->get('s_role'),
        );
        $data['produk'] = Produk::where('id', $id)->first();
        $data['title'] = $data['produk']->nama_barang. ' - Detail';
        return view('gudang_detail', $data);
        } else {
            return redirect('/login');
        }
    }

    public function gudangEditPostSave(Request $request){
        $method = $request->method();
        if($method=="POST"){
            $directory = '/assets/produk';
            $file = $request->file('file');
                    $file->move($directory, $file->getClientOriginalName());
            $produk = Produk::find($request->id);

            $produk->id = $request->id;
            $produk->nama_barang = $request->nama_barang;
            $produk->tgl_masuk = $request->tgl_masuk;
            $produk->harga = $request->harga;
            $produk->harga_jual = $request->harga_jual;
            $produk->stok = $request->stok;
            $produk->warna = $request->warna;
            $produk->spesifikasi = $request->spesifikasi;
            $produk->foto= $directory."/".$file->getClientOriginalName();
            $produk->kategori_id = $request->kategori_id;
            $produk->save();

            return redirect('/admin');
        }else {
            return redirect ('/admin');
        }
    }

    public function gudangDeletePost($id, Request $request){
        if($request->session()->get('s_status') == self::ACTIVE){
            $data['session'] = array(
                'id' => $request->session()->get('s_id'),
                'username' => $request->session()->get('s_username'),
                'role' => $request->session()->get('s_role'),
        );
        DB::delete("DELETE  FROM produk WHERE id=?",[$id]);
        return redirect('/admin');
        } else {
            return redirect('/login');
        }
    }

    public function gudangSearch(Request $request){
        if($request->has('cari')){
            $produk = \App\Produk::where('nama_barang','LIKE','%'.$request->cari.'%')->get();
        }else {
            $produk = \App\Produk::all();
        }
        return view('gudang_index',['produk'=>$produk]);
    }
    public function gudangSearchKategori(Request $request){
        if($request->has('cari')){
            $kategori = \App\Kategori::where('nama_kategori','LIKE','%'.$request->cari.'%')->get();
        }else {
            $kategori = \App\Kategori::all();
        }
        return view('kategori_index',['kategori'=>$kategori]);
    }

}
