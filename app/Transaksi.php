<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable=['jumlah','nama_barang','harga', 'pajak'];

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }

    public function nota(){
        return $this->belongsTo(Nota::class);
    }
}

