@extends('admin_layout.admin.layout.admin')
@section('content')
<h3>Update data  User </h3>
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
    {!! Form::model($user,['route'=>['homeadm.update',$user->id],'method'=>'put'])!!}
   
    <div class="form-group">
    {!! Form::label('first_name','Enter the first name') !!}
    {!! Form::text('first_name',null,array('class'=>'form-control')) !!}
    </div>
    <div class="form-group">
    {!! Form::label('last_name','Enter the last name') !!}
    {!! Form::text('last_name',null,array('class'=>'form-control')) !!}
    </div>
    <div class="form-group">
    {!! Form::label('address','Enter the Address') !!}
    {!! Form::text('address',null,array('class'=>'form-control')) !!}
    </div>
    <div class="form-group">
    {!! Form::label('telephone','Enter the telephone number') !!}
    {!! Form::number('telephone',null,array('class'=>'form-control')) !!}
    </div>
    <div class="form-group">
    {!! Form::label('email','Enter the email') !!}
    {!! Form::text('email',null,array('class'=>'form-control')) !!}
    </div>
   
  
    {!! Form::submit('Update Data', array('class' => 'btn btn-lg btn-success btn-block')) !!}
                         <br>
    {!! Form::reset('Reset', array('class' => 'btn btn-lg btn-success btn-block')) !!}
    {!!Form::close() !!}
    </div>
    </div>
@endsection