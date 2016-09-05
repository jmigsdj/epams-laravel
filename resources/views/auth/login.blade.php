@extends('main')

@section('title', '| Login')

@section('content')

  <!-- you need csrf protection if you are not using form helpers-->

  <div class="row">
    <div class="col-md-8">
      <h1>Hi Welcome to Elevated Play Asset Management System!</h1>
    </div>
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Login</div>
        <div class="panel-body">
          {!! Form::open() !!}

              {{ Form::label('email', 'Email:') }}
              {{ Form::email('email', null, ['class' => 'form-control'])}}

              {{ Form::label('password', 'Password:') }}
              {{ Form::password('password', ['class' => 'form-control'])}}

              <br>
              {{ Form::checkbox('remember', 'Email:') }}{{ Form::label('remember', "Remember Me")}}
              <br>
              {{ Form::submit('Login', ['class' => 'btn btn-success btn-block']) }}

          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>

@endsection
