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
<img class="img-responsive" src="{{asset('images/home/news-1.png')}}" style="width:100%; height:440px" alt=""/>
</div><!--end gal-img-->
<div class="content">
<h2 class="title-blog-post">Spirit of voluntarism</h2>

<p>95% of our working is done voluntarily; organization invites different individuals from outside and inside of our country to work with Tanzanian youth, preferable young people. </p>
<h2 class="title-blog-post">Careers, Volunteer and Internship Sections</h2>
<p>SYoDeO Tanzania can requests contact information (such as name, email, and address), as well as personal information such as a resume and cover letter, from visitors on our employment, volunteer and internship opportunities. This information is used by us for personnel purposes only. </p>

 <!-- You can start editing here. -->

<div class="row">
<div class="col-md-9 home-apoint-text">
<header class="sidebar-title">
<h2>Stay with us.</h2>
</header>
<p>Call assistance from anywhere in Tanzania you will get it’ as you desired!</p>
</div>
<div class="col-md-3 home-apoint-btn">
<a href="{{url('contact')}}">Get in touch</a>
</div>
</div><!--end row-->

</li><!--end recent news-->

</ul>
</aside><!--end sidebar-->

</div><!--end row-->

</div><!--end container-->
</div><!--end wrap-->

@stop