<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
  
    protected $fillable=['nama','harga','quantity','id_kategori','id_distributor','description'];
    protected $primarykey='id';

    public function kategori()
    {
        return $this->belongsTo('App\kategori','id_kategori');
    }
    public function transaksi()
    {
        return $this->hasMany('App\transaksi','id_barang');
    }

}
