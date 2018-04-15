@extends('admin_layout.admin.layout.supplier')
@section('content')
<h3>Your Product </h3>
    <br>
    <br>    
    @if(count($errors)>0)
	   <div class="alert alert-danger"
	     <ul>
	     <ul>
		   @foreach($errors->all() as $error)
		     <li>{{$error}}</li>
			 @endforeach
			</ul>
			</div>
			@endif
	
    <div class="row">
    {!! Form::open(['url' =>'/ganti','method'=>'get']) !!}
    <div class="col-sm-">
    {!! Form::label('name','Change Category') !!}
    {!! Form::select('id_kategori', $kategori, null, ['placeholder' => 'Choose Category of your product...']) !!}
    {!! Form::submit('Change Category') !!}
    {!!Form::close() !!}
    </div>
   <br>
   <br>
   <br>
    <div class="col-md-offset-1">
    @foreach($produk as $tampil)
  
    <div class="gallery">
    
       <img src='{{asset("images/$tampil->namagambar")}}' alt="" width="300px !important" height="200px !important">
     
        <div class="desc">{{$tampil->nama}}</div>
        <div class="desc">Sisa barang: {{$tampil->quantity}}
        <br>
        Harga      : {{$tampil->harga}}<br>
        {!! link_to(route('produk.edit',$tampil->id),'Edit') !!}
        </div>
    
            </div>
        
    @endforeach
    
    </div>

    </div>
    <div class="pagination pagination-centered">
						
                        {!! $produk->render() !!}
                        </div>   
    </div>
@endsection