<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{  protected $table="transaksi";
    protected $fillable=['nama','id_barang','kode_transaksi','id_user','id_distributor'];
    protected $primarykey='id';

    public function produk()
    {
        return $this->belongsTo('App\produk','id_barang');
    }
}
