@extends('master')
@section('contents')


<div class="wrap">
<div class="container home-apoint">
<div class="row">
<div class="col-md-12 home-apoint-text">
<h2>Contact</h2>
</div>
</div><!--end row-->
</div><!--end container-->
</div><!--end wrap-->


<div class="wrap margin-block">
<div class="container">

<div class="row">

<div class="col-md-12 g-map">
<iframe height="400" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=ro&amp;geocode=&amp;q=New+York,+NY,+United+States&amp;aq=3&amp;oq=New+York+&amp;sll=40.765982,-73.974037&amp;sspn=0.104791,0.264187&amp;ie=UTF8&amp;hq=&amp;hnear=New+York,+Manhattan,+New+York&amp;ll=40.714353,-74.005973&amp;spn=0.013109,0.033023&amp;t=m&amp;z=14&amp;output=embed"></iframe>

</div>
</div><!--end row-->

<div class="row">
<div class="col-md-9">

	<header class="home-title">
<h3>Mail Us</h3>
</header>

<div id="contact-container" class="margin-t clearfix">
<form method="post" id="my-form" action='http://matchthemes.com/demohtml/dentalclinic/include/contact-process.php'>

<input type="text" name="author" class="comm-field" placeholder="Name"  value="" size="22" tabindex="1" aria-required='true' />

<input type="text" name="email" class="comm-field" placeholder="Email" value="" size="22" tabindex="2" aria-required='true' />

<input type="text" name="title" class="comm-field" placeholder="Subject" value="" size="22" tabindex="3" aria-required='true' />
        
      <textarea name="message" id="message2" placeholder="Message" rows="9" tabindex="4"></textarea>
 
<p class="antispam">Leave this empty: <input type="text" name="url" /></p>
		
	<input type="submit" value="Send message" id="submit" tabindex="5"  />
    
</form>
</div>

<div id="output"></div>

</div><!--end col-md-9-->

<div class="col-md-3">

	<header class="home-title">
<h3>Get in touch</h3>
</header>

<div class="margin-t">
<p>Call assistance from anywhere in Tanzania you will get it’ as you desired!</p>

<div class="sidebar-archive">
<ul>
<li><strong>Address:</strong> Kinondoni, Dar es salaam. Bagamoyo Rd; Boko – Basihaya;  Block  ‘D’   Plot NO.1305; Opp. FINCA TANZANIA OFFICE, Close to ASSEMBLY OF GOD CHURCH.</li>
<li><strong>Phone:</strong>+255 754298539 / +255 788 408 280</li>
<li><strong>Fax:</strong> </li>
<li><strong>Email:</strong> info@syodeo.org</li>
</ul>
</div>

</div>



</div><!--end col-md-3-->
</div><!--end row-->


</div><!--end container-->
</div><!--end wrap-->

@stop