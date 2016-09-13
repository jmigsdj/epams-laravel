@extends('main')

@section('title', '| All Assets')

@section('content')

    <div class="row">
      <div class="col-lg-10">
        <h1 class="page-header">
          Inventory
        </h1>
      </div>
    </div>
    <div class="row">
      <ol class="breadcrumb">
          <li>
              <i class="fa fa-dashboard"></i>  <a href="/dashboard">Dashboard |</a>
              <i class="fa fa-table"></i>  <a href="/inventory">Inventory</a>
          </li>
      </ol>
    </div>
    <hr>

    <div class="panel panel-default table-responsive">

        <table class="table table-sm table-condensed table-bordered">
          <thead>
            <th>ID</th>
            <th>Device Name</th>
            <th>Model</th>
            <th>Resolution</th>
            <th>Processor</th>
            <th>RAM</th>
            <th>OS</th>
            <th>GPU</th>
            <th>x32/x64</th>
            <th>Category</th>
            <th>Sim Support</th>
          </thead>

          <tbody>
            @foreach($assets as $asset)

              <tr>
                  <th>{{ $asset->id }}</th>
                  <td>{{ $asset->name}}</td>
                  <td>{{ $asset->model}}</td>
                  <td>{{ $asset->resolution}}</td>
                  <td>{{ $asset->processor}}</td>
                  <td>{{ $asset->ram}}</td>
                  <td>{{ $asset->os}}</td>
                  <td>{{ $asset->gpu}}</td>
                  <td>{{ $asset->bit}}</td>
                  <td>{{ $asset->category}}</td>
                  <td>{{ $asset->simSupport}}</td>
              </tr>

            @endforeach
          </tbody>
        </table>

        <!-- pagination for laravel from paginate() method-->
        <div class="text-center">
          {!! $assets->links(); !!}
        </div>


    </div>

@endsection
