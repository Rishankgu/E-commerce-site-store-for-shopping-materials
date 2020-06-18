<style>
#map{
height: 500px;
width: 97%;
margin: 20px;
}
</style>
<div id="map"></div>
		<script>
			function initMap()
			{
				var location = {lat: 26.760759, lng: 83.373703};
				var map = new google.maps.Map(document.getElementById("map"), {
					zoom: 4,
					center: location
				});
			}
		</script>
		<script async defer src ="http://maps.googleapis.com/maps/api/js?key=AIzaSyDRPXX_P2Tfr9RE0pfntF3ZjuB4NeKH2E8&callback=initMap"></script>