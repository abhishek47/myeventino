@extends('layouts.app')


@section('content')

<!-- Titlebar
================================================== -->
<div id="titlebar" class="submit-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><i class="fa fa-plus-circle"></i> List your Venue For Free</h2>
			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
<div class="row">

	<!-- Submit Page -->
	<div class="col-md-12">
		<div class="submit-page">

		<div class="notification notice large margin-bottom-55">
			<h4>Don't Have an Account?</h4>
			<p>If you don't have an account you can create one by entering your email address in contact details section. A password will be automatically emailed to you.</p>
		</div>

		<form action="/venues/sections" method="GET">

		<!-- Section -->
		<h3>Basic Information</h3>
		<div class="submit-section">

			<!-- Title -->
			<div class="form">
				<h5>Venue Title <i class="tip" data-tip-content="Type title that will also contains an unique feature of your property (e.g. renovated, air contidioned)"></i></h5>
				<input class="search-field" type="text" value=""/>
			</div>

			<!-- Row -->
			<div class="row with-forms">

				<!-- Status -->
				<div class="col-md-6">
					<h5>Venue Type</h5>
					<select class="chosen-select-no-single" >
						<option label="blank"></option>	
						 <option value="banquet" >Banquet</option>
                        <option value="lawns" >Lawns</option>
                        <option value="dome" >Dome</option>
                        <option value="resort" >Resort</option>
                        <option value="plot" >Plot</option>
                        <option value="conference" >Conference Room</option>

					</select>
				</div>

				<!-- Type -->
				<div class="col-md-6">
					<h5>Best For</h5>
					<select class="chosen-select-no-single" >
						<option label="blank"></option>		
						<option>Wedding</option>
						<option>Party</option>
						<option>Conference</option>
						<option>Ceremonies</option>
						<option>Other</option>
					</select>
				</div>

			</div>
			<!-- Row / End -->


			<!-- Row -->
			<div class="row with-forms">

				<!-- Price -->
				<div class="col-md-4">
					<h5>Avg Price. <i class="tip" data-tip-content="Type overall or average price  to be displayed on Eventino."></i></h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="INR">
					</div>
				</div>
				
				<!-- Area -->
				<div class="col-md-4">
					<h5>Total Area</h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="Sq Ft">
					</div>
				</div>

				<!-- Rooms -->			
				<div class="col-md-4">
					<h5>No of Sections <i class="tip" data-tip-content="How many different sections like halls,lawns etc. your venue has."></i></h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="Count">
					</div>
				</div>

				

			</div>
			<!-- Row / End -->

		</div>
		<!-- Section / End -->

		




	


		<!-- Section -->
		<h3>Location</h3>
		<div class="submit-section">

			<!-- Row -->
			<div class="row with-forms">

				<!-- Address -->
				<div class="col-md-6">
					<h5>Address</h5>
					<input type="text">
				</div>

				<!-- City -->
				<div class="col-md-6">
					<h5>City</h5>
					<input type="text">
				</div>

				<!-- City -->
				<div class="col-md-6">
					<h5>State</h5>
					<input type="text">
				</div>

				<!-- Zip-Code -->
				<div class="col-md-6">
					<h5>Zip-Code</h5>
					<input type="text">
				</div>

			</div>
			<!-- Row / End -->

		</div>
		<!-- Section / End -->


		<!-- Section -->
		<h3>Detailed Information</h3>
		<div class="submit-section">

			<!-- Description -->
			<div class="form">
				<h5>Description</h5>
				<textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
			</div>

			<!-- Row -->
			<div class="row with-forms">

				<!-- Age of Home -->
				<div class="col-md-6">
					<h5>Venue Since <span>(optional)</span></h5>
					<select class="chosen-select-no-single" >
						<option label="blank"></option>	
						<?php $year = date('Y'); ?>
						@for($i = $year; $i >= 1950; $i--)
						 <option>{{ $i }}</option>
						@endfor
					</select>
				</div>

				<!-- Beds -->
				<div class="col-md-6">
					<h5>Rooms Available</h5>
					<select class="chosen-select-no-single" >
						<option label="blank"></option>	
						<option>Not Available</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>More than 4</option>
					</select>
				</div>

				<!-- Area -->
				<div class="col-md-6">
					<h5>Distance From Railway Station</h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="Km">
					</div>
				</div>

				<!-- Area -->
				<div class="col-md-6">
					<h5>Distance From Airport</h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="Km">
					</div>
				</div>

				

			</div>
			<!-- Row / End -->


			<!-- Checkboxes -->
			<h5 class="margin-top-30">Facilities Available</h5>
			<div class="checkboxes in-row margin-bottom-20">
		
				<input id="check-2" type="checkbox" name="check">
				<label for="check-2">Air Conditioning</label>

				<input id="check-3" type="checkbox" name="check">
				<label for="check-3">Swimming Pool</label>

				<input id="check-4" type="checkbox" name="check" >
				<label for="check-4">Ample Parking</label>

				<input id="check-5" type="checkbox" name="check">
				<label for="check-5">Power Backup</label>	


				<input id="check-6" type="checkbox" name="check">
				<label for="check-6">Outdoor Games</label>

				<input id="check-7" type="checkbox" name="check">
				<label for="check-7">Stage</label>

				<input id="check-8" type="checkbox" name="check">
				<label for="check-8">PA System</label>

				<input id="check-9" type="checkbox" name="check">
				<label for="check-9">Multilingual Staff</label>

				<input id="check-8" type="checkbox" name="check">
				<label for="check-8">PA System</label>

				<input id="check-10" type="checkbox" name="check">
				<label for="check-10">CCTV</label>

				<input id="check-11" type="checkbox" name="check">
				<label for="check-11">Restaurant</label>

				<input id="check-12" type="checkbox" name="check">
				<label for="check-12">Laundry</label>

				<input id="check-13" type="checkbox" name="check">
				<label for="check-13">Valet Parking</label>

				<input id="check-14" type="checkbox" name="check">
				<label for="check-14">CCTV</label>
		
			</div>
			<!-- Checkboxes / End -->


			<!-- Checkboxes -->
			<h5 class="margin-top-30">Additional Parameters</h5>
			<div class="checkboxes in-row margin-bottom-20">
                
                <input id="check-15" type="checkbox" name="check">
				<label for="check-15">DJ Allowed</label>

				<input id="check-16" type="checkbox" name="check">
				<label for="check-16">Liquor Allowed</label>
		
				<input id="check-17" type="checkbox" name="check">
				<label for="check-17">External DJ</label>

				<input id="check-18" type="checkbox" name="check">
				<label for="check-18">External Liqour</label>

				<input id="check-19" type="checkbox" name="check">
				<label for="check-19">External Decorator</label>

				<input id="check-20" type="checkbox" name="check">
				<label for="check-20">External Event Planner</label>



				
		
			</div>
			<!-- Checkboxes / End -->

		</div>
		<!-- Section / End -->


		<!-- Section -->
		<h3>Contact Details</h3>
		<div class="submit-section">

			<!-- Row -->
			<div class="row with-forms">

				<!-- Name -->
				<div class="col-md-4">
					<h5>Name</h5>
					<input type="text">
				</div>

				<!-- Email -->
				<div class="col-md-4">
					<h5>E-Mail</h5>
					<input type="text">
				</div>

				<!-- Name -->
				<div class="col-md-4">
					<h5>Phone <span>(optional)</span></h5>
					<input type="text">
				</div>

			</div>
			<!-- Row / End -->

		</div>
		<!-- Section / End -->



			<!-- Section -->
		<h3>Gallery</h3>
		<div class="submit-section">
			<div class="dropzone" ></div>
		</div>
		<!-- Section / End -->


		



		<div class="divider"></div>
		<button type="submit" class="button preview margin-top-5">Save &amp; Add Section Details <i class="fa fa-arrow-circle-right"></i></button>

		</form>
		</div>

	</div>

</div>
</div>

<div class="margin-top-55"></div>

@endsection