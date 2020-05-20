<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    private $pages;
    private const ACTIVE = 'active';

    public function _construct() {
        $this ->pages =array();
    }
    public function index(Request $request) {
        if($request->session()->get('s_status') == self::ACTIVE){
            $data['session'] = array(
                'id' => $request->session()->get('s_id'),
                'username' => $request->session()->get('s_username'),
                'role' => $request->session()->get('s_role'),
        );
        $data['title']= "Gudang - Kategori";
        $data['kategori']=DB::select("SELECT id, nama_kategori FROM kategori");
        return view('kategori_index', $data);
        }else {
            return redirect('/login');
        }
    }

    public function kategoriAddPost(Request $request){
        if($request->session()->get('s_status') == self::ACTIVE){
            $data['session'] = array(
                'id' => $request->session()->get('s_id'),
                'username' => $request->session()->get('s_username'),
                'role' => $request->session()->get('s_role'),
        );
        $data['title']="Gudang - Add Kategori";
        return view('kategori_add', $data);
        } else {
            return redirect('/login');
        }
    }

    public function kategoriAddSave(Request $request){
        $method = $request->method();
        if($method=="POST"){
            DB::update("INSERT INTO kategori (id, nama_kategori) VALUE (?, ?)",[
                $request->input('id'),
                $request->input('nama_kategori')
            ]);
            return redirect('/admin/kategori');
        } else{
            return redirect('/admin/kategori');
        }
    }

    public function kategoriEditPost($id, Request $request){
        if($request->session()->get('s_status') == self::ACTIVE){
            $data['session'] = array(
                'id' => $request->session()->get('s_id'),
                'username' => $request->session()->get('s_username'),
                'role' => $request->session()->get('s_role'),
        );
        $data['nama_kategori'] = DB::selectOne("SELECT * FROM kategori WHERE id=?",[$id]);
        $data['title'] = $data['nama_kategori']->nama_kategori. '-Edited';
        return view('kategori_edit', $data);
        } else {
            return redirect('/login');
        }
    }

    public function kategoriEditPostSave(Request $request){
        $method = $request->method();
        if($method=="POST"){
            DB::update("UPDATE kategori set nama_kategori=? WHERE id=?",[
                $request->input('nama_kategori'),
                $request->input('id'),
            ]);
            return redirect('/admin/kategori');
        } else{
            return redirect ('/admin/kategori');
        }
    }

    public function kategoriDeletePost($id, Request $request){
        if($request->session()->get('s_status') == self::ACTIVE){
            $data['session'] = array(
                'id' => $request->session()->get('s_id'),
                'username' => $request->session()->get('s_username'),
                'role' => $request->session()->get('s_role'),
        );
        DB::delete("DELETE FROM kategori WHERE id=?",[$id]);
        return redirect('/admin/kategori');
        } else {
            return redirect('/login');
        }
    }

    public function searchkategori(Request $request){
        $cari = $request->cari;

        $kategori = DB::table('kategori')
        ->where('nama_kategori','like',"%".$cari."%")
        ->paginate();

        return view('kategori_index',['kategori' => $kategori]);

    }
}

