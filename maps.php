<!DOCTYPE html>
<html>
  <head>
    <title>Simple Google Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPRHlz0U09KfAzHJto32cCxWcSM150AKc&callback=initMap"></script>

    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  
  </head>
  <body>
    <div id="map"style="width: 900px; height: 500px;"></div>
    <script>


function initMap() {
    var uluru = { lat: 30.474048, lng: 31.200163 };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,center: uluru
    });
    var pos = {
        lat: 30.479540066650966,
        lng: 31.17952303252899
    };
    var marker = new google.maps.Marker({
        position: pos,map: map
    });
    var content = "<p style='margin:10px 0'><b>Simple Abdallah Info</b></p>" +
        "<a href='https://www.facebook.com/abdallahsamirelsayed/' target='_blank'><b>MY FACEBOOK</b></a>" +
        "<p style='margin:10px 0'><b>Mobile Phone :  (010)97456260</b></p>" +
        "<p style='margin:10px 0'><a href='http://www.fci.bu.edu.eg/fci' target='_blank'><b>Website : http://www.fci.bu.edu.eg/fci </b></a></p>";
    var info = new google.maps.InfoWindow({
        content: content
    });
    setInterval(function () {
        marker.setAnimation(google.maps.Animation.BOUNCE);
    }, 1000);
    marker.addListener("click", function () {
        info.open(map, marker);
    });}
    </script>
  </body>
</html>