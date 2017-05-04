@extends('layouts.app')


@section('content')

<!-- Titlebar
================================================== -->
<div id="titlebar" class="submit-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><i class="fa fa-plus-circle"></i> Manage Your Sections Information</h2>
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
  

        @if( session('flash_title') && session('flash_message'))

		<div class="notification notice large margin-bottom-55">
			<h4>{{ session('flash_title') }}</h4>
			<p>{{ session('flash_message') }}</p>
		</div>
      
       @endif
	



				<!-- Section -->
		<h3>Section 1 Info</h3>
		<div class="submit-section">
		  <form>

			<!-- Row -->
			<div class="row with-forms">

			   <!-- Name -->
				<div class="col-md-4">
					<h5>Name of Section</h5>
					<input type="text">
				</div>

				<div class="col-md-4">
					<h5>Section Type</h5>
					<select class="chosen-select-no-single" >
						<option label="blank"></option>	
						 <option value="banquet" >Banquet</option>
                        <option value="lawns" >Lawn</option>
                        <option value="dome" >Dome</option>
                        <option value="conference" >Conference Room</option>

					</select>
				</div>

				<!-- Name -->
				<div class="col-md-4">
					<h5>Theatre Capacity</h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="Count">
					</div>
				</div>

				<!-- Email -->
				<div class="col-md-4">
					<h5>Floating Capacity</h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="Count">
					</div>
				</div>

				<!-- Name -->
				<div class="col-md-4">
					<h5>Cluster Capacity</span></h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="Count">
					</div>
				</div>

				<!-- Price -->
				<div class="col-md-4">
					<h5>Approx Price <i class="tip" data-tip-content="Type overall or average price  to be displayed on Eventino."></i></h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="USD">
					</div>
				</div>

				<!-- Area -->
				<div class="col-md-4">
					<h5>Lawn Area</h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="Sq Ft">
					</div>
				</div>

			</div>
			<!-- Row / End -->

		</div>
		<!-- Section / End -->

			<!-- Section -->
		<h3>Gallery</h3>
		<div class="submit-section">
			<div action="/file-upload" class="dropzone" ></div>
		</div>
		<!-- Section / End -->



		<div class="divider"></div>
		<a href="#" class="button preview margin-top-5">Save Section 1 <i class="fa fa-arrow-circle-right"></i></a>

		

		</form>


				<!-- Section -->

				<div class="margin-top-55"></div>
		<h3>Section 2 Info</h3>
		<div class="submit-section">
		  <form>

			<!-- Row -->
			<div class="row with-forms">

			   <!-- Name -->
				<div class="col-md-4">
					<h5>Name of Section</h5>
					<input type="text">
				</div>

				<div class="col-md-4">
					<h5>Section Type</h5>
					<select class="chosen-select-no-single" >
						<option label="blank"></option>	
						 <option value="banquet" >Banquet</option>
                        <option value="lawns" >Lawn</option>
                        <option value="dome" >Dome</option>
                        <option value="conference" >Conference Room</option>

					</select>
				</div>

				<!-- Name -->
				<div class="col-md-4">
					<h5>Theatre Capacity</h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="Count">
					</div>
				</div>

				<!-- Email -->
				<div class="col-md-4">
					<h5>Floating Capacity</h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="Count">
					</div>
				</div>

				<!-- Name -->
				<div class="col-md-4">
					<h5>Cluster Capacity</span></h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="Count">
					</div>
				</div>

				<!-- Price -->
				<div class="col-md-4">
					<h5>Approx Price <i class="tip" data-tip-content="Type overall or average price  to be displayed on Eventino."></i></h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="USD">
					</div>
				</div>

				<!-- Area -->
				<div class="col-md-4">
					<h5>Lawn Area</h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="Sq Ft">
					</div>
				</div>

			</div>
			<!-- Row / End -->

		</div>
		<!-- Section / End -->

			<!-- Section -->
		<h3>Gallery</h3>
		<div class="submit-section">
			<div action="/file-upload" class="dropzone" ></div>
		</div>
		<!-- Section / End -->



		<div class="divider"></div>
		<a href="#" class="button preview margin-top-5">Save Section 2 <i class="fa fa-arrow-circle-right"></i></a>

		

		</form>


 <div class="margin-top-55"></div>
		<div class="divider"></div>
		<a href="#" class="button preview margin-top-5">Preview My Page <i class="fa fa-arrow-circle-right"></i></a>
</div>
		
	</div>

</div>
</div>

<div class="margin-top-55"></div>

@endsection