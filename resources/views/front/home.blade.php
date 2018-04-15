@extends('layout.index')
@section('title') Anime Shop
@endsection

@section('content')
<section class="hero text-center">
            <br/>
            <br/>
            <br/>
            <br/>
            <h2 >
                <strong>
                    Welcome to Hobby Shop 
                </strong>
            </h2>
            <br>
            <a href="{{url('/login')}}">    <button class="button large">Please Login To Continue</button></a>
        </section>
        <br/>
        <div class="subheader text-center">
             <h2>
            Recent Products Updated
        </h2>
        </div>
      
        <div class="row">
        @foreach($produk as $tampil)
        
        <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                     
                        <a href="#">
                            <img src='{{asset("images/$tampil->namagambar")}}' width="300px !important" height="200px !important">
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                         {{$tampil->nama}}
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
     

          
@endsection