@extends('layouts.app')


@section('content')




<!-- Titlebar
================================================== -->
@if(!Request::has('platform'))
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>My Profile</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>My Profile</li>
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


		<!-- Widget -->
		<div id="account-nav" class="col-md-12">

				<div class="my-account-nav-container">
					
					<ul class="my-account-nav">
						<li class="sub-nav-title">Manage Account</li>
						<li><a href="/account/profile" class="current"><i class="fa fa-user"></i> My Profile</a></li>
						<li><a href="/account/favourites"><i class="fa fa-star"></i> Favourites</a></li>
					</ul>
					
					<ul class="my-account-nav">
						<li class="sub-nav-title">Manage Listings</li>
						<li><a href="/account/listings"><i class="fa fa-bars"></i> My Venues</a></li>
						<li><a href="/venues/new"><i class="fa fa-edit"></i> Submit New Venue</a></li>
						<li><a href="/account/events"><i class="fa fa-map"></i> Showcase Events</a></li>
					</ul>

					<ul class="my-account-nav">
						<li><a href="/account/changepassword"><i class="fa fa-lock"></i> Change Password</a></li>
						<li><a href="/account/logout"><i class="fa fa-sign-out"></i> Log Out</a></li>
					</ul>

					<ul class="my-account-nav">
						<li class="sub-nav-title">Manage Listings</li>
						<li><a href="/account/listings"><i class="fa fa-bars"></i> My Venues</a></li>
						<li><a href="/venues/new"><i class="fa fa-edit"></i> Submit New Venue</a></li>
						<li><a href="/account/events"><i class="fa fa-map"></i> Showcase Events</a></li>
					</ul>


				</div>

		</div>

		

	</div>
</div>


<!-- Footer
================================================== -->
<div class="margin-top-55"></div>


@endsection