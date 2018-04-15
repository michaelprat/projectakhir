@extends('admin_layout.admin.layout.supplier')
@section('content')
    <h3>Add Product by excel </h3>
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

	    <form action="{{URL::to('importExcel')}}" method="POST" enctype="multipart/form-data">
		  <input type="file" name="import_file"></input>
		   <input type="hidden" name="_token" value="{{csrf_token()}}"></input>
		   <button class="btn btn-primary">Import File</button>
		  </form>
      
   </div>
    </div>
@endsection