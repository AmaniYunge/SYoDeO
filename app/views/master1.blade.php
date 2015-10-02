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
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <!-- Widgets stylesheet -->
    <link rel="stylesheet" href="{{URL::asset('css/widgets.css')}}">

   {{HTML::script('js/respond.min.js')}}
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon.png">
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
            <a href="index.html" class="navbar-brand hidden-lg">SYoDeO</a>
        </div>



        <!-- Navigation starts -->
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <!-- Links -->
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown pull-right">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                        <i class="fa fa-user"></i> Admin <b class="caret"></b>
                    </a>

                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu">
                        <li><a href="index.html#"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="index.html#"><i class="fa fa-cogs"></i> Settings</a></li>
                        <li><a href="login.html"><i class="fa fa-sign-out"></i> Logout</a></li>
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
                    <h1><a href="index.html#">SYo<span class="bold">Deo</span></a></h1>
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
                    <p class="copy">Copyright &copy; 2014 | <a href="index.html#">SYoDeO</a> </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer ends -->
</div>


<!-- Scroll to top -->
<span class="totop"><a href="index.html#"><i class="fa fa-chevron-up"></i></a></span>

<!-- JS -->
{{HTML::script('js/jquery.js')}}<!-- jQuery -->
{{HTML::script('js/bootstrap.min.js')}}<!-- Bootstrap -->
{{HTML::script('js/jquery-ui.min.js')}}<!-- jQuery UI -->
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



<!-- Script for this page -->
<script type="text/javascript">
    $(function () {

        /* Bar Chart starts */

        var d1 = [];
        for (var i = 0; i <= 20; i += 1)
            d1.push([i, parseInt(Math.random() * 30)]);

        var d2 = [];
        for (var i = 0; i <= 20; i += 1)
            d2.push([i, parseInt(Math.random() * 30)]);


        var stack = 0, bars = true, lines = false, steps = false;

        function plotWithOptions() {
            $.plot($("#bar-chart"), [ d1, d2 ], {
                series: {
                    stack: stack,
                    lines: { show: lines, fill: true, steps: steps },
                    bars: { show: bars, barWidth: 0.8 }
                },
                grid: {
                    borderWidth: 0, hoverable: true, color: "#777"
                },
                colors: ["#ff6c24", "#ff2424"],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0.9 }, { opacity: 0.8 } ] }
                }
            });
        }

        plotWithOptions();

        $(".stackControls input").click(function (e) {
            e.preventDefault();
            stack = $(this).val() == "With stacking" ? true : null;
            plotWithOptions();
        });
        $(".graphControls input").click(function (e) {
            e.preventDefault();
            bars = $(this).val().indexOf("Bars") != -1;
            lines = $(this).val().indexOf("Lines") != -1;
            steps = $(this).val().indexOf("steps") != -1;
            plotWithOptions();
        });

        /* Bar chart ends */

    });


    /* Curve chart starts */

    $(function () {
        var sin = [], cos = [];
        for (var i = 0; i < 14; i += 0.5) {
            sin.push([i, Math.sin(i)]);
            cos.push([i, Math.cos(i)]);
        }

        var plot = $.plot($("#curve-chart"),
            [ { data: sin, label: "sin(x)"}, { data: cos, label: "cos(x)" } ], {
                series: {
                    lines: { show: true, fill: true},
                    points: { show: true }
                },
                grid: { hoverable: true, clickable: true, borderWidth:0 },
                yaxis: { min: -1.2, max: 1.2 },
                colors: ["#1eafed", "#1eafed"]
            });

        function showTooltip(x, y, contents) {
            $('<div id="tooltip">' + contents + '</div>').css( {
                position: 'absolute',
                display: 'none',
                top: y + 5,
                left: x + 5,
                border: '1px solid #000',
                padding: '2px 8px',
                color: '#ccc',
                'background-color': '#000',
                opacity: 0.9
            }).appendTo("body").fadeIn(200);
        }

        var previousPoint = null;
        $("#curve-chart").bind("plothover", function (event, pos, item) {
            $("#x").text(pos.x.toFixed(2));
            $("#y").text(pos.y.toFixed(2));

            if ($("#enableTooltip:checked").length > 0) {
                if (item) {
                    if (previousPoint != item.dataIndex) {
                        previousPoint = item.dataIndex;

                        $("#tooltip").remove();
                        var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);

                        showTooltip(item.pageX, item.pageY,
                            item.series.label + " of " + x + " = " + y);
                    }
                }
                else {
                    $("#tooltip").remove();
                    previousPoint = null;
                }
            }
        });

        $("#curve-chart").bind("plotclick", function (event, pos, item) {
            if (item) {
                $("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
                plot.highlight(item.series, item.datapoint);
            }
        });

    });

    /* Curve chart ends */
</script>

</body>
</html>