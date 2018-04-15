<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Session;
use App\produk;
use App\transaksi;
use App\User;

class hlcontroller extends Controller
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
        if(Sentinel::getUser()->hasAccess('homeadm'))
        {
            $user=User::where('last_name','!=','admin')->get();
            $transaksi=transaksi::all();
            return view('front.homeadmin')->with('user',$user)->with('transaksi',$transaksi);
        }
        else if (Sentinel::getUser()->hasAccess('homesup'))
        {
            $selected=2;
            $log=transaksi::where('kode_transaksi',$selected)->get();
            $produk=produk::all();
            $sortedproduk=produk::where('terjual','!=','0')->orderBy('terjual','desc')->where('id_distributor',Sentinel::getUser()->id)->paginate(5);
           return view('front.homesupplier')->with('transaksi',$log)->with('produk',$produk)->with('sortedproduct',$sortedproduk);
        }
        else
        {
            $produk=produk::orderBy('updated_at','desc')->paginate(4);
            return view('front.homelog')->with('produk',$produk);
        
        }
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
