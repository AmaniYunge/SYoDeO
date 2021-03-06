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
	<iframe src="https://www.google.com/maps/d/embed?mid=z9z0lp6To-yM.kJ9wOGV1TymA" width="640" height="480"></iframe>

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
<p>Call for assistance  from anywhere in Tanzania and you will get what you desire!</p>

<div class="sidebar-archive">
<ul>
<li><strong>Located at:</strong> Kinondoni Municipality along Bagamoyo Rd,  Boko – Basihaya;  Block  ‘D’   Plot NO.1305; Opp. Finca TANZANIA OFFICE, Close to ASSEMBLY OF GOD CHURCH.</li>
<li><strong>Phone:</strong>+255 754298539 / +255 788 408 280</li>
<li><strong>Fax:</strong> 0736600535</li>
<li><strong>Email:</strong> infosyodeo@gmail.com</li>
</ul>
</div>

</div>



</div><!--end col-md-3-->
</div><!--end row-->


</div><!--end container-->
</div><!--end wrap-->

@stop
