<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
        protected $table = 'keranjang';
        protected $fillable=['jumlah','subtotal'];

        public function produk(){
            return $this->belongsTo(Produk::class);
        }

}
