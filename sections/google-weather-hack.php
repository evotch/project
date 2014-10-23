 <style>
      html, body{
        height: 100%;
        margin: 0px;
        padding: 0px
      }
       #map-canvas {
        margin: 0px;
        padding: 0px;
        height: 400px;
        width:100%;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=weather"></script>
    <script>
function initialize() {
  var mapOptions = {
    zoom: 6,
    center: new google.maps.LatLng(20.8000, 156.3333)
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  var weatherLayer = new google.maps.weather.WeatherLayer({
    temperatureUnits: google.maps.weather.TemperatureUnit.FAHRENHEIT
  });
  weatherLayer.setMap(map);

  var cloudLayer = new google.maps.weather.CloudLayer();
  cloudLayer.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    <div id="map-canvas"></div>
    