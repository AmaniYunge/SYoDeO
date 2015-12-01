@extends('master')
@section('contents')
<div class="wrap">

   <div class="flexslider-top">
  <ul class="slides">
      <li><img src="{{asset('images/home/slider-1.jpg')}}" alt="" />
     <div class="flex-caption">
	 <span>For anyone who gets some support work hard in order not to lose! IT IS YOUR GOLDEN CHANCE!</span>
    </div>
    </li>
 
     <li><img src="{{asset('images/home/slider-2.jpg')}}" alt="" />
     <div class="flex-caption">
	 <span>Young and energetic , hardworking and strong desire to assist   others  to  achieve their goals.</span>
     </div>
    </li> 
    
      <li><img src="{{asset('images/home/slider-3.jpg')}}" alt="" />
     <div class="flex-caption">
	 <span> Call for assistance   from anywhere in Tanzania and you will get what you desire!</span>
     </div>
    </li>   
    <li><img src="{{asset('images/home/slider-4.jpg')}}" alt="" />
     <div class="flex-caption">
	 <span>Young and energetic , hardworking and strong desire to assist   others  to  achieve their goals</span>
     </div>
    </li> 
    <li><img src="{{asset('images/home/slider-5.jpg')}}" alt="" />
     <div class="flex-caption">
	 <span>Call for assistance   from anywhere in Tanzania and you will get what you desire!</span>
     </div>
    </li> 
</ul>

</div><!--end flexslider-->
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
<img class="img-responsive" src="{{asset('images/gallery/cultural exchange.jpg')}}" alt=""/>
<div class="gal-more"><div class="mask-elem">
<ul>
<li><a class="lightbox gal-btn" src href="{{asset('images/gallery/cultural exchange.jpg')}}" data-rel="prettyPhoto[gallery]" title="">BIG</a></li>
<li><a class="gal-btn" href="{{url('service')}}" >MORE</a></li>
</ul>
</div>
</div><!--end work-more-->

</div><!--end 3col-img-->
<div class="cases-text">
<h3>Cultural Exchange Program</h3>
<p>Cultural exchange programs expose SYoDeO youth to other people from different cultural, geographic and socio - economic backgrounds and in so doing provide the opportunity for young people to develop a greater understanding of diversity - both in Tanzania and worldwide.</p>
<p>Cultural exchange programs assist young people to develop positive relationships with entrepreneurs in a broader range of perspectives.  They enable them to gain knowledge and develop skills that are needed for active participation in our multicultural society.</p>

</div>
</div><!--col-md-6-->

<div class="col-md-6 block-3col">
<div class="gal-img">
<img class="img-responsive" src="{{asset('images/gallery/gal-7.jpg')}}" style="width:100%;height:210px" alt=""/>
<div class="gal-more"><div class="mask-elem">
<ul>
<li><a class="lightbox gal-btn" src href="{{asset('images/gallery/gal-7.jpg')}}" data-rel="prettyPhoto[gallery]" title="">BIG</a></li>
<li><a class="gal-btn" href="{{url('service')}}" >MORE</a></li>
</ul></div>
</div><!--end work-more-->

</div><!--end 3col-img-->
<div class="cases-text">
<h3>Employment Creation to Young People</h3>
<p>With SYoDeO , you will get skills which translate your knowledge into action!</p><br>
<strong>We provide three types of skills:</strong>
<li><i>a) Technical skills</i></li>
<li><i>b) Business management skills </i></li>
<li><i>c) Personal entrepreneurial skills</i></li>
<strong><i>The above skills are important to young people in order to grow their businesses effectively in a global environment.</i></strong>
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
                    YoDeO is a Tanzanian non government organization, non-political, not religiously affiliated and non-profit. It aims to minimize the problem of unemployment in young people in Tanzania.
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


@stop
