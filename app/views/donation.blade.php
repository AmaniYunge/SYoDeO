@extends('master')
@section('contents')


<div class="wrap">
<div class="container home-apoint">
<div class="row">
<div class="col-md-12 home-apoint-text">
<h2>Donation</h2>
</div>
</div><!--end row-->
</div><!--end container-->
</div><!--end wrap-->


<div class="wrap margin-block">
<div class="container">
<div class="row">

<article class="col-md-12 blog-post-single">
<div class="gal-img">
<img class="img-responsive" src="{{asset('images/home/support.jpg')}}" style="width:100%" alt=""/>
</div><!--end gal-img-->
<div class="content">
<h2 class="title-blog-post">Donate to Us</h2>

<p>We request contact information from the visitor on our donation forms (for contributions, gifts , planned giving, 
to make monthly gifts, etc.). These forms may request contact information (such as name, email, telephone number, and address) 
and payment information (such as credit card number and expiration date). This information is used for SYoDeO Tanzania purposes,
 such as billing, sending receipts, and contacting donors. As noted above, SYoDeO Tanzania may share this information with our service 
 providers, solely for the purpose of performing tasks on SYoDeO’s behalf.
We also may share names and mailing address with carefully selected organizations we feel our donors would want to know about. 
If you do not wish to receive information from these groups, please you can write, or telephone us at the number above, or write 
to us at the address above. We will gladly make these changes. We do not share e-mail addresses or financial and credit card information 
with anyone other than service providers who are performing tasks on SYoDeO’s behalf. </p>


 <!-- You can start editing here. -->

<div class="row">
<div class="col-md-9 home-apoint-text">
<header class="sidebar-title"><br>
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
