<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
        protected $table = 'produk';
        protected $fillable=['tgl_masuk','nama_barang','harga','harga_jual','stok','warna','spesifikasi','foto'];

        public function kategori(){
            return $this->belongsTo(Kategori::class);
        }
        public function keranjang(){
            return $this->hasMany(Kategori::class);
        }
        public function nota(){
            return $this->belongsTo(Nota::class);
        }
}
