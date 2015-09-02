@extends('master')
@section('contents')


<div class="wrap">
<div class="container home-apoint">
<div class="row">
<div class="col-md-12 home-apoint-text">
<h2>Who We Are</h2>
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
<h2 class="title-blog-post">About SYoDeO</h2>

<p>SYoDeO is a Tanzanian non government organization, non political, non religious and nonprofit aimed to minimized the problems of unemployment to young people in Tanzania.</p>

<p>Young people are potential resources for growth and social development if gainfully and productively engaged. In Tanzania, the degree which youth can contribute to the development of their country in particular is constrained by circumscribed life chances, with the lack of job opportunities being one of major circumstances.</p>

<p>There is a realization in Tanzania that youth; both females and males are at a disadvantage on the job market. Even if they have had some education, many lack skills and job experience. Those who want to set up their own businesses lack capital.</p>
<p>Most of youth have less knowledge of self employment, lack entrepreneurship skills, a fear of job creation and self independence, and fear of facing real life. To those who are entrepreneurs already, lack business management skills, enough capital and sometimes collateral to lend money from financial institution.</p>
<p>The above mentioned challenges  influences young people to engage in risky behavior which increase their vulnerability to HIV/AIDS, rising rate of crimes, psychological damage, drug abuse, petty crime, also the unemployment makes  young people unhappy .</p>

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
