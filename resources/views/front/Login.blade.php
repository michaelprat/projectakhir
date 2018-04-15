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
                <div class="col-md-6 col-md-offset-6">
                <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Login</h3>
                        </div>
                        <br>
                        
                        <div class="panel-body">
                        {!! Form::open(['route' => 'login.store', 'role' => 'form']) !!}
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::label('email', 'Alamat email') !!}    
                                    {!! Form::text('email', null, array('size'=>14,'placeholder'=>'input email','class'=>'form-control')) !!}	
                                    </div>
                                    <div class="form-group">
                                    {!! Form::label('password', 'Password') !!}  
                                    {!! Form::password('password',array('size'=>14,'placeholder'=>'input password','class'=>'form-control')) !!}
                                    </div>
                                    <div class="form-group">
                               {{--     {!! link_to(route('sign-up.index'),'Daftar akun')!!} --}}
                                   &nbsp;
                                   {!! link_to(route('reminders.create'),'Forgot Password?')!!}
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    {!! Form::submit('Login', array('class' => 'btn btn-lg btn-success btn-block')) !!}
                                    </div>
                                </fieldset>
                            </form>
                            
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