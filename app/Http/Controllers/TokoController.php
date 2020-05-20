<?php

namespace App\Http\Controllers;

use App\Keranjang;
use App\Nota;
use App\Produk;
use App\Transaksi;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use URL;

class TokoController extends Controller
{
    private $pages;
    private const ACTIVE = 'active';


    public function _construct()
    {
        $this->pages = array();
    }

    public function index(Request $request)
    {
        if ($request->session()->get('s_status') == self::ACTIVE) {
            $data['session'] = array(
                'id' => $request->session()->get('s_id'),
                'username' => $request->session()->get('s_username'),
                'role' => $request->session()->get('s_role'),
            );
            $data['title'] = "Dashboard - Goodget";
            $data['produk'] = DB::select("SELECT p.id, p.nama_barang, p.harga_jual, p.stok, p.warna, p.spesifikasi, p.foto, k.nama_kategori AS kategori FROM produk AS p RIGHT JOIN kategori AS k ON p.kategori_id = k.id");
            return view('user_index', $data);
        } else {
            return redirect('/login');
        }
    }

    public function cari(Request $request)
    {
        if ($request->session()->get('s_status') == self::ACTIVE) {
            $data['session'] = array(
                'id' => $request->session()->get('s_id'),
                'username' => $request->session()->get('s_username'),
                'role' => $request->session()->get('s_role'),
            );

            $products = Produk::join('kategori', 'produk.kategori_id', '=', 'kategori.id')
                ->select('kategori.nama_kategori', 'produk.*');

            if ($request->kategori != "all") {
                $products->where('nama_kategori', $request->kategori);
            }
            if ($request->cari != null) {
                $products->where('produk.nama_barang', 'LIKE', '%' . $request->cari . '%');
            }

            $data['produk'] = $products->get();
            return view('pencarian', $data);
        }
    }

    public function index2()
    {
        $data['title'] = "Dashboard - Goodget";
        $data['produk'] = DB::select("SELECT p.id, p.nama_barang, p.harga_jual, p.stok, p.warna, p.spesifikasi, p.foto, k.nama_kategori AS kategori FROM produk AS p RIGHT JOIN kategori AS k ON p.kategori_id = k.id");
        return view('index', $data);
    }

    public function user(Request $request)
    {
        $data['title'] = "Dashboard - Goodget";
        $data['produk'] = DB::select("SELECT p.id, p.nama_barang, p.harga_jual, p.stok, p.warna, p.spesifikasi, p.foto, k.nama_kategori AS kategori FROM produk AS p RIGHT JOIN kategori AS k ON p.kategori_id = k.id");
        return view('user', $data);
    }

    public function signOut(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }

    public function detail(Request $request, $id)
    {
        if ($request->session()->get('s_status') == self::ACTIVE) {
            $data['session'] = array(
                'id' => $request->session()->get('s_id'),
                'username' => $request->session()->get('s_username'),
                'role' => $request->session()->get('s_role'),
            );
            $data['title'] = "Dashboard - Goodget";
            $data['produk'] = DB::select("SELECT p.id, p.nama_barang, p.harga_jual, p.stok, p.warna, p.spesifikasi, p.foto, k.nama_kategori AS kategori FROM produk AS p RIGHT JOIN kategori AS k ON p.kategori_id = k.id Where p.id=?", [$id]);
            return view('user_detail', $data);
        } else {
            return redirect('/login');
        }
    }

    public function kategori(Request $request)
    {
        if ($request->session()->get('s_status') == self::ACTIVE) {
            $data['session'] = array(
                'id' => $request->session()->get('s_id'),
                'username' => $request->session()->get('s_username'),
                'role' => $request->session()->get('s_role'),
            );
            $data['title'] = "Dashboard - Goodget";
            $data['produk'] = DB::select("SELECT p.id, p.nama_barang, p.harga_jual, p.stok, p.warna, p.spesifikasi, p.foto, k.nama_kategori AS kategori FROM produk AS p RIGHT JOIN kategori AS k ON p.kategori_id = k.id Where k.nama_kategori='laptop'");
            return view('user_kategori', $data);
        } else {
            return redirect('/login');
        }
    }

    public function kategoriHp(Request $request)
    {
        if ($request->session()->get('s_status') == self::ACTIVE) {
            $data['session'] = array(
                'id' => $request->session()->get('s_id'),
                'username' => $request->session()->get('s_username'),
                'role' => $request->session()->get('s_role'),
            );
            $data['title'] = "Dashboard - Goodget";
            $data['produk'] = DB::select("SELECT p.id, p.nama_barang, p.harga_jual, p.stok, p.warna, p.spesifikasi, p.foto, k.nama_kategori AS kategori FROM produk AS p RIGHT JOIN kategori AS k ON p.kategori_id = k.id Where k.nama_kategori='smartphone'");
            return view('user_kategori_hp', $data);
        } else {
            return redirect('/login');
        }
    }

    public function kategoriAcc(Request $request)
    {
        if ($request->session()->get('s_status') == self::ACTIVE) {
            $data['session'] = array(
                'id' => $request->session()->get('s_id'),
                'username' => $request->session()->get('s_username'),
                'role' => $request->session()->get('s_role'),
            );
            $data['title'] = "Dashboard - Goodget";
            $data['produk'] = DB::select("SELECT p.id, p.nama_barang, p.harga_jual, p.stok, p.warna, p.spesifikasi, p.foto, k.nama_kategori AS kategori FROM produk AS p RIGHT JOIN kategori AS k ON p.kategori_id = k.id Where k.nama_kategori='Accessories'");
            return view('user_kategori_aksesoris', $data);
        } else {
            return redirect('/login');
        }
    }

    public function transaksi(Request $request)
    {
        if ($request->session()->get('s_status') == self::ACTIVE) {
            $data['session'] = array(
                'id' => $request->session()->get('s_id'),
                'username' => $request->session()->get('s_username'),
                'role' => $request->session()->get('s_role'),
            );
            $data['title'] = "Dashboard - Goodget";
            $data['transaksi'] = DB::select("SELECT n.id, n.`tgl_transaksi`, n.`total_belanja`, n.`status`, u.`username` AS username FROM nota AS n INNER JOIN user AS u ON n.user_id = u.id  LIMIT 10 ");
            return view('user_transaksi', $data);
        } else {
            return redirect('/login');
        }
    }

    public function addToCart($id, Request $request)
    {
        $user_id = $request->session()->get('s_id');
        $produk = Produk::where('id', $id)->first();
        $product_exist = Keranjang::where('user_id', $user_id)->where('produk_id', $id)->first();

        if (!$product_exist) {
            $product_added = new Keranjang();
            $product_added->user_id = $user_id;
            $product_added->produk_id = $id;
            $product_added->jumlah = 1;
            $product_added->subtotal = $produk->harga_jual * $product_added->jumlah;
            $product_added->save();
        } else {
            $product_exist->jumlah += 1;
            $product_exist->subtotal = $produk->harga_jual * $product_exist->jumlah;
            $product_exist->save();
        }
        return redirect('/user');
    }

    public function dataKeranjang()
    {
        $data['keranjang'] = \App\Keranjang::all();
        return view('user_keranjang', $data);
    }

    public function keranjang(Request $request)
    {
        if ($request->session()->get('s_status') == self::ACTIVE) {
            $data['session'] = array(
                'id' => $request->session()->get('s_id'),
                'username' => $request->session()->get('s_username'),
                'role' => $request->session()->get('s_role'),
            );
            //$data['title']= "Dashboard - Goodget";
            $data['keranjang'] = Keranjang::join('produk', 'produk.id', '=', 'keranjang.produk_id')->get();

            return view('user_keranjang', $data);
        } else {
            return redirect('/login');
        }
    }

    public function keranjangDeletePost($id, Request $request)
    {
        if ($request->session()->get('s_status') == self::ACTIVE) {
            $data['session'] = array(
                'id' => $request->session()->get('s_id'),
                'username' => $request->session()->get('s_username'),
                'role' => $request->session()->get('s_role'),
            );
            DB::delete("DELETE  FROM keranjang WHERE produk_id=?", [$id]);
            return redirect('/user/keranjang');
        } else {
            return redirect('/login');
        }
    }

    public function checkOut(Request $request)
    {
        if ($request->method() == "POST") {
            $request_item = collect($request->items)
                ->flatMap(function ($item) {return $item;});
            $user_id = $request_item->first()['user_id'];
            $products_id = $request_item
                ->map(function ($item) {return (int) $item['product_id'];});

            $request_by_product_id = $request_item->groupBy('product_id');

            $products = Produk::whereIn('id', $products_id)->get();
            $product_by_product_id = $products->groupBy('id');
            $total = $products->map(function ($product) use ($request_by_product_id) {
                return $product->harga_jual * $request_by_product_id->get($product->id)->first()['qty'];
            })->sum();

            $response = [];
            $response["error"] = [];
            $response = $this->errorValidation($products, $request_by_product_id, $response);
            if ($response["error"] != null) return $response;

            $transactions = $request_item->map(function ($item) use ($product_by_product_id){
                $transaksi = new Transaksi();
                $transaksi->harga = $product_by_product_id->get($item['product_id'])->first()['harga_jual'];
                $transaksi->pajak = 0.1 * $transaksi->harga * $item["qty"];
                $transaksi->jumlah = $item["qty"];
                $transaksi->produk_id = $item["product_id"];
                $transaksi->nama_barang = $item["name"];
                return $transaksi;
            });

            $nota = new Nota();
            $nota->tgl_transaksi = Carbon::now();
            $nota->total_belanja = $total;
            $nota->status = "Sudah Dibayar";
            $nota->user_id = $user_id;
            $response["nota"] = $nota;
            $response["success"] = $nota->save();
            $nota->transaksi()->saveMany($transactions);

            Keranjang::where('user_id', $user_id)->delete();
            $products->each(function ($product) {
                $product->save();
            });
            $response["redirect"] = action('TokoController@nota', ['id' => $nota['id']]);
            return $response;
        }
    }

    public function nota(Request $request)
    {
        $user_id = $request->session()->get('s_id');
        $response['session'] = array(
            'id' => $request->session()->get('s_id'),
            'username' => $request->session()->get('s_username'),
            'role' => $request->session()->get('s_role'),
        );
        $id = $request->query('id');
        $data['user'] = User::find($user_id);
        $data['transaksi'] = DB::table('transaksi')
            ->select('nota.total_belanja', 'nota.tgl_transaksi', 'user.username', 'transaksi.jumlah',
                'transaksi.nama_barang', 'transaksi.harga', 'transaksi.pajak')
            ->join('nota', 'nota.id', '=', 'transaksi.nota_id')
            ->join('user', 'nota.user_id', '=', 'user.id')
            ->where('nota_id', '=', $id)
            ->get();
        $trasactions = collect($data['transaksi'])->map(function ($trasaction) use ($id) {
            $tr["jumlah"] = $trasaction->jumlah;
            $tr["harga"] = $trasaction->harga;
            $tr["nama_barang"] = $trasaction->nama_barang;
            $tr["subtotal"] = $trasaction->jumlah * $trasaction->harga;
            return $tr;
        })->all();
        $response["transaksi"] = $trasactions;
        $response["id"] = (int)$id;
        $response["pajak"] = collect($data['transaksi'])->sum("pajak");
        $response["total_belanja"] = collect($data['transaksi'])->get(0)->total_belanja;
        $response["total_bayar"] = $response["pajak"] + $response["total_belanja"];
        $response["tgl_transaksi"] = $data['transaksi']->get(0)->tgl_transaksi;
        return view('user_nota', $response);
    }

    public function downloadNota(Request $request, $id)
    {
        $user_id = $request->session()->get('s_id');
        $data['title'] = "Reporting - laracms";
        $data['transaksi'] = DB::table('transaksi')
            ->select('nota.total_belanja', 'nota.tgl_transaksi', 'user.username', 'transaksi.jumlah',
                'transaksi.nama_barang', 'transaksi.harga', 'transaksi.pajak')
            ->join('nota', 'nota.id', '=', 'transaksi.nota_id')
            ->join('user', 'nota.user_id', '=', 'user.id')
            ->where('nota_id', '=', $id)
            ->get();
        $response = [];
        $trasactions = collect($data['transaksi'])->map(function ($trasaction) use ($id) {
            $tr["jumlah"] = $trasaction->jumlah;
            $tr["harga"] = $trasaction->harga;
            $tr["nama_barang"] = $trasaction->nama_barang;
            $tr["subtotal"] = $trasaction->jumlah * $trasaction->harga;
            return $tr;
        })->all();
        $response["transaksi"] = $trasactions;
        $response["id"] = $id;
        $response["username"] = collect(User::where('id', $user_id)->get())->first()->username;
        $response["pajak"] = collect($data['transaksi'])->sum("pajak");
        $response["total_belanja"] = collect($data['transaksi'])->get(0)->total_belanja;
        $response["total_bayar"] = $response["pajak"] + $response["total_belanja"];
        $response["tgl_transaksi"] = $data['transaksi']->get(0)->tgl_transaksi;
        $pdf = PDF::loadview('user_data_nota', $response);
        return $pdf->download('nota-file-' . $response["tgl_transaksi"] . '.pdf');
    }

    private function errorValidation($products, $request_by_product_id, $response): array
    {
        foreach ($products as $product) {
            if ((int)$request_by_product_id->get($product->id)->first()['qty'] < 1) {
                $response["error"][$product->id] = "Minimal pemesanan " . $product->nama_barang . " adalah 1!";
            }
            if ($product->stok < $request_by_product_id->get($product->id)->first()['qty']) {
                $response["error"][$product->id] = "Stok untuk " . $product->nama_barang . " tidak mencukupi";
            } else {
                $product->stok -= $request_by_product_id->get($product->id)->first()['qty'];
            }
        }
        return $response;
    }

}
