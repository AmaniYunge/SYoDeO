@extends('master')
@section('contents')
<div class="wrap">

   <div class="flexslider-top">
  <ul class="slides">
      <li><img src="{{asset('images/home/slider-1.jpg')}}" alt="" />
     <div class="flex-caption">
	 <span>For the anyone who gets a support try hard not to lose! Since it is a GOLDEN CHANCE!</span>
    </div>
    </li>
 
     <li><img src="{{asset('images/home/slider-2.jpg')}}" alt="" />
     <div class="flex-caption">
	 <span>Young and energetic , hardworking and desired to assist others  to  achieve their goal.</span>
     </div>
    </li> 
    
      <li><img src="{{asset('images/home/slider-3.jpg')}}" alt="" />
     <div class="flex-caption">
	 <span>Call assistance   from anywhere in Tanzania you will get it’ as you desired!</span>
     </div>
    </li>   
    <li><img src="{{asset('images/home/slider-4.jpg')}}" alt="" />
     <div class="flex-caption">
	 <span>Young and energetic , hardworking and desired to assist others  to  achieve their goal.</span>
     </div>
    </li> 
    <li><img src="{{asset('images/home/slider-5.jpg')}}" alt="" />
     <div class="flex-caption">
	 <span>Call assistance   from anywhere in Tanzania you will get it’ as you desired!</span>
     </div>
    </li> 
</ul>

</div><!--end flexslider-->
</div><!--end wrap-->


<div class="wrap">
<div class="container">
<div class="row">
<div class="col-md-4 home-feature">
<p class="img-feature"><img src="{{asset('images/home/gal-21.jpg')}}" style="width:220px; height:175px" alt=""/></p>
<h2>Entrepreneurship Training</h2>
</div>
<div class="col-md-4 home-feature">
<p class="img-feature"><img src="{{asset('images/home/gal-3.jpg')}}" style="width:220px; height:175px" alt=""/></p>
<h2>Project Funding<br></h2>
</div>
<div class="col-md-4 home-feature">
<p class="img-feature"><img src="{{asset('images/home/gal-7.jpg')}}" style="width:220px; height:175px" alt=""/></p>
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
</div><!--end container-->
</div><!--end wrap-->

<div class="wrap">
<div class="container">
<div class="row">
<div class="col-md-8 margin-block">
<header class="home-title">
<h3>Other Services</h3>
</header>
<div class="row">
<div class="col-md-6 block-3col">
<div class="gal-img">
<img class="img-responsive" src="{{asset('images/gallery/gal-4.jpg')}}" alt=""/>
<div class="gal-more"><div class="mask-elem">
<ul>
<li><a class="lightbox gal-btn" src href="{{asset('images/gallery/gal-4.jpg')}}" data-rel="prettyPhoto[gallery]" title="">BIG</a></li>
<li><a class="gal-btn" href="{{url('service')}}" >MORE</a></li>
</ul>
</div>
</div><!--end work-more-->

</div><!--end 3col-img-->
<div class="cases-text">
<h3>Cultural Exchange Program</h3>
<p>Get a chance to interact with and learn from people who are different!</p>
</div>
</div><!--col-md-6-->

<div class="col-md-6 block-3col">
<div class="gal-img">
<img class="img-responsive" src="{{asset('images/gallery/gal-7.jpg')}}" alt=""/>
<div class="gal-more"><div class="mask-elem">
<ul>
<li><a class="lightbox gal-btn" src href="{{asset('images/gallery/gal-7.jpg')}}" data-rel="prettyPhoto[gallery]" title="">BIG</a></li>
<li><a class="gal-btn" href="{{url('service')}}" >MORE</a></li>
</ul></div>
</div><!--end work-more-->

</div><!--end 3col-img-->
<div class="cases-text">
<h3>Employment Creation to Young People</h3>
<p>Your knowledge is your employment,<br>
With SYoDeO , you will get skills which translate your knowledge into action!</p>
</div>
</div><!--col-md-6-->
</div><!--row-->
</div><!--end col-md-8-->

<div class="col-md-4 margin-block">
<header class="home-title test-title pull-right"><br>
<h2 class="indent-2">Latest News:</h2>
<div class="inner-div">
            <ul class="list-news">
            	<li>
                	<a href="#" class="btn btn">Sept 21, 2015</a>
                    <p class="text-primary">Welcome to SYoDeO</p>
                    SYoDeO is a Tanzanian non government organization, non political, non religious and nonprofit aimed to minimized the problems of unemployment to young people in Tanzania.
 <a href="#" class="underline"></a>
                </li>
                <li>
                	<a href="#" class="btn btn">Sept 21, 2015</a>
                    <p class="text-primary">SYoDeO expands its services</p>
                    The head quarter of this Organisation is at the  area 
 <a href="#" class="underline"></a>
                </li>
                
            </ul>
</div>
 <script>
   $(function(){
       $('.inner-div').slimScroll({
          height: '1500px'
         });
          });
  </script>

</div><!--end col-md-4-->

</div><!--end row-->
</div><!--end container-->
</div><!--end wrap-->




<div class="wrap  margin-block">
<div class="container home-apoint">
<div class="row">
<div class="col-md-9 home-apoint-text">
<h2>From the Board Members</h2>
<p>The founders of the Strategic Youth Development Organization believes that through   providing critical training  to youth will help them to turn their ideas into feasible business ventures and where is possible to supply them with credit, this can reduce the rate of poverty in our country.</p>
</div>
<div class="col-md-3 home-apoint-btn">
<a href="{{url('contact')}}">Get in touch</a>
</div>
</div><!--end row-->
</div><!--end container-->
</div><!--end wrap-->
@stop
