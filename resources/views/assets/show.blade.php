@extends('main')

@section('title', '| Show Asset')

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
      <div class="col-md-6">
          <div class="form-group">
            <p><b>Brand:</b></p>
            <input type="text" placeholder="{{ $asset->brand }}" name="title" class="form-control" disabled />
            <br>
            <p><b>Name:</b></p>
            <input type="text" placeholder="{{ $asset->name }}" name="title" class="form-control" disabled />
            <br>
            <p><b>Model:</b></p>
            <input type="text" placeholder="{{ $asset->model }}" name="title" class="form-control" disabled />
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
            <p><b>Resolution:</b></p>
            <input type="text" placeholder="{{ $asset->resolution }}" name="title" class="form-control" disabled />
            <br>
            <p><b>Processor:</b></p>
            <input type="text" placeholder="{{ $asset->processor }}" name="title" class="form-control" disabled />
            <br>
            <p><b>RAM:</b></p>
            <input type="text" placeholder="{{ $asset->ram }}" name="title" class="form-control" disabled />
          </div>
      </div>
    </div>

@endsection
