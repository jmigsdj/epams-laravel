@extends('main')

@section('title', '| Edit Asset')

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="well">
        <dl class="dl-horizontal">
          <dt>Create At:</dt>
          <dd>{{ date('M j, Y h:ia', strtotime($asset->created_at))}}</dd>
        </dl>

        <dl class="dl-horizontal">
          <dt>Last Updated:</dt>
          <dd>{{date('M j, Y h:ia', strtotime($asset->updated_at))}}</dd>
        </dl>

        <hr>

        <div class="row">
          <div class="col-sm-6">
            <!-- laravel way of linking linkRoute(name of the rout, value)-->
            {!! Html::linkRoute('assets.edit', 'Edit', array($asset->id), array('class' => 'btn btn-primary btn-block' ))!!}
            <!--static html
            <a href="#" class="btn btn-primary btn-block">Edit</a>
            -->
          </div>

          <div class="col-sm-6">
            {!! Html::linkRoute('assets.destroy', 'Delete', array($asset->id), array('class' => 'btn btn-danger btn-block' ))!!}
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- Form::model will let us pull from the database | Model-Form Binding-->
    {!! Form::model($asset, ['route' => ['assets.update', $asset->id], 'method' => 'PUT',  'data-parsley-validate' => '']) !!}
    <div class="col-md-6">
          {{ Form::label('brand', 'Brand:') }}
          {{ Form::text('brand', null, ['class' => 'form-control', 'required' => '']) }}

          {{ Form::label('name', 'Name:') }}
          {{ Form::text('name', null, ['class' => 'form-control', 'required' => '']) }}

          {{ Form::label('model', 'Model:') }}
          {{ Form::text('model', null, ['class' => 'form-control', 'required' => '']) }}

    <div class="col-md-6">
          {{ Form::label('resolution', 'Resolution:') }}
          {{ Form::text('resolution', null, ['class' => 'form-control', 'required' => '']) }}

          {{ Form::label('processor', 'Processor:') }}
          {{ Form::text('processor', null, ['class' => 'form-control', 'required' => '']) }}

          {{ Form::label('ram', 'RAM:') }}
          {{ Form::text('ram', null, ['class' => 'form-control', 'required' => '']) }}
    </div>

  </div>

@endsection
