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
		<div class="col-md-4">
			<div class="sidebar left">

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

				</div>

			</div>
		</div>

		<div class="col-md-8">
			<div class="row">


				<div class="col-md-8 my-profile">
					<h4 class="margin-top-0 margin-bottom-30">My Account</h4>

					<label>Your Name</label>
					<input value="Jennie Wilson" type="text">

					<label>Phone</label>
					<input value="(123) 123-456" type="text">

					<label>Email</label>
					<input value="jennie@example.com" type="text">


					<h4 class="margin-top-50 margin-bottom-25">Address</h4>
					<textarea name="about" id="about" cols="30" rows="10">Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper</textarea>

					<label>State</label>
					<input value="Maharashtra" type="text">
				    
				    <label>City</label>
					<input value="Nashik" type="text">

					<label>Pincode</label>
					<input value="422002" type="text">

					


					<button class="button margin-top-20 margin-bottom-20">Save Changes</button>
				</div>

				<div class="col-md-4">
					<!-- Avatar -->
					<div class="edit-profile-photo">
						<img src="/public/images/agent-02.jpg" alt="">
						<div class="change-photo-btn">
							<div class="photoUpload">
							    <span><i class="fa fa-upload"></i> Upload Photo</span>
							    <input type="file" class="upload" />
							</div>
						</div>
					</div>

				</div>


			</div>
		</div>

	</div>
</div>


<!-- Footer
================================================== -->
<div class="margin-top-55"></div>


@endsection