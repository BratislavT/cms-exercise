{{-- display map with marker --}}


<style>
    #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
    }
</style>

<!--The div element for the map -->
<div id="map"></div>
    <script>
            
        // Initializes and add the map
        function initMap() { 
               
		// The location coordinates
		@if ( isset($maps->lat) && isset($maps->lng) )
		    var location = {lat: {{ $maps->lat }}, lng: {{ $maps->lng }} };
		@else
		    var location = {lat: 43.321106, lng: 21.895659};
		@endif      
			    
		// The map, centered
		var map = new google.maps.Map(
		document.getElementById('map'), {zoom: 18, center: location});
			
		// Text to be displayed after click on marker
		@if ( isset($maps['name']) && isset($maps['address']) )
		    var contentString = '<div>'+
			'<p> Name: <b>{{ $maps['name'] }}</b> </p>'+
			'<p> Address: <b>{{ $maps['address'] }}</b> </p>'+
		    '</div>';
		@else 
		    var contentString = '<div>'+
			'<p> Name: <b>Niš</b> </p>'+
			'<p> Address: <b>Trg Kralja Milana</b> </p>'+
		    '</div>';
		@endif                      
		var infowindow = new google.maps.InfoWindow({
		    content: contentString
		});
				   
		// The marker, positioned at provided coordinates
		var marker = new google.maps.Marker({
		    position: location,
                    map: map,
                    title: 'Test'
	        });

	        marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });

        }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIVrlVyznVok1zZnczRg_SyjGcu5oRHvQ&callback=initMap">
    </script>


