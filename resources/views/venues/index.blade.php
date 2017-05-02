@extends('layouts.app')

@section('content')

<div class="clearfix"></div>
<!-- Header Container / End -->
<a href="#" id="search-trigger" class="float visible-xs">
<i class="fa fa-filter my-float"></i>
</a>


<!-- Search
================================================== -->
<section id="search-panel" class="search margin-bottom-50 hidden-xs">
<div class="container">
	<div class="row">
		<div class="col-md-12">

			<!-- Title -->
			<h3 class="search-title">Find a perfect venue</h3>

			<!-- Form -->
			<div class="main-search-box no-shadow">


				<!-- Row With Forms -->
				<div class="row with-forms">

					<!-- Status -->
					<div class="col-md-3">
						<select data-placeholder="Event Type" name="event_type" class="chosen-select-no-single" >
						 @if(array_key_exists('event_type', $queries))
							<option value="0" {{ $queries['event_type'] == '0' ? 'selected' : '' }}>-- Event Type --</option>
                            <option value="wedding" {{ $queries['event_type'] == 'wedding' ? 'selected' : '' }}>Wedding</option>
                            <option value="party" {{ $queries['event_type'] == 'party' ? 'selected' : '' }}>Party</option>
                            <option value="meetings" {{ $queries['event_type'] == 'meetings' ? 'selected' : '' }}>Meetings &amp; Conferences</option>
                            <option value="ceremonies" {{ $queries['event_type'] == 'ceremonies' ? 'selected' : '' }}>Ceremonies</option>
                            <option value="date" {{ $queries['event_type'] == 'date' ? 'selected' : '' }}>Date</option>
                            <option value="others" {{ $queries['event_type'] == 'others' ? 'selected' : '' }}>Others</option>

                          @else 

                            <option value="0">-- Event Type --</option>
                            <option value="wedding" >Wedding</option>
                            <option value="party" >Party</option>
                            <option value="meetings">Meetings &amp; Conferences</option>
                            <option value="ceremonies">Ceremonies</option>
                            <option value="date">Date</option>
                            <option value="others">Others</option>  

                          @endif  
						</select>
					</div>

					<!-- Property Type -->
					<div class="col-md-3">
						<select data-placeholder="Venue Type" name="venue_type" class="chosen-select-no-single" >
                           @if(array_key_exists('venue_type', $queries))

							  <option value="0" {{ $queries['venue_type'] == '0' ? 'selected' : '' }}>-- Venue Type --</option>
                                <option value="banquet" {{ $queries['venue_type'] == 'banquet' ? 'selected' : '' }}>Banquet</option>
                                <option value="lawns" {{ $queries['venue_type'] == 'lawns' ? 'selected' : '' }}>Lawns</option>
                                <option value="dome" {{ $queries['venue_type'] == 'dome' ? 'selected' : '' }}>Dome</option>
                                <option value="conference" {{ $queries['venue_type'] == 'conference' ? 'selected' : '' }}>Conference Room</option>
                            @else
                               <option value="0" >-- Venue Type --</option>
                                <option value="banquet" >Banquet</option>
                                <option value="lawns" >Lawns</option>
                                <option value="dome" >Dome</option>
                                <option value="conference" >Conference Room</option>


                            @endif    
						</select>
					</div>

					<!-- Main Search Input -->
					<div class="col-md-6">
						<div class="main-search-input">
							<input type="text" name="location" placeholder="Enter address e.g. street, city or state" value="{{ array_key_exists('location', $queries) ? $queries['location'] : '' }}"/>
							<button class="button" type="submit">Search</button>
						</div>
					</div>

				</div>
				<!-- Row With Forms / End -->


				<!-- Row With Forms -->
				<div class="row with-forms">

					<!-- Min Price -->
					<div class="col-md-3">
						
						<!-- Select Input -->
						<div class="select-input ">
							<input type="text" name="area" placeholder="Area Required" data-unit="Sq Ft">
							
						</div>
						<!-- Select Input / End -->

					</div>

					<!-- Max Price -->
					<div class="col-md-3">
						
						<!-- Select Input -->
						<div class="select-input">
							<input type="text" name="people" placeholder="No. Of People" data-unit="Count">
						
						</div>
						<!-- Select Input / End -->

					</div>


					<!-- Min Price -->
					<div class="col-md-3">
						
						<!-- Select Input -->
						<div class="select-input ">
							<input type="text" name="minprice" placeholder="Min Price/Person" data-unit="INR">
							
						</div>
						<!-- Select Input / End -->

					</div>


					<!-- Max Price -->
					<div class="col-md-3">
						
						<!-- Select Input -->
						<div class="select-input">
							<input type="text" name="maxprice" placeholder="Max Price/Person" data-unit="INR">
							
						</div>
						<!-- Select Input / End -->

					</div>

				</div>
				<!-- Row With Forms / End -->


				<!-- More Search Options -->
				<a href="#" class="more-search-options-trigger margin-top-10" data-open-title="More Options" data-close-title="Less Options"></a>

				<div class="more-search-options relative">
					<div class="more-search-options-container">

						


						<!-- Checkboxes -->
						<div class="checkboxes in-row">
					
							<input id="check-1" type="checkbox" name="check">
							<label for="check-1">Air Conditioning</label>

							<input id="check-2" type="checkbox" name="check">
							<label for="check-2">Swimming Pool</label>

							<input id="check-3" type="checkbox" name="check">
							<label for="check-3">Restaurant</label>


							<input id="check-4" type="checkbox" name="check">
							<label for="check-4">Bedrooms</label>

							<input id="check-5" type="checkbox" name="check">
							<label for="check-5">Stage</label>

							<input id="check-6" type="checkbox" name="check">
							<label for="check-6">Liquor Served</label>

							<input id="check-7" type="checkbox" name="check">
							<label for="check-7">Valet Parking</label>	

							<input id="check-8" type="checkbox" name="check">
							<label for="check-8">External DJ</label>

							<input id="check-9" type="checkbox" name="check">
							<label for="check-9">External Decoration</label>

							<input id="check-10" type="checkbox" name="check">
							<label for="check-10">External Catering</label>

							<input id="check-11" type="checkbox" name="check">
							<label for="check-11">External Liquor</label>
					
						</div>
						<!-- Checkboxes / End -->

					</div>

				</div>
				<!-- More Search Options / End -->


			</div>
			<!-- Box / End -->
		</div>
	</div>
</div>
</section>



<!-- Content
================================================== -->
<div class="container">
	<div class="row fullwidth-layout">

		<div class="col-md-12">

			<!-- Sorting / Layout Switcher -->
			<div class="row margin-bottom-15">

				<div class="col-md-6">
					<!-- Sort by 
					<div class="sort-by">
						<label>Sort by:</label>

						<div class="sort-by-select">
							<select data-placeholder="Default order" class="chosen-select-no-single" >
								<option>Default Order</option>	
								<option>Price Low to High</option>
								<option>Price High to Low</option>
								<option>Newest Venues</option>
								<option>Oldest Venues</option>
							</select>
						</div>
					</div>-->
				</div>

				<div class="col-md-6">
					<!-- Layout Switcher -->
					<div class="layout-switcher">
						<a href="#" class="list"><i class="fa fa-th-list"></i></a>
						<a href="#" class="grid"><i class="fa fa-th-large"></i></a>
						<a href="#" class="grid-three"><i class="fa fa-th"></i></a>
					</div>
				</div>
			</div>

			
			<!-- Listings -->
			<div class="listings-container list-layout">

				<!-- Listing Item -->
				<div class="listing-item">

						<a href="/venues/show" class="listing-img-container">

							<div class="listing-badges">
							    <span class="featured">Elite</span>
								<span><i class="fa fa-map-marker"></i> Nashik</span>
							</div>

							<div class="listing-img-content">
								<span class="listing-price">&#8377 900 <i>hourly</i></span>
								<span class="like-icon"></span>
							</div>

							<img src="/images/listing-02.jpg" alt="">

						</a>
						
						<div class="listing-content">

							<div class="listing-title">
								<h4><a href="/venues/show">Racca's Green Square</a></h4>
								<a href="https://maps.google.com/maps?q=Racca+Estate,+Old+Gangapur+Naka+Hanuman+Wadi,+Hanumanwadi+Road,+Panchavati,+Nashik,+Maharashtra+422003,+India" class="listing-address popup-gmaps">
									<i class="fa fa-map-marker"></i>
									<?= substr('Racca Estate, Old Gangapur Naka Hanuman Wadi, Hanumanwadi Road, Panchavati, Nashik, Maharashtra 422003, India', 0, 60); ?>...
								</a>
							</div>

							<ul class="listing-features">
								<li>Rating <span><i class="fa fa-star"></i> 3.5</span></li>
								<li>Capacity <span>100-200</span></li>
								<li>Reviews <span>1</span></li>
							</ul>

							<div class="listing-footer">
								<a href="#"><i class="fa fa-user"></i> 36 Favourites</a>
								<span><i class="fa fa-eye"></i> 19 Views</span>
							</div>

						</div>

					</div>
				<!-- Listing Item / End -->


				<!-- Listing Item -->
				<div class="listing-item">

						<a href="/venues/show" class="listing-img-container">

							<div class="listing-badges">
								<span class="featured">Elite</span>
								<span><i class="fa fa-map-marker"></i> Nashik</span>
							</div>

							<div class="listing-img-content">
								<span class="listing-price">&#8377 275,000 <i>&#8377 520 / Hr.</i></span>
								<span class="like-icon tooltip"></span>
							</div>

							<div class="listing-carousel">
								<div><img src="/images/listing-01.jpg" alt=""></div>
								<div><img src="/images/listing-01b.jpg" alt=""></div>
								<div><img src="/images/listing-01c.jpg" alt=""></div>
							</div>

						</a>
						
						<div class="listing-content">

							<div class="listing-title">
								<h4><a href="/venues/show">G.P. Farm Nashik</a></h4>
								<a href="https://maps.google.com/maps?q=G.P Farm" class="listing-address popup-gmaps">
									<i class="fa fa-map-marker"></i>
									<?= substr('Maharashtra State Highway 26, Opp. Stone Crusher, Harsul Road, Girnare, Nashik, Maharashtra 422203, India', 0, 60); ?>...
								</a>
							</div>

							<ul class="listing-features">
								<li>Rating <span><i class="fa fa-star"></i> 3.5</span></li>
								<li>Capacity <span>300-400</span></li>
								<li>Reviews <span>1</span></li>
							</ul>

							<div class="listing-footer">
								<a href="#"><i class="fa fa-user"></i> 27 Favourites</a>
								<span><i class="fa fa-eye"></i> 36 Views</span>
							</div>

						</div>

					</div>
				<!-- Listing Item / End -->


				<!-- Listing Item -->
				<div class="listing-item">

						<a href="/venues/show" class="listing-img-container">

							<div class="listing-badges">
								<span><i class="fa fa-map-marker"></i> Nashik</span>
							</div>

							<div class="listing-img-content">
								<span class="listing-price">&#8377 900 <i>hourly</i></span>
								<span class="like-icon"></span>
							</div>

							<img src="/images/listing-02.jpg" alt="">

						</a>
						
						<div class="listing-content">

							<div class="listing-title">
								<h4><a href="/venues/show">Bon Vivant Nashik</a></h4>
								<a href="https://maps.google.com/maps?q=Bon+Vivant,+Nashik,+Maharashtra,+India" class="listing-address popup-gmaps">
									<i class="fa fa-map-marker"></i>
									<?= substr('Patil Park, Old Gangapur Naka, Opposite To Dongre Vasti Gruha, Yashwant Colony, Patil Colony, Nashik, Maharashtra 422002, India', 0, 60); ?>...
								</a>
							</div>

							<ul class="listing-features">
								<li>Rating <span><i class="fa fa-star"></i> 3.5</span></li>
								<li>Capacity <span>200-300</span></li>
								<li>Reviews <span>1</span></li>
							</ul>

							<div class="listing-footer">
								<a href="#"><i class="fa fa-user"></i> 19 Favourites</a>
								<span><i class="fa fa-eye"></i> 21 Views</span>
							</div>

						</div>

					</div>
				<!-- Listing Item / End -->


				<!-- Listing Item -->
				<div class="listing-item">

						<a href="/venues/show" class="listing-img-container">

							<div class="listing-badges">
								<span><i class="fa fa-map-marker"></i> Nashik</span>
							</div>

							<div class="listing-img-content">
								<span class="listing-price">&#8377 900 <i>hourly</i></span>
								<span class="like-icon"></span>
							</div>

							<img src="/images/listing-05.jpg" alt="">

						</a>
						
						<div class="listing-content">

							<div class="listing-title">
								<h4><a href="/venues/show">Vrindavan Lawns</a></h4>
								<a href="https://maps.google.com/maps?q=Bon+Vivant,+Nashik,+Maharashtra,+India" class="listing-address popup-gmaps">
									<i class="fa fa-map-marker"></i>
									<?= substr('Patil Park, Old Gangapur Naka, Opposite To Dongre Vasti Gruha, Yashwant Colony, Patil Colony, Nashik, Maharashtra 422002, India', 0, 60); ?>...
								</a>
							</div>

							<ul class="listing-features">
								<li>Rating <span><i class="fa fa-star"></i> 3.5</span></li>
								<li>Capacity <span>200-300</span></li>
								<li>Reviews <span>1</span></li>
							</ul>

							<div class="listing-footer">
								<a href="#"><i class="fa fa-user"></i> 19 Favourites</a>
								<span><i class="fa fa-eye"></i> 21 Views</span>
							</div>

						</div>

					</div>
				<!-- Listing Item / End -->


				<!-- Listing Item -->
				<div class="listing-item">

						<a href="/venues/show" class="listing-img-container">

							<div class="listing-badges">
								<span><i class="fa fa-map-marker"></i> Nashik</span>
							</div>

							<div class="listing-img-content">
								<span class="listing-price">&#8377 900 <i>hourly</i></span>
								<span class="like-icon"></span>
							</div>

							<img src="/images/listing-03.jpg" alt="">

						</a>
						
						<div class="listing-content">

							<div class="listing-title">
								<h4><a href="/venues/show">Veg Aroma</a></h4>
								<a href="https://maps.google.com/maps?q=Bon+Vivant,+Nashik,+Maharashtra,+India" class="listing-address popup-gmaps">
									<i class="fa fa-map-marker"></i>
									<?= substr('Patil Park, Old Gangapur Naka, Opposite To Dongre Vasti Gruha, Yashwant Colony, Patil Colony, Nashik, Maharashtra 422002, India', 0, 60); ?>...
								</a>
							</div>

							<ul class="listing-features">
								<li>Rating <span><i class="fa fa-star"></i> 3.5</span></li>
								<li>Capacity <span>200-300</span></li>
								<li>Reviews <span>1</span></li>
							</ul>

							<div class="listing-footer">
								<a href="#"><i class="fa fa-user"></i> 19 Favourites</a>
								<span><i class="fa fa-eye"></i> 21 Views</span>
							</div>

						</div>

					</div>
					<!-- Listing Item / End -->

				</div>
				<!-- Listing Item / End -->

				
				

			</div>
			<!-- Listings Container / End -->

			<div class="clearfix"></div>
			<!-- Pagination -->
			<div class="pagination-container margin-top-20">
				<nav class="pagination">
					<ul>
						<li><a href="#" class="current-page">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li class="blank">...</li>
						<li><a href="#">22</a></li>
					</ul>
				</nav>

				<nav class="pagination-next-prev hidden-xs">
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
