<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Session;
use App\transaksi;
use App\produk;
use PDF;
use DB;
class suppliercontroller extends Controller
{




    public function __construct()
    {
    
        $this->middleware('sentinel');
        $this->middleware('sentinel.role');
      //  $this->middleware('sentinel.role');
    }
    
    public function exportPDFStock()
    { 
   
     $trans=produk::where('id_distributor',Sentinel::getUser()->id)->orderBy('created_at','asc')->get();
       view()->share('trans',$trans);
       $pdf=PDF::loadView('front.pdfviewstock');
       return $pdf->download('pdfviewstock.pdf');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selected=2;
        $log=transaksi::where('kode_transaksi',$selected)->get();
        $produk=produk::all();
        $sortedproduk=produk::where('terjual','!=','0')->orderBy('terjual','desc')->where('id_distributor',Sentinel::getUser()->id)->paginate(5);
       return view('front.homesupplier')->with('transaksi',$log)->with('produk',$produk)->with('sortedproduct',$sortedproduk);
    }

    public function viewall()
    {
        $selected=1;
        
        $logstock=transaksi::join('produks', 'transaksi.id_barang', '=', 'produks.id')->where('kode_transaksi',$selected)->where('produks.id_distributor',Sentinel::getUser()->id)->paginate(4, ['*'], 'logstock');
        $produk=produk::all();
        $selecteds=2;
        $logsales=transaksi::join('produks', 'transaksi.id_barang', '=', 'produks.id')->where('kode_transaksi',$selecteds)->where('produks.id_distributor',Sentinel::getUser()->id)->paginate(4, ['*'], 'logsales');
       
         return view('front.supplieroverall')->with('stock',$logstock)->with('produk',$produk)->with('sales',$logsales);
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
