@extends('main')

@section('title', '| Register')

@section('content')

  <!-- you need csrf protection if you are not using form helpers-->

  <div class="row">
    <div class="col-md-8">
      <h1>Hi Welcome to Elevated Play Asset Management System!</h1>
    </div>
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Register</div>
        <div class="panel-body">
          {!! Form::open() !!}

              {{ Form::label('name', 'Name:') }}
              {{ Form::text('name', null, ['class' => 'form-control'])}}

              {{ Form::label('email', 'Email:') }}
              {{ Form::email('email', null, ['class' => 'form-control'])}}

              {{ Form::label('password', 'Password:') }}
              {{ Form::password('password', ['class' => 'form-control'])}}

              {{ Form::label('password_confirmation', 'Confirm Password:') }}
              {{ Form::password('password_confirmation', ['class' => 'form-control'])}}
              <br>
              {{ Form::submit('Register', ['class' => 'btn btn-primary btn-block form-spacing-top']) }}

          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>

@endsection
