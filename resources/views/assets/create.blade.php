@extends('main')

@section('title', '| Create New Asset')

@section('stylesheets')

  {{ Html::style('css/parsley.css')}}

@endsection

@section('content')

  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <h1>Create New Post</h1>
          <hr>

          <!-- this is equivalent to <form></form> but with CSRF protection -->
          {!! Form::open(array('route' => 'assets.store', 'data-parsley-validate' => '')) !!}
              {{ Form::label('brand', 'Brand:')}}
              {{ Form::text('brand', null, array('class' => 'form-control', 'required' => ''))}}

              {{ Form::label('name', 'Name:')}}
              {{ Form::text('name', null, array('class' => 'form-control', 'required' => ''))}}

              {{ Form::label('model', 'Model:')}}
              {{ Form::text('model', null, array('class' => 'form-control', 'required' => ''))}}

              {{ Form::label('resolution', 'Resolution:')}}
              {{ Form::text('resolution', null, array('class' => 'form-control', 'required' => ''))}}

              {{ Form::label('processor', 'Processor:')}}
              {{ Form::text('processor', null, array('class' => 'form-control', 'required' => ''))}}

              {{ Form::label('ram', 'RAM:')}}
              {{ Form::text('ram', null, array('class' => 'form-control', 'required' => ''))}}

              {{ Form::submit('Create Asset', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px'))}}
          {!! Form::close() !!}
      </div>
  </div>

@endsection

@section('scripts')

  {{ Html::style('js/parsley.min.js')}}

@endsection
