<?php

namespace App\Http\Controllers;

use App\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function __construct(){
    }

    public function viewChartCategory(Request $request){
        $data['session'] = array(
            'id' => $request->session()->get('s_id'),
            'username' => $request->session()->get('s_username'),
            'role' => $request->session()->get('s_role'),
        );
        $data['title'] = "Laporan-Hasil-Perusahaan";
        $data['transaksi']=DB::select("SELECT COUNT(`produk_id`)AS transaksi,SUM(`jumlah`) AS jumlah,SUM(`harga`) AS harga,SUM(`pajak`) AS pajak FROM transaksi");
        return view('chart', $data);
    }

    public function calculateReport(Request $request)
    {
        $transaksi = Transaksi::join('nota', 'nota.id', '=', 'transaksi.nota_id')
            ->join('produk', 'produk.id', '=', 'transaksi.produk_id')
            ->join('kategori', 'produk.kategori_id', '=', 'kategori.id')
            ->select('transaksi.jumlah', 'nota.tgl_transaksi', 'kategori.nama_kategori')
            ->get();

        $transaksi->each(function ($data) {
            $data->tgl_transaksi = Carbon::parse($data->tgl_transaksi)->format('d-m-Y');
        });

        $categories = $transaksi->groupBy('nama_kategori')->map(function ($data) {
            return $data->groupBy('tgl_transaksi');
        });

        return $categories->map(function ($category) {
            return $category->map(function ($tgl_transaksi) {
                return $tgl_transaksi->map(function ($data) {
                    return $data->jumlah;
                })->sum();
            });
        });
    }
}
