<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{   protected $table="kategori";
    protected $fillable=['nama'];
    protected $primarykey='id';

    public function produk()
    {
        return $this->hasMany('App\produk','id_kategori');
    }
}
