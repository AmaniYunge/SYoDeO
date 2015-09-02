@extends('master')
@section('contents')


<div class="wrap">
<div class="container home-apoint">
<div class="row">
<div class="col-md-12 home-apoint-text">
<h2>Volunteers</h2>
</div>
</div><!--end row-->
</div><!--end container-->
</div><!--end wrap-->


<div class="wrap margin-block">
<div class="container">
<div class="row">

<article class="col-md-12 blog-post-single">
<div class="gal-img">
<img class="img-responsive" src="{{asset('images/home/news-1.jpg')}}" style="width:100%" alt=""/>
</div><!--end gal-img-->
<div class="news-info">Aug 12, 2015 | <a href="{{url('/')}}">News</a> | <a href="{{url('/')}}">3 Comments</a></div>
<div class="content">
<h2 class="title-blog-post">Spirit of voluntarism</h2>

<p>95% of our working is done voluntarily; organization invites different individuals from outside and inside of our country to work with Tanzanian youth, preferable young people. </p>

 <!-- You can start editing here. -->


<header class="sidebar-title">
<h2 style="color:#0bb1e5">Stay with us.</h2>
</header>
<div class="sidebar-appoint">
<p>Call assistance from anywhere in Tanzania you will get it’ as you desired!</p>
<div class="home-apoint-btn">
<a href="{{url('contact')}}">Get in touch</a>
</div>
</div>
</li><!--end recent news-->

</ul>
</aside><!--end sidebar-->

</div><!--end row-->

</div><!--end container-->
</div><!--end wrap-->

@stop
