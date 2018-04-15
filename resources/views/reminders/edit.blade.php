@extends('layout.indexlog')
@section('title') Reset Password
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
                            <h3 class="panel-title">Change Password</h3>
                        </div>
                        <br>
						<div class="panel-body">
              {!! Form::open(['route' => ['reminders.update',$id,$code], 'role' => 'form']) !!}
   
                                <fieldset>
								      <div class="form-group">
                                    {!! Form::label('password', 'Masukan Password baru') !!}  
                                    {!! Form::password('password', array('class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group">
                                    {!! Form::label('password_confirmation', 'Masukan ulang Password baru') !!}  
                                    {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
                                    </div>
                                    {!! link_to(route('login'),'Back to  login page ')!!}
                                    </div>
       
		                   {!! Form::submit('Ganti password', array('class' => 'btn btn-lg btn-success btn-block')) !!}
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection