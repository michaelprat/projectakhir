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

class productcontroller extends Controller
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
        $id_distributor=Sentinel::getUser()->id;
        $produk=produk::where('id_kategori',$selected)->where('id_distributor',$id_distributor)->paginate(4);
       return view('front.listproduct')->with('produk',$produk)->with('kategori',$kategori);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
      $kategori=kategori::pluck('nama','id');
        return view('front.addproduct')->with('kategori',$kategori);
        
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
                  'nama'=>'required|max:255|min:1',
                  'harga'=>'required|numeric',
                  'quantity'=>'required|numeric|min:1',
                  'id_kategori'=>'required',
                  'gambar'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        if($request->description=="")
        {
            $request->description="no description";
        }
    
    $data=new produk;
    $data->nama=$request->nama;
    $data->quantity=$request->quantity;
    $data->description=$request->description;
    $data->id_kategori=$request->id_kategori;
    $data->harga=$request->harga;
    $data->id_distributor=Sentinel::getUser()->id;
    if($file=$request->hasFile('gambar'))
    {
        $file=$request->file('gambar');
        $fileName=$file->getClientOriginalName();
        $destinationPath=public_path()."\images";
        $path=$file->move($destinationPath,$fileName);
        $data->gambar=$path;
        $data->namagambar=$fileName;
    }
    $data->save();
     
     $transaksi=new transaksi;
     $qty=(string)$data->quantity;
     $transaksi->nama="Pemasukan barang"." ".$data->nama." "."Sebanyak"." ".$qty." buah";
     $transaksi->id_barang=$data->id;
     $transaksi->kode_transaksi=1;
     $transaksi->id_user=0;
     $transaksi->id_distributor=Sentinel::getUser()->id;
     $transaksi->barang_masuk=$qty;
     $transaksi->barang_keluar=0;
     $transaksi->save();
     return redirect()->route("homelog.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function tampilkategori(Request $request)
    {

        $this->validate($request,
        [
                
                  'id_kategori'=>'required',
            
        ]);
       


        if($request->id_kategori==1)
        {
        return redirect('produk');
        }
        else
        {
            return redirect('produk2');
        }


        
    }

     public function tampil0()
     {
        
         
         $kategori=kategori::pluck('nama','id');
         $selected=1;
         $id_distributor=Sentinel::getUser()->id;
         $zero=0;
         $produk=produk::where('id_kategori',$selected)->where('id_distributor',$id_distributor)->where('quantity',$zero)->paginate(4);
        return view('front.listproduct0')->with('produk',$produk)->with('kategori',$kategori);
     }
     public function tampilkategori0(Request $request)
    {

        $this->validate($request,
        [
                
                  'id_kategori'=>'required',
            
        ]);
        if($request->id_kategori==1)
        {
        return redirect('produk.tampil0');
        }
        else
        {
            return redirect('produk0');
        }
       
        
        
    }
     public function exceltampil()
     {
         return view('front.addproductexcel');
     }
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $find=produk::find($id);
        $kategori=kategori::pluck('nama','id');
        return view('front.editproduct')->with('produk',$find)->with('kategori',$kategori);
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
                  'nama'=>'required|max:255|min:1',
                  'harga'=>'required|numeric',
                  'quantity'=>'required|numeric|min:1',
                  'id_kategori'=>'required',
                  'gambar'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        $data=produk::find($id);
        $data->nama=$request->nama;
        $data->quantity=$request->quantity;
        $data->description=$request->description;
        $data->id_kategori=$request->id_kategori;
        $data->harga=$request->harga;
        $data->id_distributor=Sentinel::getUser()->id;
        if($file=$request->hasFile('gambar'))
        {
            if($data->namagambar!="no_image.jpg")
            {
            unlink($data->gambar);
            }    
            $file=$request->file('gambar');
            $fileName=$file->getClientOriginalName();
            $destinationPath=public_path()."\images";
            $path=$file->move($destinationPath,$fileName);
            $data->gambar=$path;
            $data->namagambar=$fileName;
        }
        $data->save();
        return redirect()->route("homelog.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
    public function importExcel()
    {

        //untuk import di laravel perlu masukan  
       //di bladenya <input type="hidden" name="_token" value="{{csrf_token()}}"></input> csrf_token untuk mengijinkan import di laravel
       
        if(Input::hasFile('import_file'))//mengecek file sudah masuk atau belum
        {
          
            $same=0;
            $path= Input::file('import_file')->getRealPath(); //ambil location file ada dimana
            $data=Excel::load($path,function($reader){})->get();//load data 
                if(!empty($data)&&$data->count())//jika ada jalanin looping buat masukin data ke model
                {
                    foreach($data as $key=>$val){  //ambil data value dari object
                      $same=0;
                      $dataproduk=produk::all();
                        foreach($dataproduk as $tampil)
                        {
                            if($tampil->nama==$val->nama && $tampil->id_distributor==Sentinel::getUser()->id)
                            {
                                $same=1;
                            }

                     
                        }
                        if($same==1)
                        {
                            $dataproduk=produk::select('id')->where('nama', $val->nama)->value('id');
                            $updateproduk=produk::find($dataproduk);
            
                            $updateproduk->quantity=$updateproduk->quantity+$val->quantity;
                            $updateproduk->description=$val->description;
                           if($val->kategori=="Buku")
                           {
                            $updateproduk->id_kategori=1;
                           }
                           else
                           {
                            $updateproduk->id_kategori=2;
                           }
                           $updateproduk->harga=$val->harga;
                            $updateproduk->save();
                            $qty=(string)$val->quantity;
                            $transaksi=new transaksi;
                            $transaksi->nama="Pemasukan barang"." ".$updateproduk->nama." "."Sebanyak"." ".$qty." buah";
                            $transaksi->id_barang=$updateproduk->id;
                            $transaksi->kode_transaksi=1;
                            $transaksi->id_user=0;
                            $transaksi->barang_masuk=$qty;
                            $transaksi->barang_keluar=0;
                            $transaksi->id_distributor=Sentinel::getUser()->id;
                            $transaksi->save();

                        }
                        else
                        {

                            $data=new produk;
                            $data->nama=$val->nama;
                            $data->quantity=$val->quantity;
                            $data->description=$val->description;
                            if($val->kategori=="Buku")
                            {
                             $data->id_kategori=1;
                            }
                            else
                            {
                             $data->id_kategori=2;
                            }
                            $data->harga=$val->harga;
                            $data->terjual=0;
                            $data->id_distributor=Sentinel::getUser()->id;
                            $data->gambar="C:\xampp\htdocs\projectakhir\public\images\no_image.jpg";
                            $data->namagambar="no_image.jpg";
                            $data->save();
                            $transaksi=new transaksi;
                            $qty=(string)$data->quantity;
                            $transaksi->nama="Pemasukan barang"." ".$data->nama." "."Sebanyak"." ".$qty." buah";
                            $transaksi->id_barang=$data->id;
                            $transaksi->kode_transaksi=1;
                            $transaksi->id_user=0;
                            $transaksi->barang_masuk=$qty;
                            $transaksi->barang_keluar=0;
                            $transaksi->id_distributor=Sentinel::getUser()->id;
                            $transaksi->save();


                        }
                   }
                }
        }
        return back();
    }
   

}
