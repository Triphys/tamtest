/* eslint-disable */
import { tns } from "tiny-slider"

export default {
  init() {
    // JavaScript to be fired on the project page
    
    //Contact page toggle
    $(document).ready(function(){
      $('.contactPlaces--item').click(function() {
        if ($(this).hasClass('active')){
        } else {
          $(this).toggleClass("active");
          $('.contactPlaces--item').not(this).removeClass("active")
          const instructor = this.id;
          $('.contactPlace[data-instructor!="' + instructor + '"]').removeClass('active');
          $('.contactPlace[data-instructor="' + instructor + '"]').addClass('active');
        }
      });
    });

    (function( $ ) {

      /**
       * initMap
       *
       * Renders a Google Map onto the selected jQuery element
       *
       * @date    22/10/19
       * @since   5.8.6
       *
       * @param   jQuery $el The jQuery element.
       * @return  object The map instance.
       */
      function initMap( $el ) {
      
          // Find marker elements within map.
          var $markers = $el.find('.marker');
      
          // Create gerenic map.
          var mapArgs = {
              zoom: 19,
              center: new google.maps.LatLng(0, 0),
              mapTypeControl: false,
              panControl: false,
              scrollwheel: true,
              zoomControlOptions: {
                style: google.maps.ZoomControlStyle.SMALL,
                position: google.maps.ControlPosition.RIGHT_CENTER
              },
              styles: [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}]
          };
          var map = new google.maps.Map( $el[0], mapArgs );
      
          // Add markers.
          map.markers = [];
          $markers.each(function(){
              initMarker( $(this), map );
          });
      
          // Center map based on markers.
          centerMap( map );
      
          // Return map instance.
          return map;
      }
      
      /**
       * initMarker
       *
       * Creates a marker for the given jQuery element and map.
       *
       * @date    22/10/19
       * @since   5.8.6
       *
       * @param   jQuery $el The jQuery element.
       * @param   object The map instance.
       * @return  object The marker instance.
       */
      function initMarker( $marker, map ) {
      
          // Get position from marker.
          var lat = $marker.data('lat');
          var lng = $marker.data('lng');
          var latLng = {
              lat: parseFloat( lat ),
              lng: parseFloat( lng )
          };
      
          // Create marker instance.
          var marker = new google.maps.Marker({
              position : latLng,
              map: map
          });
      
          // Append to reference for later use.
          map.markers.push( marker );
      
          // If marker contains HTML, add it to an infoWindow.
          if( $marker.html() ){
      
              // Create info window.
              var infowindow = new google.maps.InfoWindow({
                  content: $marker.html()
              });
      
              // Show info window when marker is clicked.
              google.maps.event.addListener(marker, 'click', function() {
                  infowindow.open( map, marker );
              });
          }
      }
      
      /**
       * centerMap
       *
       * Centers the map showing all markers in view.
       *
       * @date    22/10/19
       * @since   5.8.6
       *
       * @param   object The map instance.
       * @return  void
       */
      function centerMap( map ) {
      
          // Create map boundaries from all map markers.
          var bounds = new google.maps.LatLngBounds();
          map.markers.forEach(function( marker ){
              bounds.extend({
                  lat: marker.position.lat(),
                  lng: marker.position.lng()
              });
          });
      
          // Case: Single marker.
          if( map.markers.length == 1 ){
              map.setCenter( bounds.getCenter() );
      
          // Case: Multiple markers.
          } else{
              map.fitBounds( bounds );
          }
      }
      
      // Render maps on page load.
      $(document).ready(function(){
          $('.acf-map').each(function(){
              var map = initMap( $(this) );
          });
      });
      
      })(jQuery);

  },
};
