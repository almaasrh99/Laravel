<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
           protected $table = 'nota';
           protected $fillable=['tgl_transaksi','total_belanja','status'];

           public function user(){
               return $this->belongsTo(User::class);
           }

           public function transaksi()
           {
               return $this->hasMany(Transaksi::class);
           }
}
