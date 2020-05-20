<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
            protected $table = 'role';
            protected $fillable=['nama'];

            public function user(){
                return $this->hasMany(User::class);
            }
}
