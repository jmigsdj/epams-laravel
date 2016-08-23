@extends('main')

@section('title', '| Show Asset')

@section('content')

  <div class="row">
    <div class="col-md-8">
      <p class="lead">Brand: {{ $asset->brand }} </p>
      <p class="lead">Name: {{ $asset->name }} </p>
      <p class="lead">Model: {{ $asset->model }} </p>
      <p class="lead">Resolution: {{ $asset->resolution }} </p>
      <p class="lead">Processor: {{ $asset->processor }} </p>
      <p class="lead">RAM: {{ $asset->ram }} </p>
    </div>

    <div class="col-md-4">
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

@endsection
