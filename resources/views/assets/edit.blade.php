@extends('main')

@section('title', '| Edit Asset')

@section('content')

  <div class="row">
    <!-- Form::model will let us pull from the database | Model-Form Binding-->
    {!! Form::model($asset, ['route' => ['assets.update', $asset->id], 'method' => 'PUT',  'data-parsley-validate' => '']) !!}
    <div class="col-sm-3">
          {{ Form::label('tracker', 'Tracker:')}}
          {{ Form::text('tracker', null, array('class' => 'form-control'))}}

          {{ Form::label('barcode', 'Barcode:')}}
          {{ Form::text('barcode', null, array('class' => 'form-control'))}}

          {{ Form::label('name', 'Name:')}}
          {{ Form::text('name', null, array('class' => 'form-control'))}}

          {{ Form::label('brand', 'Brand:')}}
          {{ Form::text('brand', null, array('class' => 'form-control'))}}

          {{ Form::label('status', 'Status:')}}
          {{ Form::text('status', null, array('class' => 'form-control'))}}

          {{ Form::label('condition', 'Condition:')}}
          {{ Form::text('condition', null, array('class' => 'form-control'))}}

          {{ Form::label('model', 'Model:')}}
          {{ Form::text('model', null, array('class' => 'form-control'))}}
    </div>
    <div class="col-sm-3">
          {{ Form::label('resolution', 'Resolution:')}}
          {{ Form::text('resolution', null, array('class' => 'form-control'))}}

          {{ Form::label('processor', 'Processor:')}}
          {{ Form::text('processor', null, array('class' => 'form-control'))}}

          {{ Form::label('ram', 'RAM:')}}
          {{ Form::text('ram', null, array('class' => 'form-control'))}}

          {{ Form::label('os', 'OS:')}}
          {{ Form::text('os', null, array('class' => 'form-control'))}}

          {{ Form::label('chipset', 'Chipset:')}}
          {{ Form::text('chipset', null, array('class' => 'form-control'))}}

          {{ Form::label('gpu', 'GPU:')}}
          {{ Form::text('gpu', null, array('class' => 'form-control'))}}

          {{ Form::label('bit', 'x32/x64:')}}
          {{ Form::text('bit', null, array('class' => 'form-control'))}}
    </div>
    <div class="col-sm-3">
          {{ Form::label('screenSize', 'Screen Size:')}}
          {{ Form::text('screenSize', null, array('class' => 'form-control'))}}

          {{ Form::label('graphics', 'Graphics (hardware):')}}
          {{ Form::text('graphics', null, array('class' => 'form-control'))}}

          {{ Form::label('internalStorage', 'Internal Storage:')}}
          {{ Form::text('internalStorage', null, array('class' => 'form-control'))}}

          {{ Form::label('simSupport', 'Sim Support:')}}
          {{ Form::text('simSupport', null, array('class' => 'form-control'))}}

          {{ Form::label('arrivalDate', 'Arrival Date:')}}
          {{ Form::text('arrivalDate', null, array('class' => 'form-control'))}}

          {{ Form::label('arrivalNotes', 'Arival Notes:')}}
          {{ Form::text('arrivalNotes', null, array('class' => 'form-control'))}}

          {{ Form::label('mac', 'MAC/Wifi Address:')}}
          {{ Form::text('mac', null, array('class' => 'form-control'))}}
    </div>
    <div class="col-sm-3">
          {{ Form::label('serial', 'Serial:')}}
          {{ Form::text('serial', null, array('class' => 'form-control'))}}

          {{ Form::label('assetType', 'Asset Type:')}}
          {{ Form::text('assetType', null, array('class' => 'form-control'))}}

          {{ Form::label('subAsset', 'Sub-asset type:')}}
          {{ Form::text('subAsset', null, array('class' => 'form-control'))}}

          {{ Form::label('imei', 'IMEI:')}}
          {{ Form::text('imei', null, array('class' => 'form-control'))}}

          {{ Form::label('storageAllocation', 'Storage Allocation:')}}
          {{ Form::text('storageAllocation', null, array('class' => 'form-control'))}}

          {{ Form::label('category', 'Category:')}}
          {{ Form::text('category', null, array('class' => 'form-control'))}}
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
            {!! Html::linkRoute('assets.show', 'Cancel', array($asset->id), array('class' => 'btn btn-danger btn-block' ))!!}
            <!--static html
            <a href="#" class="btn btn-primary btn-block">Edit</a>
            -->
          </div>
          <div class="col-sm-6">
            {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
