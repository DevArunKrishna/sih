<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Live Demo of Google Maps Geocoding Example with PHP</title>

	<style>
	body{
		font-family:arial;
		font-size:.8em;
	}

	input[type=text]{
		padding:0.5em;
		width:20em;
	}

	input[type=submit]{
		padding:0.4em;
	}

	#gmap_canvas{
		width:100%;
		height:30em;
	}

	#map-label,
	#address-examples{
		margin:1em 0;
	}
	</style>

</head>
<body>


	<!-- google map will be shown here -->
	<div id="gmap_canvas">Loading map...</div>
	<div id='map-label'>Map shows approximate location.</div>

	<!-- JavaScript to show google map -->
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyBFqDl94D-umhnlGarGoq0VPP5ot3Xl4ew"></script>
	<script type="text/javascript">
		function init_map() {
			var myOptions = {
				zoom: 14,
				center: new google.maps.LatLng(12.9673484, 80.1526888),
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
			marker = new google.maps.Marker({
				map: map,
				position: new google.maps.LatLng(12.9673484, 80.1526888)
			});
			infowindow = new google.maps.InfoWindow({
				content: "Pallavaram, Chennai, Tamil Nadu, India"
			});
			google.maps.event.addListener(marker, "click", function () {
				infowindow.open(map, marker);
			});
			infowindow.open(map, marker);
		}
		google.maps.event.addDomListener(window, 'load', init_map);
	</script>

	
<div id='address-examples'>
	<div>Address examples:</div>
	<div>1. G/F Makati Cinema Square, Pasong Tamo, Makati City</div>
	<div>2. 80 E.Rodriguez Jr. Ave. Libis Quezon City</div>
</div>

<!-- enter any address -->
<form action="" method="post">
	<input type='text' name='address' placeholder='Enter any address here' />
	<input type='submit' value='Geocode!' />
</form>


</body>
</html>
