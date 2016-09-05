<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/dashboard">Elevated Play Asset Management System</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
      <!-- Auth::check() built in method to check if user is logged in -->
      @if(Auth::check())

      <li class="dropdown">
        <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }}<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{route('assets.index')}}">Assets</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="{{route('logout')}}">Logout</a></li>
        </ul>
      </li>

      @else

        <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;Hello Tester!</a></li>

      @endif
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="{{ Request::is('dashboard') ? "active" : "" }}">
                <a href="/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li class="{{ Request::is('assets') ? "active" : "" }}">
                <a href="{{ route('assets.index')}}"><i class="fa fa-fw fa-table"></i> Assets</a>
            </li>
            <li class="{{ Request::is('employees') ? "active" : "" }}">
                <a href="{{ route('employees.index')}}"><i class="fa fa-fw fa-table"></i> Employees</a>
            </li>
            <li class="{{ Request::is('about') ? "active" : "" }}">
                <a href="/about"><i class="fa fa-fw fa-file"></i> About</a>
            </li>
            <li class="{{ Request::is('contact') ? "active" : "" }}">
                <a href="/contact"><i class="fa fa-fw fa-file"></i> Contact</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
