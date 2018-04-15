@extends('layout.indexlog')
@section('title') Anime Shop
@endsection

@section('content')
<div class="container">
        <br>
        <br>
        <br>
        <br>
            <div class="row">
                <div class="col-md-8 col-md-offset-6">
                <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sign Up New Account</h3>
                        </div>
                        <br>
                        
                        <div class="panel-body">
                        {!! Form::open(['route' => 'signup.store', 'role' => 'form']) !!}
                      
                                <fieldset>
                                    <div class="form-group">
                                               
                                   {!! Form::label('first_name', 'Nama depan') !!}    
                                    {!! Form::text('first_name', null, array('class' => 'form-control')) !!}
                                        
                                    </div>
                                    <div class="form-group">
                                    {!! Form::label('last_name', 'Nama belakang') !!}    
                                    {!! Form::text('last_name', null, array('class' => 'form-control')) !!}
                                        
                                    </div>
                                    <div class="form-group">
                                    {!! Form::label('telephone', 'Telephone number') !!}    
                                    {!! Form::text('telephone', null, array('class' => 'form-control','placeholder'=>'example :+62xxx')) !!}
                                        
                                    </div>
                                    <div class="form-group">
                                    {!! Form::label('email', 'Alamat email') !!}    
                                    {!! Form::text('email', null, array('class' => 'form-control','placeholder'=>'example@org.com')) !!}
                                        
                                    </div>
                                    <div class="form-group">
                                    {!! Form::label('address', 'Enter address') !!}    
                                    {!! Form::text('address', null, array('class' => 'form-control','placeholder'=>'George Street')) !!}
                                        
                                    </div>
                                    <div class="form-group">
                                    {!! Form::label('password', 'Password') !!}  
                                    {!! Form::password('password', array('class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group">
                                    {!! Form::label('password_confirmation', 'Masukan ulang Password') !!}  
                                    {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group">
                                    {!! Form::label('role', 'pick a role') !!}  
                                {!! Form::select('role', ['User' => 'User', 'Supplier' => 'Supplier'], null, ['placeholder' => 'Pick a role...'],array('class' => 'form-control')) !!}
                                   &nbsp;      
                            </div>
                                    <div class="form-group">
                                 {{--   {!! link_to(route('log-in.index'),'Kembali ke halaman login')!!} --}}
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    {!! Form::submit('Signup', array('class' => 'btn btn-lg btn-success btn-block')) !!}
                                    <br>
                                    {!! Form::reset('Reset', array('class' => 'btn btn-lg btn-success btn-block')) !!}
                                  
                                </fieldset>
                                {!! Form::close() !!}

                                               <br>
                                 @if(count($errors)>0)
	 
	                                            <ul>
		                              @foreach($errors->all() as $error)
		                            <li>{{$error}}</li>
			                          @endforeach
			                                 </ul>
			
			                              @endif
                                 @if (Session::has('message2'))
                                    <div class="alert alert-info">{{ Session::get('message2') }}</div>
                                         @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>





@endsection