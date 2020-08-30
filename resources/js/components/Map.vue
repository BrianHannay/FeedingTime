<template>
	    <div id="map">
		<h1>Map here</h1>
	</div>
</template>

<script>
    export default {
        mounted() {
		var script = document.createElement('script');
		  script.async = true;
		  script.defer = true;
		  script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDNNXJZwgLjXeeiCWNkD1k0yrUht2QbD0A&callback=initMap';

		// Initialize and add the map
		window.initMap = function() {
		  // my location
		  var center = {lat: 48.75, lng: -123.67};
		  // The map, centered at Uluru
		  var map = new google.maps.Map(
		      document.getElementById('map'), {zoom: 4, center: center});

		  // Zoom in the map
		  map.setZoom(8);

		};
		  document.querySelector('head').appendChild(script);
        },
	name: 'map'
    }
</script>
