@extends('main')

@section('title', '| Show Employee')

@section('content')

  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">
              Employee
          </h1>
          <ol class="breadcrumb">
              <li>
                  <i class="fa fa-table"></i>  <a href="/employees">Employees</a>
                  <i class="fa fa-user"></i>  <a href="#">User</a>
              </li>
          </ol>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <p><b>Name:</b></p>
            <input type="text" placeholder="{{ $employee->name }}" name="title" class="form-control" disabled />
            <p><b>Email:</b></p>
            <input type="text" placeholder="{{ $employee->email }}" name="title" class="form-control" disabled />

          </div>
        </div>
      </div>
  </div>


@endsection
