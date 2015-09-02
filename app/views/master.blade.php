<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>SYoDeO</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        {{ HTML::style("css/bootstrap/css/bootstrap.min.css") }}
        {{ HTML::style("css/style.css") }}
        {{ HTML::style("css/colors.css") }}
        {{ HTML::style("js/prettyphoto/css/prettyPhoto.css") }}
        {{ HTML::style("font-awesome/css/font-awesome.css") }}
	
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
    <![endif]-->

	
               
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    

</head>
  
 <body>
 <div class="mainWrap">
  <div class="wrap topbar">
    <div class="container">
    <ul class="social-media">
   <li><a class="facebook" href="index.html#" target="_blank">Facebook</a></li>
  <li><a class="twitter" href="index.html#" target="_blank">Twitter</a></li>
  <li><a class="gplus" href="index.html#" target="_blank">Google Plus</a></li>
  <li><a class="linkedin" href="index.html#" target="_blank">Linkedin</a></li>
  
    </ul>
</div><!--end container-->
</div><!--end topbar-->

<header class="wrap">
    <div class="container">
	<a class="logo" href="{{url('/')}}"><img src="{{asset('images/logo.png')}}"  style="width:194px; heighth:47" alt="SYoDeO" /></a>
    <nav id="nav-desktop">
    <ul class="menu">
   <li class="current_page_item"><a  href="{{url('/')}}">HOME</a>
   </li>
  <li><a  href="#">ABOUT US</a>
   <ul class="sub-menu">
   <li><a href="{{url('who')}}">Who We Are</a>
    <ul>
   <li><a href="{{url('team')}}">Our Team</a></li>
   </ul>
   </li>
   
   
   <li><a href="{{url('mission')}}">Our Mission</a>
   </li>
   <li><a href="{{url('vision')}}">Our Vision</a>
   </li>
   <li><a href="{{url('goals')}}">Overall goals</a></li>
   </ul>
  </li>
  <li><a  href="{{url('service')}}">SERVICES</a></li>
  <li><a  href="{{url('gallery')}}">GALLERY</a>
  <li><a  href="{{url('volunteer')}}">VOLUNTEERS</a></li>
  <li><a  href="{{url('contact')}}">CONTACT</a></li>
  </ul>
  </nav>
</div><!--end container-->
</header><!--end header-->

@yield('contents')

<footer class="wrap margin-block">
<div class="container">
<div class="row">
<div class="col-md-4 foo-block">
<h3>Board Members</h3>
<p>SYoDeO has Professional Board members; expert in different fields aiming to support Tanzanian young people to meet their goal in different dimension socially, economically, financially and culturally!</p>
<p>Address: Kinondoni, Dar es salaam, Tanzania</p>
<p>Phone: +255 754 2985 39/  +255 788 4082 80</p>
<p>Email: info@syodeo.org</p>
</div><!--end col-md-3-->

<div class="col-md-3 foo-block">
<h3>Recent News</h3>
<ul class="foo-news">
<li>
<div class="foo-date">May 12, 2015</div>
<h4><a href="index.html#">During the period of the training; second to third week, </a></h4>
</li>
<li>
<div class="foo-date">May 11, 2015</div>
<h4><a href="index.html#">During the period of the training; second to third week,</a></h4>
</li>
<li>
<div class="foo-date">May 10, 2015</div>
<h4><a href="index.html#">During the period of the training; second to third week,</a></h4>
</li>
</ul>
</div><!--end col-md-3-->
<div class="col-md-5 foo-block">
<h3>Quick FAQ</h3>
<ul class="foo-faq">
<li>
<h4>We are unique SINCE</h4>
<p>Mostly disadvantageous young people are the one who targeted with SYoDeO PROJECTS, individual or in a group of three to five young people.</p>
<p>SYoDeO makes follow up to their clients for the period of 2 years; where by a client can be financed with financial institution or microcredit bank.</p>
<p>SYoDeO provides one to eight weeks as a grace period depends with the type of the project.</p>
</li>
<li>
<h4>How do we operate!</h4>
<p>Any one who is interested with our service can send application through postal office using address in a contact page or you can deliver it at our office.</p>
</li>
</ul>
</div><!--end col-md-3-->

</div><!--end row-->
</div><!--end container-->
</footer><!--end wrap-->

<div class="wrap copy-holder">
<div class="container">
<div class="row">
<div class="col-md-12 copyright">
<span>&copy; 2015 <a href="{{url('/')}}">SYoDeO</a> by <a href="http://www.dotphics.co.tz/">Dotphics Co. Ltd</a></span>
</div><!--end copyright-->
</div><!--end row-->
</div><!--end container-->
</div><!--end wrap-->

</div><!--end mainWrap-->
</body>

     {{ HTML::script("js/jquery.min.js") }}
     {{ HTML::script("js/jquery-ui.min.js") }}
     {{ HTML::script("css/bootstrap/js/bootstrap.min.js") }}
     {{ HTML::script("js/menu.js") }}
     {{ HTML::script("js/jquery.flexslider.min.js") }}
     {{ HTML::script("js/jquery.easing.min.js") }}
     {{ HTML::script("js/prettyphoto/js/jquery.prettyPhoto.js") }}
     {{ HTML::script("twitter/jquery.tweet.min.js") }}
     {{ HTML::script("js/init.js") }}
    
</html>
