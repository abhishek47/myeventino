(function($) {
    "use strict";
    
    $(window).on('load resize', function() {
        var topbarHeight=$("#top-bar").height();
        var headerHeight=$("#header").innerHeight()+ topbarHeight;
        $(".fs-container").css('height', ''+ $(window).height()- headerHeight+'px');

         var map = new google.maps.Map(document.getElementById('propertyMap'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
    }
    );
   
    
}

)(this.jQuery);