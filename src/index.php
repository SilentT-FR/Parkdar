<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Parkdar</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" ></meta>
<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
<script type="text/javascript" src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
<style type="text/css">
 body,h3,h4,h5,h6 {
	padding: 0;
	margin: 0;
	font-family: Verdana, "DejaVu Sans", "Bitstream Vera Sans", Geneva,
		sans-serif;
	font-size: 10pt;
	overflow: hidden;
}

 html,body,#map {
	height: 100%;
}
</style>
</head>
<body>
<div id="map"></div>
<script type="text/javascript"> var map = L.map('map').setView([46.702,2.000], 6);

		L.tileLayer('http://otile2.mqcdn.com/tiles/1.0.0/osm/{z}/{x}/{y}.png', {
			maxZoom: 18,
			attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://www.mapquest.com/">Mapquest</a>',
			id: 'examples.map-i86knfo3'
		}).addTo(map);
		
		</script>
</body>
</html>
