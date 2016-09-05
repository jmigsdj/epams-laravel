<!DOCTYPE html>
<html lang="en">
  <head>
  @include('partials._head')
  </head>
  <body>

    <div id="wrapper">

      @include('partials._nav')

      <div id="page-wrapper">

          <div class="container-fluid">

            @include('partials._messages')

            @yield('content')

            @include('partials._footer')

          </div>
          <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper --> \

      </div>
      <!-- /#wrapper -->

      @include('partials._javascript')
      <!-- this loads after all the scripts are loaded -->
      @yield('scripts')

  </body>
</html>
