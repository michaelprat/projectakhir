@extends('layout.indexlog')
@section('title') Recover Password
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
                            <h3 class="panel-title">Lupa Password</h3>
                        </div>
                        <br>
						<div class="panel-body">
						{!! Form::open(['route' => 'reminders.store', 'role' => 'form']) !!}
                                <fieldset>
                                    <div class="form-group">
                                    {!! Form::label('email', 'Enter your email') !!}    
                                    {!! Form::text('email', null, array('size'=>14,'placeholder'=>'input email','class'=>'form-control')) !!}	
									</div>  
									<div class="form-group">
                                    {!! link_to(route('login'),'Kembali ke halaman login')!!}
                                    </div>
       
		 {!! Form::submit('Change Password', array('class' => 'btn btn-lg btn-success btn-block')) !!}
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