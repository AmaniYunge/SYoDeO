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
<img class="img-responsive" src="{{asset('images/home/news.jpg')}}" style="width:100%" alt=""/>
</div><!--end gal-img-->
<div class="content">
<h2 class="title-blog-post">About SYoDeO</h2>

<p>SYoDeO is a Tanzanian non government organization, non-political, not religiously affiliated and non-profit. It aims to minimize the problem of unemployment in young people in Tanzania.</p>

<p>Young people are a potential resource for economic growth and social transformation if they are gainfully and productively engaged in economic activities. The degree to which the youth can contribute to the development of Tanzania is often constrained by limitations often associated with lack of opportunities, particularly in the job market.</p>

<p> It is realized that youth in Tanzania, both females and males are disadvantaged in the job market. Even when they have some education they often lack the job skills which will increase their chances for employment and allow them to gain some working experience on the job. Those who want to set up their own businesses lack the capital to do so.</p>
<p>Most youth lack knowledge on self-employment; they lack entrepreneurship skills, and do not have the means to create their own ventures that will lead to self-employment. Some youth who are entrepreneurs lack business management skills, capital and sometimes collateral to enable them to borrow money from financial institutions.</p>
<p>These challenges can often lead young people to engage in risky behavior which increases their vulnerability to HIV/AIDS, crime, psychological damage, drug abuse, etc.  Unemployment is a major cause of unhappiness among the youth.</p>
<i style="color:#D712C2">The founders of the Strategic Youth Development Organization believe   that by  providing critical training  to YOUTH will help them to turn their ideas into feasible business ventures and where possible,  with the availability of  credit to invest in economic activities,  will  reduce the level of poverty in our country.  </i>
 <!-- You can start editing here. -->
<div class="row">
<div class="col-md-4 home-feature">
<p class="img-feature"><img src="{{asset('images/home/Mission.png')}}" style="width:150px;height:120px" alt=""/></p>
<h2> Our Mission</h2>
<p>To promote social, cultural and economic development among young people to improve the living standards of communities.</p>
</div><!--end home-feature-->

<div class="col-md-4 home-feature">
<p class="img-feature"><img src="{{asset('images/home/vision.jpg')}}" style="width:150px;height:120px" alt=""/></p>
<h2>Our Vision</h2>
<p>To become a strong organization for promoting, inspiring, motivating and empowering young people’s participation in social, cultural and economic development.</p>
</div><!--end home-feature-->

<div class="col-md-4 home-feature">
<p class="img-feature"><img src="{{asset('images/home/goals.jpg')}}" style="width:150px;height:120px" alt=""/></p>
<h2>Overall Goals</h2>
<p>The overall goal of SYoDeO is to ensure Tanzania communities are inspired, motivated and supported in realizing young people’s roles in achieving social, cultural and economic development.</p>
</div><!--end home-feature-->
</div><!--end row-->

<div class="row">
<div class="col-md-9 home-apoint-text">
<header class="sidebar-title">
<p><br><h2>Stay with us.</h2></p>
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
