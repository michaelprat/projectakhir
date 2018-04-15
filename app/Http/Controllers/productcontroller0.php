<?php

namespace App\Http\Controllers;
use App\produk;
use App\kategori;
use App\transaksi;
use Sentinel;
use Illuminate\Http\Request;
use DB;
use Excel;

use Illuminate\Support\Facades\Input;

class productcontroller0 extends Controller
{



        
    public function __construct()
    {
    
        $this->middleware('sentinel');
        $this->middleware('sentinel.role');
      //  $this->middleware('sentinel.role');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori=kategori::pluck('nama','id');
        $selected=2;
        $zero=0;
        $id_distributor=Sentinel::getUser()->id;
        $produk=produk::where('id_kategori',$selected)->where('id_distributor',$id_distributor)->where('quantity',$zero)->paginate(4);
       return view('front.listproduct0')->with('produk',$produk)->with('kategori',$kategori);
    }

 

}
