<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan_Perusahaan extends Model
{
    protected $table = 'laporan_perusahaan';
    protected $fillable=['periode','total_pendapatan'];

}
