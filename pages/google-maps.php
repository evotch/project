<?php include ("../sections/header.php"); ?>

<!--how did this work? https://developers.google.com/maps/tutorials/fundamentals/adding-a-google-map -->
    <style>
      #map_canvas {
        width: auto;
        height: 400px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map_canvas');
        var mapOptions = {
          center: new google.maps.LatLng(47.6097, -122.3331),
          zoom: 12,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<div class="container">
    <div class="row">
    <div class="col-sm-12">
       <div id="map_canvas"></div>
    </div>
    </div>
    </div>

 
<?php include ("../sections/footer.php"); ?>