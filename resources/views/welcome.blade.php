
@extends('layouts.app')

@section('content')
<!-- Banner
================================================== -->
<div class="parallax" id="parallax-banner" style="" data-background="/images/slider.jpg" data-color="#36383e" data-color-opacity="0.5" data-img-width="2500" data-img-height="1600"  >

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div class="search-container">

                    <!-- Form -->
                    <h2>Find Perfect Destination For Your Event!</h2>

                    <!-- Row With Forms -->
                    <div class="row with-forms">

                      <form method="GET" action="/venues">

                         <!-- Main Search Input -->
                        

                        <!-- Property Type -->
                        <div class="col-md-3">
                            <select data-placeholder="Event Type" name="event_type" class="chosen-select-no-single" >
                                <option value="0">-- Event Type --</option>
                                 <option value="all">All</option>
                                <option value="wedding">Wedding</option>
                                <option value="party">Party</option>
                                <option value="meetings">Meetings &amp; Conferences</option>
                                <option value="ceremonies">Ceremonies</option>
                                <option value="date">Date</option>
                                <option value="others">Others</option>
                            </select>
                        </div>

                        <!-- Status -->
                        <div class="col-md-3">
                            <select data-placeholder="Venue Type" name="venue_type" class="chosen-select-no-single" >
                                <option value="0">-- Venue Type --</option>
                                 <option value="all">All</option>
                                <option value="banquet">Banquet</option>
                                <option value="lawns">Lawns</option>
                                <option value="dome">Dome</option>
                                <option value="conference">Conference Room</option>
                                <option value="resort">Resorts</option>
                                <option value="plot">Plots</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <div class="main-search-input">
                                <input type="text" id="venue-search-input" name="location" placeholder="Enter name or destination" autocomplete="false" value="" />
                                <button class="button" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>

                        
        


                     
                    
                    </form> 

                    </div>
                    <!-- Row With Forms / End -->

                    <!-- Browse Jobs -->
                    <div class="adv-search-btn">
                        More search options? <a href="/venues">Advanced Search</a>
                    </div>
                    
                    <!-- Announce -->
                    <div class="announce">
                        We’ve 1000+ venues for you!
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>

<!-- Content
================================================== -->
<div class="container">
    <div class="row">
    
        <div class="col-md-12">
            <h3 class="headline margin-bottom-25 margin-top-65">Venues Near You &nbsp; <small><i class="fa fa-map-marker"></i> Nashik</small> </h3>
        </div>
        
        <!-- Carousel -->
        <div class="col-md-12">
            <div class="carousel">


            @foreach($venues as $venue)

                <!-- Listing Item -->
                <div class="carousel-item">
                <div class="listing-item">

                        <a href="/venues/show/{{ $venue->slug }}" class="listing-img-container">

                            <div class="listing-badges">
                                <span class="featured">Elite</span>
                                <span><i class="fa fa-map-marker"></i> {{ $venue->city }}</span>
                            </div>

                            <div class="listing-img-content">
                                <span class="listing-price">&#8377 900 <i>hourly</i></span>
                                <span class="like-icon"></span>
                            </div>

                            
                            <div class="listing-carousel">
                                <div><img src="/images/listing-02.jpg" alt=""></div>
                                <div><img src="/images/listing-02.jpg" alt=""></div>
                                <div><img src="/images/listing-02.jpg" alt=""></div>
                            </div>

                        </a>
                        
                        <div class="listing-content">

                            <div class="listing-title">
                                <h4><a href="/venues/show/{{ $venue->slug }}">{{ $venue->venue_name }}</a></h4>
                                <a href="https://maps.google.com/maps?q=Racca+Estate,+Old+Gangapur+Naka+Hanuman+Wadi,+Hanumanwadi+Road,+Panchavati,+Nashik,+Maharashtra+422003,+India" class="listing-address popup-gmaps">
                                    <i class="fa fa-map-marker"></i>
                                    <?= substr( $venue->address , 0, 60); ?>...å
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
                  </div>
               
               @endforeach
                
                



            </div>
        </div>
        <!-- Carousel / End -->

    </div>
</div>



<!-- Fullwidth Section -->
<section class="fullwidth margin-top-105 hidden-xs" data-background-color="#f7f7f7" style="margin-bottom: 0;">

    <!-- Box Headline -->
    <h3 class="headline-box">Our Features</h3>
    
    <!-- Content -->
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6">
                <!-- Icon Box -->
                <div class="icon-box-1">

                    <div class="icon-container">
                        <i class="fa fa-map-marker"></i>
                        
                    </div>

                    <h3>Venues</h3>
                    <p>We have huge list of venues for any particular event you want to have!</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <!-- Icon Box -->
                <div class="icon-box-1">

                    <div class="icon-container">
                        <i class="fa fa-calendar-check-o"></i>
                        
                    </div>

                    <h3>Events</h3>
                    <p>A showcase of exciting events happening near you.</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <!-- Icon Box -->
                <div class="icon-box-1">

                    <div class="icon-container">
                        <i class="fa fa-check-square-o"></i>
                        
                    </div>

                    <h3>Easy To Use</h3>
                    <p>An advanced search panel that help you find the best venue that caters your needs.</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <!-- Icon Box -->
                <div class="icon-box-1">

                    <div class="icon-container">
                        <i class="fa fa-sitemap"></i>
                        
                    </div>

                    <h3>Categorised</h3>
                    <p>Here everything is managed and categorised that shows you exactly what you want.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Fullwidth Section / End -->

<div class="parallax margin-bottom-30" data-background="images/listings-parallax.jpg" data-color="#36383e" data-color-opacity="0.7" data-img-width="800" data-img-height="505" style="background-image: url(&quot;images/listings-parallax.jpg&quot;); background-attachment: fixed; background-size: 1866.14px 1178px; background-position: 50% -53.0945px;"><div class="parallax-overlay" style="background-color: rgb(54, 56, 62); opacity: 0.7;"></div>

    <!-- Infobox -->
    <div class="text-content white-font">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-sm-8">
                    <h2>Finding a best vendor to make it a best event.</h2>
                    <p>We’re full-service, local agents who know how to find people and home each together. We use online tools with an unmatched search capability to make you smarter and faster.</p>
                    <a href="listings-list-with-sidebar.html" class="button margin-top-25">Find Vendors</a>
                </div>
            </div>

        </div>
    </div>

    <!-- Infobox / End -->

</div>



<!-- Featured -->
<div class="container">
    <div class="row">
    
        <div class="col-md-12">
            <h3 class="headline margin-bottom-25 margin-top-65">Featured Events</h3>
        </div>
        
        <!-- Carousel -->
        <div class="col-md-12">
            <div class="carousel">
                
                <!-- Listing Item -->
                <div class="carousel-item">
                    <div class="listing-item compact">

                        <a href="single-property-page-1.html" class="listing-img-container">

                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                                <span><i class="fa fa-map-marker"></i> Nashik</span>
                            </div>

                            <div class="listing-img-content">
                                <span class="listing-compact-title">Event Name <i>&#8377 900/person</i></span>

                                <ul class="listing-hidden-content">
                                    <li>Date <span>Feb 23 - 24</span></li>
                                    <li>Timings <span>10:00 AM - 2:00 PM</span></li>
                                </ul>
                            </div>

                            <img src="/images/single-property-01.jpg" alt="">
                        </a>

                    </div>
                </div>
                <!-- Listing Item / End -->

                <!-- Listing Item -->
                <div class="carousel-item">
                    <div class="listing-item compact">

                        <a href="single-property-page-2.html" class="listing-img-container">

                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                                <span><i class="fa fa-map-marker"></i> Nashik</span>
                            </div>

                            <div class="listing-img-content">
                                <span class="listing-compact-title">Event Name <i>&#8377 900/person</i></span>

                                <ul class="listing-hidden-content">
                                    <li>Date <span>Feb 23 - 24</span></li>
                                    <li>Timings <span>10:00 AM - 2:00 PM</span></li>
                                </ul>
                            </div>

                            <img src="/images/single-property-02.jpg" alt="">
                        </a>

                    </div>
                </div>
                <!-- Listing Item / End -->

                <!-- Listing Item -->
                <div class="carousel-item">
                    <div class="listing-item compact">

                        <a href="single-property-page-1.html" class="listing-img-container">

                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                                <span><i class="fa fa-map-marker"></i> Nashik</span>
                            </div>

                            <div class="listing-img-content">
                                <span class="listing-compact-title">Event Name <i>&#8377 900/person</i></span>

                                <ul class="listing-hidden-content">
                                    <li>Date <span>Feb 23 - 24</span></li>
                                    <li>Timings <span>10:00 AM - 2:00 PM</span></li>
                                </ul>
                            </div>

                            <img src="/images/single-property-03.jpg" alt="">
                        </a>

                    </div>
                </div>
                <!-- Listing Item / End -->

                <!-- Listing Item -->
                <div class="carousel-item">
                    <div class="listing-item compact">

                        <a href="single-property-page-3.html" class="listing-img-container">

                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                                <span><i class="fa fa-map-marker"></i> Nashik</span>
                            </div>

                            <div class="listing-img-content">
                                <span class="listing-compact-title">Event Name <i>&#8377 900/person</i></span>

                                <ul class="listing-hidden-content">
                                    <li>Date <span>Feb 23 - 24</span></li>
                                    <li>Timings <span>10:00 AM - 2:00 PM</span></li>
                                </ul>
                            </div>

                            <img src="/images/single-property-04.jpg" alt="">
                        </a>

                    </div>
                </div>
                <!-- Listing Item / End -->

                <!-- Listing Item -->
                <div class="carousel-item">
                    <div class="listing-item compact">

                        <a href="single-property-page-2.html" class="listing-img-container">

                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                                <span><i class="fa fa-map-marker"></i> Nashik</span>
                            </div>

                            <div class="listing-img-content">
                                <span class="listing-compact-title">Event Name <i>&#8377 900/person</i></span>

                                <ul class="listing-hidden-content">
                                    <li>Date <span>Feb 23 - 24</span></li>
                                    <li>Timings <span>10:00 AM - 2:00 PM</span></li>
                                </ul>
                            </div>

                            <img src="/images/single-property-05.jpg" alt="">
                        </a>

                    </div>
                </div>
                <!-- Listing Item / End -->

                <!-- Listing Item -->
                <div class="carousel-item">
                    <div class="listing-item compact">

                        <a href="single-property-page-1.html" class="listing-img-container">

                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                                <span><i class="fa fa-map-marker"></i> Nashik</span>
                            </div>

                            <div class="listing-img-content">
                                <span class="listing-compact-title">Event Name <i>&#8377 900/person</i></span>

                                <ul class="listing-hidden-content">
                                    <li>Date <span>Feb 23 - 24</span></li>
                                    <li>Timings <span>10:00 AM - 2:00 PM</span></li>
                                </ul>
                            </div>

                            <img src="/images/single-property-06.jpg" alt="">
                        </a>

                    </div>
                </div>
                <!-- Listing Item / End -->

            </div>
        </div>
        <!-- Carousel / End -->

    </div>
</div>
<!-- Featured / End -->




<!-- Fullwidth Section -->
<section class="fullwidth margin-top-95 margin-bottom-0">

    <!-- Box Headline -->
    <h3 class="headline-box">Articles & Tips</h3>

    <div class="container">
        <div class="row">

            <div class="col-md-4">

                <!-- Blog Post -->
                <div class="blog-post">
                    
                    <!-- Img -->
                    <a href="blog-post.html" class="post-img">
                        <img src="/images/blog-post-01.jpg" alt="">
                    </a>
                    
                    <!-- Content -->
                    <div class="post-content">
                        <h3><a href="#">8 Tips to Help You Finding Perfect Venue</a></h3>
                        <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae. </p>

                        <a href="blog-post.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                    </div>

                </div>
                <!-- Blog Post / End -->

            </div>

            <div class="col-md-4">

                <!-- Blog Post -->
                <div class="blog-post">
                    
                    <!-- Img -->
                    <a href="blog-post.html" class="post-img">
                        <img src="/images/blog-post-02.jpg" alt="">
                    </a>
                    
                    <!-- Content -->
                    <div class="post-content">
                        <h3><a href="#">Events you will never regret visiting.</a></h3>
                        <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae. </p>

                        <a href="blog-post.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                    </div>

                </div>
                <!-- Blog Post / End -->

            </div>

            <div class="col-md-4">

                <!-- Blog Post -->
                <div class="blog-post">
                    
                    <!-- Img -->
                    <a href="blog-post.html" class="post-img">
                        <img src="/images/blog-post-03.jpg" alt="">
                    </a>
                    
                    <!-- Content -->
                    <div class="post-content">
                        <h3><a href="#">What to Do a Month Before Your Event</a></h3>
                        <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae. </p>

                        <a href="blog-post.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                    </div>

                </div>
                <!-- Blog Post / End -->

            </div>

        </div>
    </div>
</section>
<!-- Fullwidth Section / End -->




<!-- Flip banner -->
<a href="/venues" class="flip-banner parallax" data-background="images/slider.jpg" data-color="rgba(25, 41, 66, 0.88)" data-color-opacity="0.99" data-img-width="2500" data-img-height="1600">

    <div class="flip-banner-content">
        <h2 class="flip-visible">A place where celebration begins!</h2>
        <h2 class="flip-hidden">Browse Venues <i class="sl sl-icon-arrow-right"></i></h2>
    </div>
</a>

@endsection

@section('js')

<script type="text/javascript">
jQuery(document).ready(function($) {
    // Set the Options for "Bloodhound" suggestion engine
    var engine = new Bloodhound({
        remote: {
            url: '/findVenues?q=%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    $("#venue-search-input").typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        source: engine.ttAdapter(),

        // This will be appended to "tt-dataset-" to form the class name of the suggestion menu.
        name: 'venuesList',

        // the key from the array we want to display (name,id,email,etc...)
        templates: {
            empty: [
                '<div class="list-group search-results-dropdown"><div class="list-group-item">Nothing found.</div></div>'
            ],
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function (data) {
                return '<a href="' + data.venue_name + '" class="list-group-item">' + data.city + '- @' + data.phone + '</a>'
      }
        }
    });
});
</script>
@endsection