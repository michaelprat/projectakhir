@extends('layout.index')
@section('title') Anime Shop
@endsection

@section('content')


<br>
<br>
<br>
<div class="subheader text-center">
             <h2>
           @if($selected==1)
            Book Products 
            @else
            Hobby Products
            @endif
        </h2>
        </div>
<div class="row">
{!! Form::open(['route'=>'viewproduct.store']) !!}
    {!! Form::select('id_kategori', $kategori, null, ['placeholder' => 'Choose Category of the product...']) !!}
    {!! Form::submit('Change Category') !!}
    {!!Form::close() !!}
   </div>
<br>
<br>
<br>
 <div class="row">
        @foreach($produk as $tampil)
      
        <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                     
                        <a href="#">
                            <img src='{{asset("images/$tampil->namagambar")}}' width="300px !important" height="200px !important"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                         {{$tampil->nama}}
                         @if($tampil->quantity==0)
                          (Sold Out)
                         @endif
                        </h3>
                    </a>
                    <h5>
                        Rp.{{$tampil->harga}}
                    </h5>
                    <p>
                        {{$tampil->description}}    
                    </p>
                 
                </div>
           
        </div>
        @endforeach
      
</div>
        <!-- Footer -->
        <br>
        <br>
        <br>
       
        <div class="subheader text-center">
						
                        {!! $produk->render() !!}
        </div>
      
       <br>
        <br>
        <br>
         <br>
        <br>
        <br>
     
      

     

          
@endsection