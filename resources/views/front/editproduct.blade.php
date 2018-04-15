@extends('admin_layout.admin.layout.supplier')
@section('content')
    <h3>Edit Product </h3>
    <br>
    <br>    
    @if(count($errors)>0)
	   <div class="alert alert-danger"
	     <ul>
		   @foreach($errors->all() as $error)
		     <li>{{$error}}</li>
			 @endforeach
			</ul>
			</div>
			@endif
		   
    <div class="row">
    <div class="col-md-6 col-md-offset-3">
    {!! Form::model($produk,['route'=>['produk.update',$produk->id],'method'=>'put','files'=>true])!!}
    <div class="form-group">
    {!! Form::label('nama','Enter the name of the product') !!}
    {!! Form::text('nama',null,array('class'=>'form-control')) !!}
    </div>
    <div class="form-group">
    {!! Form::label('description','Enter the description of the product') !!}
    {!! Form::text('description',null,array('class'=>'form-control')) !!}
    </div>
    <div class="form-group">
    {!! Form::label('quantity','Enter the quantity of the product') !!}
    {!! Form::number('quantity',null,array('class'=>'form-control')) !!}
    </div>

    <div class="form-group">
    {!! Form::label('harga','Enter the price of the product') !!}
    {!! Form::number('harga',null,array('class'=>'form-control')) !!}
    </div>
    <div class="form-group">
    {!! Form::label('name','Enter the category of the product') !!}
    {!! Form::select('id_kategori', $kategori, null, ['placeholder' => 'Choose Category of your product...','class'=>'form-control']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('gambar','Enter the image of the product') !!}
    {!! Form::file('gambar',  ['class'=>'form-control']) !!}
    </div>
    {!! Form::submit('Add Product', array('class' => 'btn btn-lg btn-success btn-block')) !!}
                         <br>
    {!! Form::reset('Reset', array('class' => 'btn btn-lg btn-success btn-block')) !!}
    {!!Form::close() !!}
    </div>
    </div>
@endsection