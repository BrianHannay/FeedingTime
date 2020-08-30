	    <div id="map"></div>
	    <script>
	// Initialize and add the map
	function initMap() {
	  // my location
	  var center = {lat: 48.75, lng: -123.67};
	  // The map, centered at Uluru
	  var map = new google.maps.Map(
	      document.getElementById('map'), {zoom: 4, center: center});

	  // Zoom in the map
	  map.setZoom(8);

	}
	    </script>
	    <!--Load the API from the specified URL
	    * The async attribute allows the browser to render the page while the API loads
	    * The key parameter will contain your own API key (which is not needed for this tutorial)
	    * The callback parameter executes the initMap() function
	    -->
	    <script defer
	    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNNXJZwgLjXeeiCWNkD1k0yrUht2QbD0A&callback=initMap">
	    </script>
