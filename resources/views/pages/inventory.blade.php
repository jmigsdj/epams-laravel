<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Elevated Play Asset Management System">
    <meta name="author" content="Miguel de Jesus | Joanne de Vera">

    <title>EPAMS | Inventory Page</title>

    {{ Html::style('css/bootstrap.min.css')}}
    {{ Html::style('css/styles.css')}}

</head>

<body>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <h1 class="page-header">
          Inventory
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
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
      </div>
    </div>


    @include('partials._javascript')

</body>

</html>
