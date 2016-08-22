@extends('main')

@section('title', '| About')

@section('content')
        <div class="row">
          <div class="col-md-12">
            <h1>About {{$data['fullname']}}</h1>
            <p>Im a software engineer studying laravel framework!</p>
            <i>Email me at: {{$data['email']}}</i>
          </div>
        </div>
@endsection
