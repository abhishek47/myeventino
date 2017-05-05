@extends('layouts.app')


@section('content')

<!-- Titlebar
================================================== -->
<div id="titlebar" class="property-titlebar margin-bottom-0">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<a href="/venues" class="back-to-listings"></a>
				<div class="property-title">
					<h2>{{ $venue->venue_name }} <span class="property-badge">Best For {{ json_decode($venue->best_for)[0] }}</span></h2>
					<span>
						<a href="#location" class="listing-address">
							<i class="fa fa-map-marker"></i>
							<?= substr( $venue->address , 0, 60); ?>...
						</a>
					</span>
				</div>

				<div class="property-pricing">
					<div><small style="color: #ccc;font-size: 14px">Starts from</small> &#8377 51,000</div>
					<div class="sub-price"><small style="color: #ccc;font-size: 14px">Serves from</small> &#8377 450 / plate</div>
				</div>


			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->

<!-- Slider -->
<div class="fullwidth-property-slider margin-bottom-50">
	<a href="/uploads/venues/1/photos/01.jpg" data-background-image="/uploads/venues/1/photos/01.jpg" class="item mfp-gallery"></a>
	<a href="/uploads/venues/1/photos/02.jpg" data-background-image="/uploads/venues/1/photos/02.jpg" class="item mfp-gallery"></a>
	<a href="/uploads/venues/1/photos/03.jpg" data-background-image="/uploads/venues/1/photos/03.jpg" class="item mfp-gallery"></a>
	<a href="/uploads/venues/1/photos/04.jpg" data-background-image="/uploads/venues/1/photos/04.jpg" class="item mfp-gallery"></a>
	<a href="/uploads/venues/1/photos/05.jpg" data-background-image="/uploads/venues/1/photos/05.jpg" class="item mfp-gallery"></a>
	<a href="/uploads/venues/1/photos/06.jpg" data-background-image="/uploads/venues/1/photos/06.jpg" class="item mfp-gallery"></a>
</div>


<div class="container">
	<div class="row">

		<!-- Property Description -->
		<div class="col-lg-8 col-md-7">
			<div class="property-description">

				<!-- Main Features -->
				<ul class="property-main-features">
					<li>Area <span>{{ $venue->total_area }} sq.ft.</span></li>
					<li>Rating <span><i class="fa fa-star"></i> 3.5</span></li>
					<li>Capacity <span>150-200</span></li>
					<li>Reviews <span>13</span></li>
				</ul>
               
               @if(Request::has('platform'))
                     
                     <br>
					<!-- Widget -->
					<div class="widget">

						<!-- Agent Widget -->
						<div class="agent-widget">
							<div class="agent-title">
								<div class="agent-photo"><img src="/images/avatar4.png" alt="" /></div>
								<div class="agent-details">
									<h4><a href="#">{{ $venue->contact_name }}</a></h4>
									<span><i class="fa fa-phone"></i>{{ $venue->phone }}</span>
								</div>
								<div class="clearfix"></div>
							</div>

							<input type="text" placeholder="Your Name" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$">
							<input type="text" placeholder="Your Phone">
							<textarea>I'm interested in this venue [with the specified requirements] and I'd like to know more details.</textarea>
							<button class="button fullwidth margin-top-5">Get Price &amp; Availability</button>
						</div>
						<!-- Agent Widget / End -->

					</div>
					<!-- Widget / End -->

				@endif


				<!-- Description -->
				<h3 class="desc-headline">Description</h3>
				<div class="show-more">
					<p>
						{{ $venue->description }}
					</p>

					

					<a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a>
				</div>



				<h3 class="desc-headline">Packages</h3>
				<div class="">

			<!-- Toggles Container -->
			<div class="style-2">

				<!-- Toggle 1 -->
				<div class="toggle-wrap">
					<span class="trigger "><a href="#">Package 1<i class="sl sl-icon-plus"></i></a></span>
					<div class="toggle-container">
						<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. Donec ut volutpat metus. Vivamus justo arcu, elementum a sollicitudin pellentesque, tincidunt ac enim. Proin id arcu ut ipsum vestibulum elementum.</p>
					</div>
				</div>

				<!-- Toggle 2 -->
				<div class="toggle-wrap">
					<span class="trigger"><a href="#">Package 2 <i class="sl sl-icon-plus"></i></a></span>
					<div class="toggle-container">
						<p>Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. Donec ut volutpat metus. Aliquam tortor lorem, fringilla tempor dignissim at, pretium et arcu.</p>
					</div>
				</div>

				<!-- Toggle 3 -->
				<div class="toggle-wrap">
					<span class="trigger"><a href="#">Package 3 <i class="sl sl-icon-plus"></i> </a></span>
					<div class="toggle-container">
						<p>Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. Donec ut volutpat metus. Aliquam tortor lorem, fringilla tempor dignissim at, pretium et arcu.</p>
					</div>
				</div>

			</div>
			<!-- Toggles Container / End -->
		</div>

				

				<h3 class="desc-headline">Facilities Offered</h3>
				<ul class="property-features facilities margin-top-0">
				   @if(in_array("wifi", json_decode($venue->facilities)))
					 <li>
                     <div class="row">
                     <div class="col-md-4">
                      <img style="width: 60px;" src="/images/facilities/wifi.png">
                     </div> 
                     <div class="col-md-8" style="padding-top: 10px;">
                      <b class="title">Wifi</b>
                     </div> 
                     </div> 
                   </li>
                  @endif 
                  
                  @if(in_array("power", json_decode($venue->facilities)))
                    <li>
                     <div class="row">
                     <div class="col-md-4">
                      <img style="width: 60px;" src="/images/facilities/light.png">
                     </div> 
                     <div class="col-md-8" style="padding-top: 10px;">
                      <b class="title">24-Hr Electricity</b>
                     </div> 
                     </div> 
                   </li>

                   @endif
                   
                    @if(in_array("restaurant", json_decode($venue->facilities)))
                    <li>
                     <div class="row">
                     <div class="col-md-4">
                      <img style="width: 60px;" src="/images/facilities/food.png">
                     </div> 
                     <div class="col-md-8" style="padding-top: 10px;">
                      <b class="title">Multi-Cuisine Restaurant</b>
                     </div> 
                     </div> 
                   </li>
                   @endif


                    @if(in_array("parking", json_decode($venue->facilities)))

                   <li>
                     <div class="row">
                     <div class="col-md-4">
                      <img style="width: 60px;" src="/images/facilities/parking.png">
                     </div> 
                     <div class="col-md-8" style="padding-top: 10px;">
                      <b class="title">Ample Parking</b>
                     </div> 
                     </div> 
                   </li>

                   @endif

                    @if(in_array("stage", json_decode($venue->facilities)))
                   <li>
                     <div class="row">
                     <div class="col-md-4">
                      <img style="width: 60px;" src="/images/facilities/stage.png">
                     </div> 
                     <div class="col-md-8" style="padding-top: 10px;">
                      <b class="title">Stage</b>
                     </div> 
                     </div> 
                   </li>
                   @endif
                    @if(in_array("pa", json_decode($venue->facilities)))
                   <li>
                     <div class="row">
                     <div class="col-md-4">
                      <img style="width: 60px;" src="/images/facilities/pa.png">
                     </div> 
                     <div class="col-md-8" style="padding-top: 10px;">
                      <b class="title">PA System</b>
                     </div> 
                     </div> 
                   </li>
                   @endif
                    @if(in_array("cctv", json_decode($venue->facilities)))
                   <li>
                     <div class="row">
                     <div class="col-md-4">
                      <img style="width: 60px;" src="/images/facilities/cctv.png">
                     </div> 
                     <div class="col-md-8" style="padding-top: 10px;">
                      <b class="title">CCTV Surveillance</b>
                     </div> 
                     </div> 
                   </li>
                   @endif
                    @if(in_array("multilingual_staff", json_decode($venue->facilities)))
                   <li>
                     <div class="row">
                     <div class="col-md-4">
                      <img style="width: 60px;" src="/images/facilities/translation.png">
                     </div> 
                     <div class="col-md-8" style="padding-top: 10px;">
                      <b class="title">Multi-lingual Staff</b>
                     </div> 
                     </div> 
                   </li>
                   @endif
                    @if(in_array("outdoor_games", json_decode($venue->facilities)))
                    <li>
                     <div class="row">
                     <div class="col-md-4">
                      <img style="width: 60px;" src="/images/facilities/games.png">
                     </div> 
                     <div class="col-md-8" style="padding-top: 10px;">
                      <b class="title">Outdoor Games</b>
                     </div> 
                     </div> 
                   </li>
                   @endif
				</ul>


				<h3 class="desc-headline">Eventino Ratings</h3>
				<ul class="property-features margin-top-0">
					 <li>
                     <div class="row">
                     <div class="col-md-4">
                      <img style="width: 60px;" src="/images/ratings/first.png">
                     </div> 
                     <div class="col-md-8">
                      <b class="title">Ambience</b><br>
                      80%
                     </div> 
                     </div> 
                   </li>

                    <li>
                     <div class="row">
                     <div class="col-md-4">
                      <img style="width: 60px;" src="/images/ratings/second.png">
                     </div> 
                     <div class="col-md-8">
                      <b class="title">Hospitality</b><br>
                      90%
                     </div> 
                     </div> 
                   </li>

                    <li>
                     <div class="row">
                     <div class="col-md-4">
                      <img style="width: 60px;" src="/images/ratings/third.png">
                     </div> 
                     <div class="col-md-8">
                      <b class="title">Food</b><br>
                      70%
                     </div> 
                     </div> 
                   </li>
				</ul>


					<!-- Features -->
				<h3 class="desc-headline">Features</h3>
				<ul class="property-features checkboxes margin-top-0">
				  @if(in_array("air_conditioning", json_decode($venue->facilities)))
					<li>Air Conditioning</li>
			      @endif
			       @if(in_array("pool", json_decode($venue->facilities)))
					<li>Swimming Pool</li>
			      @endif
			      @if(in_array("clubhouse", json_decode($venue->facilities)))
					<li>Clubhouse</li>
			      @endif
			      @if(in_array("laundry", json_decode($venue->facilities)))
					<li>Laundry</li>
			      @endif
			      @if(in_array("valet", json_decode($venue->facilities)))
					<li>Valet Parking</li>
			      @endif	

			      <?php $exclusive = explode(',', $venue->exclusive_features); 	?>
			      @foreach($exclusive as $item)
					<li>{{ $item }}</li>
				  @endforeach	
				</ul>

					<!-- Features -->
				<h3 class="desc-headline">Food Available</h3>
				<ul class="property-features checkboxes margin-top-0">
				 <?php $foods = json_decode($venue->food_available); ?>
				 @if($foods != null)
			      @foreach($foods as $item)
					<li>{{ $item }}</li>
				  @endforeach
				 @endif 	
				</ul>
                

				<h3 class="desc-headline">Seating Capacity</h3>
                <ul class="property-features margin-top-0">
                   <li>
                     <div class="row">
                     <div class="col-md-4">
                      <img style="width: 60px;" src="/images/seatings/theatre.gif">
                     </div> 
                     <div class="col-md-8">
                      <b class="title">Theatre Capacity</b><br>
                      150 People
                     </div> 
                     </div> 
                   </li>

                    <li>
                     <div class="row">
                     <div class="col-md-4">
                      <img style="width: 60px;" src="/images/seatings/floating.gif">
                     </div> 
                     <div class="col-md-8">
                      <b class="title">Floating Capacity</b><br>
                      200 People
                     </div> 
                     </div> 
                   </li>

                    <li>
                     <div class="row">
                     <div class="col-md-4">
                      <img style="width: 60px;" src="/images/seatings/cluster.gif">
                     </div> 
                     <div class="col-md-8">
                      <b class="title">Cluster Capacity</b><br>
                      40 People
                     </div> 
                     </div> 
                   </li>
					
				</ul>


                <h3 class="desc-headline">Venue Policies</h3>
				<ul class="property-features terms margin-top-0">
					<li>Liquor Allowed : {!! in_array("liquor_allowed", json_decode($venue->parameters)) ? '<span>Allowed</span>' : '<span class="danger">Not Allowed</span>' !!}</li>
					<li>DJ Allowed : {!! in_array("dj_allowed", json_decode($venue->parameters)) ? '<span>Allowed</span>' : '<span class="danger">Not Allowed</span>' !!}</li>
					@if(in_array("liquor_allowed", json_decode($venue->parameters)))
					  <li>External Liquor : {!! in_array("external_liquor", json_decode($venue->parameters)) ? '<span>Allowed</span>' : '<span class="danger">Not Allowed</span>' !!}</li>
					@endif
					<li>External Catering :{!! in_array("external_catering", json_decode($venue->parameters)) ? '<span>Allowed</span>' : '<span class="danger">From Panel</span>' !!}</li>
					@if(in_array("dj_allowed", json_decode($venue->parameters)))
					  <li>External DJ: {!! in_array("external_dj", json_decode($venue->parameters)) ? '<span>Allowed</span>' : '<span class="danger">From Panel</span>' !!}</li>
					@endif
					<li>External Decorator : {!! in_array("external_decorator", json_decode($venue->parameters)) ? '<span>Allowed</span>' : '<span class="danger">From Panel</span>' !!}</li>
				    @if($venue->rooms > 0)
					<li>Rooms : <span class="danger">Charged Seperately</span></li>
					@endif
					
				</ul>


                
                



				


				<!-- Location -->
				<h3 class="desc-headline no-border" id="location">Location</h3>
				<div id="propertyMap-container">
					<div id="propertyMap" data-latitude="40.7427837" data-longitude="-73.11445617675781"></div>
					<a href="#" id="streetView">Street View</a>
				</div>



			</div>
		</div>
		<!-- Property Description / End -->


		<!-- Sidebar -->
		<div class="col-lg-4 col-md-5">

			<div class="sidebar sticky right">

				<!-- Widget -->
				<div class="widget margin-bottom-30">
					<button class="widget-button"><i class="fa fa-share"></i> Share</button>
					<button class="widget-button save" data-save-title="Save" data-saved-title="Saved"><span class="like-icon"></span></button>
				</div>
				<!-- Widget / End -->

               @if(!Request::has('platform'))
				<!-- Widget -->
				<div class="widget">

					<!-- Agent Widget -->
					<div class="agent-widget">
						<div class="agent-title">
							<div class="agent-photo"><img src="/images/avatar4.png" alt="" /></div>
							<div class="agent-details">
								<h4><a href="#">{{ $venue->contact_name }}</a></h4>
								<span><i class="fa fa-phone"></i>{{ $venue->phone }}</span>
							</div>
							<div class="clearfix"></div>
						</div>

						<input type="text" placeholder="Your Name" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$">
						<input type="text" placeholder="Your Phone">
						<textarea>I'm interested in this venue [with the specified requirements] and I'd like to know more details.</textarea>
						<button class="button fullwidth margin-top-5">Get Price &amp; Availability</button>
					</div>
					<!-- Agent Widget / End -->

				</div>
				<!-- Widget / End -->

				@endif


				<!-- Widget -->
				<div class="widget">
					<h3 class="margin-bottom-35">Sponsered</h3>

					<div class="listing-carousel outer">
						<!-- Item -->
						<div class="item">
							<div class="listing-item compact">

								<a href="#" class="listing-img-container">

									<div class="listing-badges">
										<span class="featured">Elite</span>
										<span>For Sale</span>
									</div>

									<div class="listing-img-content">
										<span class="listing-compact-title">Eagle Apartments <i>$275,000</i></span>

										<ul class="listing-hidden-content">
											<li>Area <span>530 sq ft</span></li>
											<li>Rooms <span>3</span></li>
											<li>Beds <span>1</span></li>
											<li>Baths <span>1</span></li>
										</ul>
									</div>

									<img src="/images/listing-03.jpg" alt="">
								</a>

							</div>
						</div>
						<!-- Item / End -->

						<!-- Item -->
						<div class="item">
							<div class="listing-item compact">

								<a href="#" class="listing-img-container">

									<div class="listing-badges">
										<span class="featured">Elite</span>
										<span>For Sale</span>
									</div>

									<div class="listing-img-content">
										<span class="listing-compact-title">Selway Apartments <i>$245,000</i></span>

										<ul class="listing-hidden-content">
											<li>Area <span>530 sq ft</span></li>
											<li>Rooms <span>3</span></li>
											<li>Beds <span>1</span></li>
											<li>Baths <span>1</span></li>
										</ul>
									</div>

									<img src="/images/listing-02.jpg" alt="">
								</a>

							</div>
						</div>
						<!-- Item / End -->

						<!-- Item -->
						<div class="item">
							<div class="listing-item compact">

								<a href="#" class="listing-img-container">

									<div class="listing-badges">
										<span class="featured">Elite</span>
										<span>For Sale</span>
									</div>

									<div class="listing-img-content">
										<span class="listing-compact-title">Oak Tree Villas <i>$325,000</i></span>

										<ul class="listing-hidden-content">
											<li>Area <span>530 sq ft</span></li>
											<li>Rooms <span>3</span></li>
											<li>Beds <span>1</span></li>
											<li>Baths <span>1</span></li>
										</ul>
									</div>

									<img src="/images/listing-03.jpg" alt="">
								</a>

							</div>
						</div>
						<!-- Item / End -->
					</div>

				</div>
				<!-- Widget / End -->

			</div>
		</div>
		<!-- Sidebar / End -->

	</div>
</div>


<!-- Footer
================================================== -->
<div class="margin-top-55"></div>


@endsection