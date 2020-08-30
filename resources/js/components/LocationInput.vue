<template>
	<div id="locationInput">
		<label for="location">Search a location or select one on the map below</label>
		<br>
		<input id="location" name="location" v-on:keyup="search">
		<button id="add" name="addLocation" v-on:click="addLocation">Add Location</button>
		<map />
	</div>
</template>

<script>
    import Map from './Map'

    export default {
        mounted() {
        },
	methods: {
		search: function() {
			window.axios.get('/searchLocation/' + document.getElementById("location").value);
		},
		addLocation: function(event) {
			event.preventDefault();
			window.axios.post('/addLocation/' + document.getElementById("location").value);
		}
	},
	components: {
		Map
	}
    }
</script>
