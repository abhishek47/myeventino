@extends('layouts.app')


@section('content')

<div class="clearfix"></div>
<!-- Header Container / End -->
<a href="/events/filter" class="float visible-xs">
<i class="fa fa-filter my-float"></i>
</a>

<!-- Titlebar
================================================== -->
@if(!Request::has('platform'))
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Vendors</h2>
				<span>List of all vendors and services required for an event!</span>
				
				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Listings</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>
@endif



<!-- Content
================================================== -->
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<!-- Main Search Input -->
			<div class="main-search-input margin-bottom-40">
				<input type="text" class="ico-01" placeholder="Type an agent name or location" value=""/>
				<button class="button">Search</button>
			</div>
		</div>


		<div class="col-md-12">
			<div class="row">

				<!-- Agents Container -->
				<div class="agents-grid-container">

					<!-- Agent -->
					<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="agent">

							<div class="agent-avatar">
								<a href="agent-page.html">
									<img src="/images/agent-01.jpg" alt="">
									<span class="view-profile-btn">View Profile</span>
								</a>
							</div>

							<div class="agent-content">
								<div class="agent-name">
									<h4><a href="agent-page.html">Tom Wilson</a></h4>
									<span>Agent In New York</span>
								</div>

								<ul class="agent-contact-details">
									<li><i class="sl sl-icon-call-in"></i>(123) 123-456</li>
									<li><i class="fa fa-envelope-o "></i><a href="#"><span class="__cf_email__" data-cfemail="d1a5bebc91b4a9b0bca1bdb4ffb2bebc">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></li>
								</ul>

								<ul class="social-icons">
									<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
									<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
									<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
								</ul>
								<div class="clearfix"></div>
							</div>

						</div>
					</div>
					<!-- Agent / End -->
					
	
					<!-- Agent -->
					<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="agent">

							<div class="agent-avatar">
								<a href="agent-page.html">
									<img src="/images/agent-02.jpg" alt="">
									<span class="view-profile-btn">View Profile</span>
								</a>
							</div>

							<div class="agent-content">
								<div class="agent-name">
									<h4><a href="agent-page.html">Jennie Wilson</a></h4>
									<span>Agent In New York</span>
								</div>

								<ul class="agent-contact-details">
									<li><i class="sl sl-icon-call-in"></i>(123) 123-456</li>
									<li><i class="fa fa-envelope-o "></i><a href="#"><span class="__cf_email__" data-cfemail="264c4348484f4366435e474b564a430845494b">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></li>
								</ul>

								<ul class="social-icons">
									<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
									<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
									<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
								</ul>
								<div class="clearfix"></div>
							</div>

						</div>
					</div>
					<!-- Agent / End -->
					
	
					<!-- Agent -->
					<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="agent">

							<div class="agent-avatar">
								<a href="agent-page.html">
									<img src="/images/agent-03.jpg" alt="">
									<span class="view-profile-btn">View Profile</span>
								</a>
							</div>

							<div class="agent-content">
								<div class="agent-name">
									<h4><a href="agent-page.html">David Strozier</a></h4>
									<span>Agent In Chicago</span>
								</div>

								<ul class="agent-contact-details">
									<li><i class="sl sl-icon-call-in"></i>(123) 123-456</li>
									<li><i class="fa fa-envelope-o "></i><a href="#"><span class="__cf_email__" data-cfemail="cfabaeb9a6ab8faab7aea2bfa3aae1aca0a2">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></li>
								</ul>

								<ul class="social-icons">
									<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
									<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
									<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
								</ul>
								<div class="clearfix"></div>
							</div>

						</div>
					</div>
					<!-- Agent / End -->
					

					<!-- Agent -->
					<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="agent">

							<div class="agent-avatar">
								<a href="agent-page.html">
									<img src="/images/agent-04.jpg" alt="">
									<span class="view-profile-btn">View Profile</span>
								</a>
							</div>

							<div class="agent-content">
								<div class="agent-name">
									<h4><a href="agent-page.html">Charles Watson</a></h4>
									<span>Agent In Dallas</span>
								</div>

								<ul class="agent-contact-details">
									<li><i class="sl sl-icon-call-in"></i>(123) 123-456</li>
									<li><i class="fa fa-envelope-o "></i><a href="#"><span class="__cf_email__" data-cfemail="7a19121b08161f093a1f021b170a161f54191517">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></li>
								</ul>

								<ul class="social-icons">
									<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
									<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
									<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
								</ul>
								<div class="clearfix"></div>
							</div>

						</div>
					</div>
					<!-- Agent / End -->


				</div>
				<!-- Agents Container / End -->

			</div>
		</div>


		<div class="col-md-12">
			<div class="clearfix"></div>
			<!-- Pagination -->
			<div class="pagination-container margin-top-20">
				<nav class="pagination">
					<ul>
						<li><a href="#" class="current-page">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
					</ul>
				</nav>

				<nav class="pagination-next-prev">
					<ul>
						<li><a href="#" class="prev">Previous</a></li>
						<li><a href="#" class="next">Next</a></li>
					</ul>
				</nav>
			</div>
			<!-- Pagination / End -->
		</div>

	</div>
</div>


<!-- Footer
================================================== -->
<div class="margin-top-55"></div>


@endsection