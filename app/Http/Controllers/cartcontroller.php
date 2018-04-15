<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produk;
use App\transaksi;
use App\kategori;
use Sentinel;   
use Gloudemans\Shoppingcart\Facades\Cart;

class cartcontroller extends Controller
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
        $cartitem= Cart::content();
        $produk=produk::all();
        $batas=0;
       return view('front.order')->with('cartitem',$cartitem)->with('produk',$produk)->with('batas',$batas) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=produk::find($id);
        Cart::add($id,$product->nama,1,$product->harga);
        return back();
    }
    public function checkout()
    {
        $cartitem= Cart::content();
        foreach($cartitem as $tampung)
        {
            $updateproduk=produk::find($tampung->id);
            $updateproduk->terjual=$updateproduk->terjual+$tampung->qty;
            $updateproduk->quantity=$updateproduk->quantity-$tampung->qty;
            $updateproduk->save();
            $transaksi=new transaksi;
            $qty=(string)$tampung->qty;
            $transaksi->nama="Penjualan barang"." ".$updateproduk->nama." "."Sebanyak"." ".$qty." buah";
            $transaksi->id_barang=$updateproduk->id;
            $transaksi->kode_transaksi=2;
            $transaksi->id_user=Sentinel::getUser()->id;
            $transaksi->id_distributor=0;
            $transaksi->barang_keluar=$qty;
            $transaksi->barang_masuk=0;
            $transaksi->save();

        }
        Cart::destroy();
        return view('front.ordersuccess');
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Cart::update($id,$request->qty);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back();
    }
}
