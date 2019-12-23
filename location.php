<!doctyp html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Get Latitude and Longitude</title>
	<script src="http://maps.google.com/maps/api/js?libraries=places&region=uk&language=en&sensor=true"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
<body>
<center>
    <p id ='lat'></p>
    <p id ='log'></p>
    <button onclick="getLocation()">Get Your Current Location</button>

<form method="post">
            latitude:<input  name="latitude" class="MapLat" value="" type="text" placeholder="Latitude" style="width: 161px;" >
            longitude:<input   name="longitude" class="MapLon" value="" type="text" placeholder="Longitude" style="width: 161px;" >
            
    <div id="map_canvas" style="height: 450px;width: 90%;margin: 0.6em;"></div>
    <br/>
    <input type="submit" name="btnsub" value="Save Locations"/>

    <script>
var lat = document.getElementById("lat");
var log = document.getElementById("log");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else { 
    //x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
    
function showPosition(position) {
    lat.value=position.coords.latitude;
    log.value =position.coords.longitude;

 
}


</script>
    <?php         
 include_once "Database.php";
 $db=new Database();    
        

               
                $r= $db->RUNSearch("select * from addressbook");
                while($rows=mysqli_fetch_assoc($r))
                {
                    $lat=$rows['Latitude'];
                    $lang=$rows['Longitude'];
                   

                    echo($lat);
              ?>
  
    </form>
</center>



<script>
     $(function () {
         var lat = <?php  echo($lat); ?>,
             lng = <?php  echo($lang); ?>,
             latlng = new google.maps.LatLng(lat, lng),
             image = 'http://www.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png';
         //zoomControl: true,
         //zoomControlOptions: google.maps.ZoomControlStyle.LARGE,
         var mapOptions = {
             center: new google.maps.LatLng(lat, lng),
             zoom: 13,
             mapTypeId: google.maps.MapTypeId.ROADMAP,
             panControl: true,
             panControlOptions: {
                 position: google.maps.ControlPosition.TOP_RIGHT
             },
             zoomControl: true,
             zoomControlOptions: {
                 style: google.maps.ZoomControlStyle.LARGE,
                 position: google.maps.ControlPosition.TOP_left
             }
         },
         map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions),
             marker = new google.maps.Marker({
                 position: latlng,
                 map: map,
                 icon: image
             });
         var input = document.getElementById('searchTextField');
         var autocomplete = new google.maps.places.Autocomplete(input, {
             types: ["geocode"]
         });
         autocomplete.bindTo('bounds', map);
         var infowindow = new google.maps.InfoWindow();
         google.maps.event.addListener(autocomplete, 'place_changed', function (event) {
             infowindow.close();
             var place = autocomplete.getPlace();
             if (place.geometry.viewport) {
                 map.fitBounds(place.geometry.viewport);
             } else {
                 map.setCenter(place.geometry.location);
                 map.setZoom(17);
             }
             moveMarker(place.name, place.geometry.location);
             $('.MapLat').val(place.geometry.location.lat());
             $('.MapLon').val(place.geometry.location.lng());
         });
         google.maps.event.addListener(map, 'click', function (event) {
             $('.MapLat').val(event.latLng.lat());
             $('.MapLon').val(event.latLng.lng());
             infowindow.close();
                     var geocoder = new google.maps.Geocoder();
                     geocoder.geocode({
                         "latLng":event.latLng
                     }, function (results, status) {
                         console.log(results, status);
                         if (status == google.maps.GeocoderStatus.OK) {
                             console.log(results);
                             var lat = results[0].geometry.location.lat(),
                                 lng = results[0].geometry.location.lng(),
                                 placeName = results[0].address_components[0].long_name,
                                 latlng = new google.maps.LatLng(lat, lng);
                             moveMarker(placeName, latlng);
                             $("#searchTextField").val(results[0].formatted_address);
                         }
                     });
         });
        
         function moveMarker(placeName, latlng) {
             marker.setIcon(image);
             marker.setPosition(latlng);
             infowindow.setContent(placeName);
             //infowindow.open(map, marker);
         }
       
     });
</script>
             <?php } ?>   

             <?php

include_once "Database.php";
 $db=new Database();    
        if(isset($_POST['btnsub']))
        {
$db->RUNDML("insert into addressbook values('".$_POST['latitude']."','".$_POST['longitude']."')","");

        }
?>
</body>
</html>