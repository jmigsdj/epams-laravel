@extends('main')

@section('title', '| All Assets')

@section('content')

    <div class="row">
      <div class="col-lg-10">
        <h1 class="page-header">
          Assets
          <small>Table</small>
        </h1>
      </div>
      <div class="col-lg-2">
        <a href="{{ route('assets.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing", style="margin-top:40px">Create New</a>
      </div>
    </div>
    <div class="row">
      <ol class="breadcrumb">
          <li>
              <i class="fa fa-dashboard"></i>  <a href="/dashboard">Dashboard |</a>
              <i class="fa fa-table"></i>  <a href="/assets">Assets</a>
          </li>
      </ol>
    </div>
    <hr>



    <div class="row">
      <div class="table-responsive">
        <table class="table table-sm table-condensed table-bordered">
          <thead>
            <th>ID</th>
            <th>Tracker</th>
            <th>Barcode</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Status</th>
            <th>Condition</th>
            <th>Model</th>
            <th>Resolution</th>
            <th>Processor</th>
            <th>RAM</th>
            <th>OS</th>
            <th>Chipset</th>
            <th>GPU</th>
            <th>x32/x64</th>
            <th>Screen Size</th>
            <th>Graphics (hardware)</th>
            <th>Internal Storage</th>
            <th>Sim Support</th>
            <th>Arrival Date</th>
            <th>Arival Notes</th>
            <th>MAC/Wifi Address</th>
            <th>Serial</th>
            <th>Asset Type</th>
            <th>Sub-asset type</th>
            <th>IMEI</th>
            <th>Storage Allocation</th>
            <th>Category</th>
            <th>Created At</th>
            <th></th> <!-- this is for the buttons -->
          </thead>

          <tbody>
            @foreach($assets as $asset)

              <tr>
                  <th>{{ $asset->id }}</th>
                  <td>{{ $asset->tracker}}</td>
                  <td>{{ $asset->barcode}}</td>
                  <td>{{ $asset->name}}</td>
                  <td>{{ $asset->brand}}</td>
                  <td>{{ $asset->status}}</td>
                  <td>{{ $asset->condition}}</td>
                  <td>{{ $asset->model}}</td>
                  <td>{{ $asset->resolution}}</td>
                  <td>{{ $asset->processor}}</td>
                  <td>{{ $asset->ram}}</td>
                  <td>{{ $asset->os}}</td>
                  <td>{{ $asset->chipset}}</td>
                  <td>{{ $asset->gpu}}</td>
                  <td>{{ $asset->bit}}</td>
                  <td>{{ $asset->screenSize}}</td>
                  <td>{{ $asset->graphics}}</td>
                  <td>{{ $asset->internalStorage}}</td>
                  <td>{{ $asset->simSupport}}</td>
                  <td>{{ $asset->arrivalDate}}</td>
                  <td>{{ $asset->arrivalNotes}}</td>
                  <td>{{ $asset->mac}}</td>
                  <td>{{ $asset->serial}}</td>
                  <td>{{ $asset->assetType}}</td>
                  <td>{{ $asset->subAsset}}</td>
                  <td>{{ $asset->imei}}</td>
                  <td>{{ $asset->storageAllocation}}</td>
                  <td>{{ $asset->category}}</td>
                  <td>{{ date('M j, Y', strtotime($asset->created_at))}}</td>
                  <td><a href="{{ route('assets.show', $asset->id)}}" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                      <a href="{{ route('assets.edit', $asset->id)}}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                      <!-- Delete button-->
                      {!! Form::open(['route' => ['assets.destroy', $asset->id], 'method' => 'DELETE']) !!}
                      {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                      {!! Form::close() !!}
                  </td>
              </tr>

            @endforeach
          </tbody>
        </table>

        <!-- pagination for laravel from paginate() method-->
        <div class="text-center">
          {!! $assets->links(); !!}
        </div>

      </div>
    </div>

@endsection
