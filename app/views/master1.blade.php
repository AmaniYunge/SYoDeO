<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <!-- Title and other stuffs -->
    <title>SYoDeO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
    <!-- jQuery UI -->
    <link rel="stylesheet" href="{{URL::asset('css/jquery-ui.css')}}">
    <!-- Calendar -->
    <link rel="stylesheet" href="{{URL::asset('css/fullcalendar.css')}}">
    <!-- prettyPhoto -->
    <link rel="stylesheet" href="{{URL::asset('css/prettyPhoto.css')}}">
    <!-- Star rating -->
    <link rel="stylesheet" href="{{URL::asset('css/rateit.css')}}">
    <!-- Date picker -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap-datetimepicker.min.css')}}">
    <!-- CLEditor -->
    <link rel="stylesheet" href="{{URL::asset('css/jquery.cleditor.css')}}">
    <!-- Data tables -->
    <link rel="stylesheet" href="{{URL::asset('css/jquery.dataTables.css')}}">
    <!-- Bootstrap toggle -->
    <link rel="stylesheet" href="{{URL::asset('css/jquery.onoff.css')}}">
    <!-- Main stylesheet -->
    <link rel="stylesheet" href="{{URL::asset('css/style1.css')}}">
    <!-- Widgets stylesheet -->
    <link rel="stylesheet" href="{{URL::asset('css/widgets.css')}}">
    <link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap-theme.css')}}">
    <link rel="stylesheet" href="{{URL::asset('font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{URL::asset('jqueryui/css/start/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{URL::asset('DataTables/media/css/jquery.dataTables.css')}}">
    <link rel="stylesheet" href="{{URL::asset('DataTables/media/css/jquery.dataTables_themeroller.css')}}">
    <link rel="stylesheet" href="{{URL::asset('style/delta.main.css')}}">
    <link rel="stylesheet" href="{{URL::asset('style/delta.grey.css')}}">

   {{HTML::script('js/respond.min.js')}}
   {{HTML::script('js/jquery-1.9.1.js')}}
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>

<div class="navbar navbar-fixed-top bs-docs-nav" role="banner">

    <div class="conjtainer">
        <!-- Menu button for smallar screens -->
        <div class="navbar-header">
            <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span>Menu</span>
            </button>
            <!-- Site name for smallar screens -->
            <a href="{{url('/')}}" class="navbar-brand hidden-lg"><img src="{{asset('images/logo.png')}}"  style="width:194px; height:42px" alt="SYoDeO" /></a>
        </div>



        <!-- Navigation starts -->
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <!-- Links -->
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown pull-right">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="{{url('/')}}#">
                        <i class="fa fa-user"></i> Administrator <b class="caret"></b>
                    </a>

                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/')}}#"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="{{url('/')}}#"><i class="fa fa-cogs"></i> Settings</a></li>
                        <li><a href="{{url('login')}}"><i class="fa fa-sign-out"></i> Logout</a></li>
                    </ul>
                </li>

            </ul>
        </nav>

    </div>
</div>


<!-- Header starts -->
<header>
    <div class="container">
        <div class="row">

            <!-- Logo section -->
            <div class="col-md-4">
                <!-- Logo. -->
                <div class="logo">
                    <h1><a href="{{url('service/manage')}}"><img src="{{asset('images/logo.png')}}"  style="width:174px; height:42px" alt="SYoDeO" /></a></h1>
                </div>
                <!-- Logo ends -->
            </div>

        </div>
    </div>
</header>

<!-- Header ends -->
<div class="row">
    <div class="col-md-12">
        <div class="col-md-2">
            @include('sideMenu')
        </div>


        <!-- Main content starts -->

        <div class=" col-md-10">
            @yield('content')
        </div>
    </div>

    <!-- Footer starts -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Copyright info -->
                    <p  class="copy" >Copyright &copy; 2014 | <a href="{{url('service/manage')}}">SYoDeO</a> </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer ends -->
</div>

<!-- JS -->
{{HTML::script('js/jquery.min.js')}}<!-- jQuery -->
{{HTML::script('js/jquery-ui.min.js')}}<!-- jQuery UI -->
{{HTML::script('js/bootstrap.min.js')}}<!-- Bootstrap -->
{{HTML::script('js/fullcalendar.min.js')}} <!-- Full Google Calendar - Calendar -->
{{HTML::script('js/jquery.rateit.min.js')}} <!-- RateIt - Star rating -->
{{HTML::script('js/jquery.prettyPhoto.js')}} <!-- prettyPhoto -->
{{HTML::script('js/jquery.slimscroll.min.js')}} <!-- jQuery Slim Scroll -->
{{HTML::script('js/jquery.dataTables.min.js')}}<!-- Data tables -->
<!-- jQuery Flot -->
{{HTML::script('js/excanvas.min.js')}}
{{HTML::script('js/jquery.flot.js')}}
{{HTML::script('js/jquery.flot.resize.js')}}
{{HTML::script('js/jquery.flot.pie.js')}}
{{HTML::script('js/jquery.flot.stack.js')}}
<!-- jQuery Notification - Noty -->
{{HTML::script('js/jquery.noty.js')}}<!-- jQuery Notify -->
{{HTML::script('js/themes/default.js')}}<!-- jQuery Notify -->
{{HTML::script('js/layouts/bottom.js')}}<!-- jQuery Notify -->
{{HTML::script('js/layouts/topRight.js')}}<!-- jQuery Notify -->
{{HTML::script('js/layouts/top.js')}}<!-- jQuery Notify -->
<!-- jQuery Notification ends -->

{{HTML::script('js/sparklines.js')}}<!-- Sparklines -->
{{HTML::script('js/jquery.cleditor.min.js')}}<!-- CLEditor -->
{{HTML::script('js/bootstrap-datetimepicker.min.js')}}<!-- Date picker -->
{{HTML::script('js/jquery.onoff.min.js')}}<!-- Bootstrap Toggle -->
{{HTML::script('js/filter.js')}}<!-- Filter for support page -->
{{HTML::script('js/custom.js')}} <!-- Custom codes -->
{{HTML::script('js/charts.js')}} <!-- Charts & Graphs -->

{{ HTML::script("js/jquery.form.js") }}
{{ HTML::script("jqueryui/js/jquery-ui-1.10.3.custom.js") }}
{{ HTML::script("bootstrap/js/bootstrap.js") }}
{{ HTML::script("DataTables/media/js/jquery.dataTables.js") }}
{{ HTML::script("/js/jquery.form.js") }}
{{ HTML::script("Highcharts/js/highcharts.js") }}
{{ HTML::script("Highcharts/js/themes/gray.js") }}
{{ HTML::script("Highcharts/js/modules/exporting.js") }}
</body>
</html>
