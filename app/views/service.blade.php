@extends('master')
@section('contents')



<div class="wrap">
<div class="container home-apoint">
<div class="row">
<div class="col-md-12 home-apoint-text">
<h2>Services</h2>
</div>
</div><!--end row-->
</div><!--end container-->
</div><!--end wrap-->


<div class="wrap margin-block">
<div class="container">
<div class="row">
<div class="col-md-12">
<p>Most of youth have less knowledge of self employment, lack entrepreneurship skills, a fear of job creation and self independence, and fear of facing real life. To those who are entrepreneurs already, lack business management skills, enough capital and sometimes collateral to lend money from financial institution.</p>
</div><!--end col-md-12-->
</div><!--end row-->

<div class="row">
<div class="col-md-4 home-feature">
<p class="img-feature"><img src="{{asset('images/home/gal-21.jpg')}}" style="width:200px; height:175px" alt=""/></p>
<h2>Entrepreneurship Training</h2>
</div>
<div class="col-md-4 home-feature">
<p class="img-feature"><img src="{{asset('images/home/gal-3.jpg')}}" style="width:200px; height:175px" alt=""/></p>
<h2>Project Funding<br></h2>
</div>
<div class="col-md-4 home-feature">
<p class="img-feature"><img src="{{asset('images/home/gal-7.jpg')}}" style="width:200px; height:175px" alt=""/></p>
<h2>Adolescent Education</h2>
</div>
</div>

<div class="row">
<div class="col-md-4 ">
<p>Most of youth have less knowledge of self employment, lack entrepreneurship skills, a fear of job creation and self independence, and fear of facing real life. To those who are entrepreneurs already, lack business management skills, enough capital and sometimes collateral to lend money from financial institution</p>
</div><!--end home-feature-->

<div class="col-md-4 ">
<p>Most of youth have less knowledge of self employment, lack entrepreneurship skills, a fear of job creation and self independence, and fear of facing real life. To those who are entrepreneurs already, lack business management skills, enough capital and sometimes collateral to lend money from financial institution</p>
</div><!--end home-feature-->

<div class="col-md-4 ">
<p>SAY NO!  To HIV/AIDS, psychological damage, drug abuse, petty crime, terrorism! With SYoDeO we can make employment</p>
</div><!--end home-feature-->

</div><!--end row-->

<div class="row services">
<div class="col-md-6 service">
<img class="item-avatar-left" src="{{asset('images/home/sub1.jpg')}}" style="width:80px; height:70px" alt=""/>
<h4>Cultural Exchange Program</h4>
<p>Get a chance to interact with and learn from people who are different!</p>
<p>Cultural exchange programs expose SYoDeO youth to other people from different cultural, geographic and socio - economic backgrounds and in so doing provide the opportunity for young people to develop a greater understanding of diversity - both in Tanzania and worldwide.</p>
<p>Cultural exchange programs assist young people to develop positive relationships with entrepreneurs in a broader range of perspectives.  They enable them to gain knowledge and develop skills that are needed for active participation in our multicultural society.</p>
</div><!--end col-md-6-->

<div class="col-md-6 service">
<img class="item-avatar-left" src="{{asset('images/home/gal-5.jpg')}}" style="width:80px; height:70px" alt=""/>
<h4>Employment Creation to Young People</h4>
<p>Your knowledge is your employment,<br>
With SYoDeO , you will get skills which translate your knowledge into action!<br>
<strong>We provide three types of skills:</strong>
<li>Technical skills</li>
<li>Business management skills </li>
<li>Personal entrepreneurial skills</li>
<i style="color:#D712C2">The above skills are important to young people in order to grow their businesses effectively in a global environment.</i></p>
</div><!--end col-md-6-->
</div><!--end row-->

</div><!--end container-->
</div><!--end wrap-->

<div class="wrap  margin-block">
<div class="container home-apoint">
<div class="row">
<div class="col-md-9 home-apoint-text">
<h2>Schedule an appointment. Consultation it's free!</h2>
<p>Call assistance from anywhere in Tanzania you will get it’ as you desired!</p>
</div>
<div class="col-md-3 home-apoint-btn">
<a href="{{url('contact')}}">Get in touch</a>
</div>
</div><!--end row-->
</div><!--end container-->
</div><!--end wrap-->

@stop
