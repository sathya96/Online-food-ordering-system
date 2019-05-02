<!DOCTYPE html>
<html>
<body>

<h1>My First Google Map</h1>

<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
    //LOCATION
  center:new google.maps.LatLng(2.955359, 101.844521),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyAPRhGTs11JBnIVXrr85PyTASw6FoOw-6c
&callback=myMap"></script>
</body>
</html>