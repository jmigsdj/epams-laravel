@extends('main')

@section('title', '| Show Asset')

@section('content')

    <div class="row">
      <div class="col-sm-3">
          <div class="form-group">
            <p><b>Tracker:</b></p>
            <input type="text" placeholder="{{ $asset->tracker }}" name="title" class="form-control" disabled />
            <p><b>Barcode:</b></p>
            <input type="text" placeholder="{{ $asset->barcode }}" name="title" class="form-control" disabled />
            <p><b>Name:</b></p>
            <input type="text" placeholder="{{ $asset->name }}" name="title" class="form-control" disabled />
            <p><b>Brand:</b></p>
            <input type="text" placeholder="{{ $asset->brand }}" name="title" class="form-control" disabled />
            <p><b>Status:</b></p>
            <input type="text" placeholder="{{ $asset->status }}" name="title" class="form-control" disabled />
            <p><b>Condition:</b></p>
            <input type="text" placeholder="{{ $asset->condition }}" name="title" class="form-control" disabled />
            <p><b>Model:</b></p>
            <input type="text" placeholder="{{ $asset->model }}" name="title" class="form-control" disabled />
          </div>
      </div>
      <div class="col-sm-3">
          <div class="form-group">
            <p><b>Resolution:</b></p>
            <input type="text" placeholder="{{ $asset->resolution }}" name="title" class="form-control" disabled />
            <p><b>Processor:</b></p>
            <input type="text" placeholder="{{ $asset->processor }}" name="title" class="form-control" disabled />
            <p><b>RAM:</b></p>
            <input type="text" placeholder="{{ $asset->ram }}" name="title" class="form-control" disabled />
            <p><b>OS:</b></p>
            <input type="text" placeholder="{{ $asset->os }}" name="title" class="form-control" disabled />
            <p><b>Chipset:</b></p>
            <input type="text" placeholder="{{ $asset->chipset }}" name="title" class="form-control" disabled />
            <p><b>GPU:</b></p>
            <input type="text" placeholder="{{ $asset->gpu }}" name="title" class="form-control" disabled />
            <p><b>x32/x64:</b></p>
            <input type="text" placeholder="{{ $asset->bit }}" name="title" class="form-control" disabled />
          </div>
      </div>
      <div class="col-sm-3">
          <div class="form-group">
            <p><b>Screen Size:</b></p>
            <input type="text" placeholder="{{ $asset->screenSize }}" name="title" class="form-control" disabled />
            <p><b>Graphics (hardware):</b></p>
            <input type="text" placeholder="{{ $asset->graphics }}" name="title" class="form-control" disabled />
            <p><b>Internal Storage:</b></p>
            <input type="text" placeholder="{{ $asset->internalStorage }}" name="title" class="form-control" disabled />
            <p><b>Sim Support:</b></p>
            <input type="text" placeholder="{{ $asset->simSupport }}" name="title" class="form-control" disabled />
            <p><b>Arrival Date:</b></p>
            <input type="text" placeholder="{{ $asset->arrivalDate }}" name="title" class="form-control" disabled />
            <p><b>Arival Notes:</b></p>
            <input type="text" placeholder="{{ $asset->arrivalNotes }}" name="title" class="form-control" disabled />
            <p><b>MAC/Wifi Address:</b></p>
            <input type="text" placeholder="{{ $asset->mac }}" name="title" class="form-control" disabled />
          </div>
      </div>
      <div class="col-sm-3">
          <div class="form-group">
            <p><b>Serial:</b></p>
            <input type="text" placeholder="{{ $asset->serial }}" name="title" class="form-control" disabled />
            <p><b>Asset Type:</b></p>
            <input type="text" placeholder="{{ $asset->assetType }}" name="title" class="form-control" disabled />
            <p><b>Sub-asset type:</b></p>
            <input type="text" placeholder="{{ $asset->subAsset }}" name="title" class="form-control" disabled />
            <p><b>IMEI:</b></p>
            <input type="text" placeholder="{{ $asset->imei }}" name="title" class="form-control" disabled />
            <p><b>Storage Allocation:</b></p>
            <input type="text" placeholder="{{ $asset->storageAllocation }}" name="title" class="form-control" disabled />
            <p><b>Category:</b></p>
            <input type="text" placeholder="{{ $asset->category }}" name="title" class="form-control" disabled />
          </div>
      </div>
    </div>
    <hr>
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
              <!-- little form for delete -->
              {!! Form::open(['route' => ['assets.destroy', $asset->id], 'method' => 'DELETE']) !!}

              {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
