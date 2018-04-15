<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produk;
use App\kategori;
use App\transaksi;
use Sentinel;
use Session;
class viewproductlog extends Controller
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
        $selected=1;
        $produk=produk::where('id_kategori',$selected)->paginate(4);
          return view('front.productlog')->with('produk',$produk)->with('kategori',$kategori)->with('selected',$selected);
    }
    public function viewlog()
    {
        $selected=2;
        $log=transaksi::where('kode_transaksi',$selected)->where('id_user',Sentinel::getUser()->id)->get();
        $produk=produk::all();
        return view('front.customertrans')->with('log',$log)->with('produk',$produk);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
                
                  'id_kategori'=>'required',
            
        ]);
        if($request->id_kategori==1)
        {
        return redirect('viewproductlog');
        }
        else
        {
            return redirect('viewproductlog2');
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
