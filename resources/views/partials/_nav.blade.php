<!-- Default Navbar Bootstrap -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">EPAMS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
        <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">About</a></li>
        <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>
        <li class="{{ Request::is('assets') ? "active" : "" }}"><a href="{{ route('assets.index')}}">Assets</a></li>
        <li class="{{ Request::is('employees') ? "active" : "" }}"><a href="{{ route('employees.index')}}">Employees</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- Auth::check() built in method to check if user is logged in -->
        @if(Auth::check())

        <li class="dropdown">
          <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }}<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('assets.index')}}">Posts</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{route('logout')}}">Logout</a></li>
          </ul>
        </li>

        @else

          <li><a href="{{route('register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
