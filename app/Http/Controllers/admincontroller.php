<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Session;
use App\User;
use App\transaksi;
use App\produk;
class admincontroller extends Controller
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
        $user=User::where('last_name','!=','admin')->get();
        $transaksi=transaksi::all();
        return view('front.homeadmin')->with('user',$user)->with('transaksi',$transaksi);
    }
    public function tampiluser()
    {
        $user=User::join('role_users','users.id','=','role_users.user_id')->where('last_name','!=','admin')->get();
        return view('front.listuser')->with('user',$user);
    
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
        $find=User::find($id);
        return view('front.updateuser')->with('user',$find);
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
        
        $this->validate($request,
        [
               
              'first_name'=>'required|max:255|min:1',
              'last_name'=>'required|max:255|min:1',
              'address'=>'required|min:1',
              'email' => 'required|email|unique:users',
              'telephone'=>'required|min:1',
            
             
        ]);
        User::find($id)->update($request->all());
      
        return redirect()->route('homeadm.index');
    }


    public function tampiltransaksi()
    {
        $selected=1;
        
        $logstock=transaksi::join('produks', 'transaksi.id_barang', '=', 'produks.id')->orderBy('transaksi.created_at','asc')->paginate(4, ['*'], 'logstock');
        $produk=produk::all();
        $selecteds=2;
        $logsales=transaksi::join('produks', 'transaksi.id_barang', '=', 'produks.id')->where('kode_transaksi',$selecteds)->orderBy('transaksi.created_at','desc')->paginate(4, ['*'], 'logsales');
       
         return view('front.listtransaksi')->with('stock',$logstock)->with('produk',$produk)->with('sales',$logsales);
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
