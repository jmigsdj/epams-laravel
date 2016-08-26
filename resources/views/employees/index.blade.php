@extends('main')

@section('title', '| All Employees')

@section('content')

    <div class="row">
      <div class="col-md-10">
        <h1>All Emplyees</h1>
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
            <th>Name</th>
            <th>Email</th>
            <th></th> <!-- this is for the buttons -->
          </thead>

          <tbody>
            @foreach($employees as $employee)
              <tr>
                  <th>{{ $employee->id }}</th>
                  <td>{{ $employee->name}}</td>
                  <td>{{ $employee->email}}</td>
                  <td><a href="{{ route('employees.show', $employee->id)}}" class="btn btn-default btn-sm">View</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>

        <!-- pagination for laravel from paginate() method-->
        <div class="text-center">
          {!! $employees->links(); !!}
        </div>

      </div>
    </div>

@endsection
