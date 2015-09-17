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
<p class="img-feature"><img src="{{asset('images/home/testimonial.png')}}" alt=""/></p>
<h2>ENTERPENEURSHIP TRAINING</h2>
</div>
<div class="col-md-4 home-feature">
<p class="img-feature"><img src="{{asset('images/home/testimonial.png')}}" alt=""/></p>
<h2>PROJECT FUNDING<br></h2>
</div>
<div class="col-md-4 home-feature">
<p class="img-feature"><img src="{{asset('images/home/testimonial.png')}}" alt=""/></p>
<h2>Service3</h2>
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
<p>Most of youth have less knowledge of self employment, lack entrepreneurship skills, a fear of job creation and self independence, and fear of facing real life. To those who are entrepreneurs already, lack business management skills, enough capital and sometimes collateral to lend money from financial institution</p>
</div><!--end home-feature-->

</div><!--end row-->
</div><!--end container-->
</div><!--end wrap-->

<div class="wrap">
<div class="container">
<div class="row">
<div class="col-md-8 margin-block">
<header class="home-title">
<h3>Case Studies</h3>
</header>
<div class="row">
<div class="col-md-6 block-3col">
<div class="gal-img">
<img class="img-responsive" src="{{asset('images/gallery/gal-8.jpg')}}" alt=""/>
<div class="gal-more"><div class="mask-elem">
<ul>
<li><a class="lightbox gal-btn" src href="{{asset('images/gallery/gal-8.jpg')}}" data-rel="prettyPhoto[gallery]" title="">BIG</a></li>
<li><a class="gal-btn" href="cases-single-slideshow.html" >MORE</a></li>
</ul>
</div>
</div><!--end work-more-->

</div><!--end 3col-img-->
<div class="cases-text">
<h4 class="title-gal-post"><a href="{{url('/')}}">Case1</a></h4>
<p>Young and energetic , hardworking and desired to assist others  to  achieve their goal.</p>
</div>
</div><!--col-md-6-->

<div class="col-md-6 block-3col">
<div class="gal-img">
<img class="img-responsive" src="{{asset('images/gallery/gal-7.jpg')}}" alt=""/>
<div class="gal-more"><div class="mask-elem">
<ul>
<li><a class="lightbox gal-btn" src href="{{asset('images/gallery/gal-7.jpg')}}" data-rel="prettyPhoto[gallery]" title="">BIG</a></li>
<li><a class="gal-btn" href="{{url('/')}}" >MORE</a></li>
</ul></div>
</div><!--end work-more-->

</div><!--end 3col-img-->
<div class="cases-text">
<h4 class="title-gal-post"><a href="{{url('/')}}">Case2</a></h4>
<p>Young and energetic , hardworking and desired to assist others  to  achieve their goal.</p>
</div>
</div><!--col-md-6-->
</div><!--row-->
</div><!--end col-md-8-->

<div class="col-md-4 margin-block">
<header class="home-title test-title">
<h3>Testimonials</h3>
</header>

<div class="flexslider-testimonials">
  <ul class="slides">
      <li>
      <div class="home-test"><p>"Most of youth have less knowledge of self employment, lack entrepreneurship skills, a fear of job creation and self independence, and fear of facing real life. To those who are entrepreneurs already, lack business management skills, enough capital and sometimes collateral to lend money from financial institution."</p>
      </div><!--end home-test-->
     <div class="test-author">
      <img class="item-avatar" src="{{asset('images/team/team-1.jpg')}}" alt=""/>
      <p class="test-author-name">Peter Marusu</p>
      <p>Assistant Manager</p>
      </div><!--end test-author-->
    </li>
 
     <li>
      <div class="home-test"><p>"Most of youth have less knowledge of self employment, lack entrepreneurship skills, a fear of job creation and self independence, and fear of facing real life. To those who are entrepreneurs already, lack business management skills, enough capital and sometimes collateral to lend money from financial institution."</p>
      </div><!--end home-test-->
       <div class="test-author">
      <img class="item-avatar" src="{{asset('images/team/team-2.jpg')}}" alt=""/>
      <p class="test-author-name">Amani Yunge</p>
      <p>Project Manager</p>
      </div><!--end test-author-->
  
    </li>
       <li>
      <div class="home-test"><p>"Most of youth have less knowledge of self employment, lack entrepreneurship skills, a fear of job creation and self independence, and fear of facing real life. To those who are entrepreneurs already, lack business management skills, enough capital and sometimes collateral to lend money from financial institution."</p>
      </div><!--end home-test-->
  	 <div class="test-author">
      <img class="item-avatar" src="{{asset('images/team/team-4.jpg')}}" alt=""/>
      <p class="test-author-name">Leonard Mpande</p>
      <p>Web Designer</p>
      </div><!--end test-author-->
    </li> 
</ul>

</div><!--end flexslider-->

</div><!--end col-md-4-->

</div><!--end row-->
</div><!--end container-->
</div><!--end wrap-->


<div class="wrap">
<div class="container">
<div class="row">
<div class="col-md-12 margin-block">
<header class="home-title">
<h3>Recent News</h3>
</header>
<div class="row">
<div class="col-md-4 block-3col">
<div class="gal-img"><img class="img-responsive" src="{{asset('images/home/news-1.jpg')}}" alt=""/>
</div><!--end gal-img-->
<div class="news-text">
<h4 class="title-gal-post"><a href="index.html#">Youth Development</a></h4>
<p>Most of youth have less knowledge of self employment, lack entrepreneurship skills, a fear of job creation and self independence, and fear of facing real life. To those who are entrepreneurs already, lack business management skills, enough capital and sometimes collateral to lend money from financial institution.</p>
</div>
</div><!--col-md-4-->

<div class="col-md-4 block-3col">
<div class="gal-img"><img class="img-responsive" src="{{asset('images/home/news-1.jpg')}}" alt=""/>
</div><!--end gal-img-->
<div class="news-text">
<h4 class="title-gal-post"><a href="index.html#">Youth Development</a></h4>
<p>Most of youth have less knowledge of self employment, lack entrepreneurship skills, a fear of job creation and self independence, and fear of facing real life. To those who are entrepreneurs already, lack business management skills, enough capital and sometimes collateral to lend money from financial institution.</p>
</div>
</div><!--col-md-4-->

<div class="col-md-4 block-3col">
<div class="gal-img"><img class="img-responsive" src="{{asset('images/home/news-1.jpg')}}" alt=""/>
</div><!--end gal-img-->
<div class="news-text">
<h4 class="title-gal-post"><a href="index.html#">Youth Development</a></h4>
<p>Most of youth have less knowledge of self employment, lack entrepreneurship skills, a fear of job creation and self independence, and fear of facing real life. To those who are entrepreneurs already, lack business management skills, enough capital and sometimes collateral to lend money from financial institution.</p>
</div>
</div><!--col-md-4-->
</div><!--row-->
</div><!--end col-md-12-->

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
