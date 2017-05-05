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
		<div id="account-nav" class="{{ Request::has('platform') ? 'col-md-12' : 'col-md-4' }}">

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
        
        @if(!Request::has('platform'))
		<div class="col-md-8">
			<div class="row">


				<div class="col-md-8 my-profile">
					<h4 class="margin-top-0 margin-bottom-30">My Account</h4>

					<form method="GET" action="/user/update">

					<label>Your Name</label>
					<input name="name" value="{{ Auth::user()->name }}" type="text">


					<label>Email</label>
					<input name="email" value="{{ Auth::user()->email }}" type="text">

					<label>Mobile No</label>
					<input name="phone" value="" placeholder="Enter Mobile No" type="text">

					<label>Address</label>
					<input name="address" value="" placeholder="Your Address" type="text">

					<label>State</label>
					<input name="state" value="Maharashtra" type="text">
				    
				    <label>City</label>
					<input name="city" value="Nashik" type="text">

					<label>Pincode</label>
					<input name="pincode" value="422002" type="text">

					


					<button type="submit" class="button margin-top-20 margin-bottom-20">Save Changes</button>

					</form>
				</div>

				<div class="col-md-4">
					<!-- Avatar -->
					<div class="edit-profile-photo">
						<img src="/images/agent-02.jpg" alt="">
						<div class="change-photo-btn">
							<div class="photoUpload">
							   <form>
							    <span><i class="fa fa-upload"></i> Upload Photo</span>
							    <input type="file" class="upload" />
							    </form>
							</div>
						</div>
					</div>

				</div>


			</div>
		</div>
       @endif
		

	</div>
</div>


<!-- Footer
================================================== -->
<div class="margin-top-55"></div>


@endsection