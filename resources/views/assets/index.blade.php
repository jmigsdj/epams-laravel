@extends('main')

@section('title', '| All Assets')

@section('content')

    <div class="row">
      <div class="col-md-10">
        <h1>All Assets</h1>
      </div>

      <div class="col-md-2">
        <a href="{{ route('assets.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New</a>
      </div>

      <div class="col-md-12">
        <hr>
      </div>
    </div><!-- end of row -->

    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <th>#</th>
            <th>Brand</th>
            <th>Name</th>
            <th>Model</th>
            <th>Resolution</th>
            <th>Processor</th>
            <th>RAM</th>
            <th>Created At</th>
            <th></th> <!-- this is for the buttons -->
          </thead>

          <tbody>
            @foreach($assets as $asset)

              <tr>
                  <th>{{ $asset->id }}</th>
                  <td>{{ $asset->brand}}</td>
                  <!-- substr is used to cut the text | strlen is used to get the length of the string and below is a conditional statement-->
                  <td>{{ substr($asset->name, 0, 50)}}{{strlen($asset->name) > 10 ? "..." : ""}}</td>
                  <td>{{ $asset->model}}</td>
                  <td>{{ $asset->resolution}}</td>
                  <td>{{ $asset->processor}}</td>
                  <td>{{ $asset->ram}}</td>
                  <td>{{ date('M j, Y', strtotime($asset->created_at))}}</td>
                  <td><a href="{{ route('assets.show', $asset->id)}}" class="btn btn-default btn-sm">View</a>
                      <a href="{{ route('assets.edit', $asset->id)}}" class="btn btn-default btn-sm">Edit</a>
                  </td>
              </tr>

            @endforeach
          </tbody>
        </table>
      </div>
    </div>

@endsection
