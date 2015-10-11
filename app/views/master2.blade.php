<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SYoDeO</title>
    <!-- Core CSS - Include with every page -->
    {{ HTML::style("plugins/bootstrap/bootstrap.css") }}
    {{ HTML::style("font-awesome/css/font-awesome.css") }}
    {{ HTML::style("plugins/pace/pace-theme-big-counter.css") }}
    {{ HTML::style("css/style2.css") }}
    {{ HTML::style("css/main-style.css") }}

</head>

<body>
<!--  wrapper -->
<div id="wrapper">
<!-- navbar top -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
<!-- navbar-header -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html">
       <h2 class="  text-default pull-right" style="color: #D712C2">Strategic Youth Development Organization</h2>
    </a>
</div>
<!-- end navbar-header -->
<!-- navbar-top-links -->
<ul class="nav navbar-top-links navbar-right">
<!-- main dropdown -->



<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-user fa-3x"></i>
    </a>
    <!-- dropdown user-->
    <ul class="dropdown-menu dropdown-user">
        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
        </li>
        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
        </li>
        <li class="divider"></li>
        <li><a href="{{url('login2')}}"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
        </li>
    </ul>
    <!-- end dropdown-user -->
</li>
<!-- end main dropdown -->
</ul>
<!-- end navbar-top-links -->

</nav>
<!-- end navbar top -->

<!-- navbar side -->
@include('left2')
<!-- end navbar side -->
<!--  page-wrapper -->
<div id="page-wrapper">

    <div class="row">
        <!-- Page Header -->
        <div class="col-sm-12">
            <h1 class="page-header">@yield('title')</h1>
        </div>
        <!--End Page Header -->
        <div class="col-sm-12">
          @yield('content')
        </div>
    </div>



</div>
<!-- end page-wrapper -->

</div>
<!-- end wrapper -->

<!-- Core Scripts - Include with every page -->
{{ HTML::script("plugins/jquery-1.10.2.js") }}
{{ HTML::script("plugins/bootstrap/bootstrap.min.js") }}
{{ HTML::script("plugins/metisMenu/jquery.metisMenu.js") }}
{{ HTML::script("plugins/pace/pace.js") }}
{{ HTML::script("plugins/morris/morris.js") }}
{{ HTML::script("plugins/morris/raphael-2.1.0.min.js") }}
{{ HTML::script("scripts/siminta.js") }}
{{ HTML::script("scripts/dashboard-demo.js") }}

</body>

</html>
