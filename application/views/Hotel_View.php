<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hotel Map</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var map;
      var infoWindow;
      var service;

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 13.288744, lng: 100.927035},
          zoom: 16,
          styles: [{
            stylers: [{ visibility: 'simplified' }]
          }, {
            elementType: 'labels',
            stylers: [{ visibility: 'off' }]
          }]
        });
        

        infoWindow = new google.maps.InfoWindow();
        service = new google.maps.places.PlacesService(map);

        // The idle event is a debounced event, so we can query & listen without
        // throwing too many requests at the server.
        map.addListener('idle', performSearch);
      }

      function performSearch() {
        var request = {
          bounds: map.getBounds(),
          keyword: 'Hotel'
        };
        service.radarSearch(request, callback);
      }

      function callback(results, status) {
        if (status !== google.maps.places.PlacesServiceStatus.OK) {
          console.error(status);
          return;
        }
        for (var i = 0, result; result = results[i]; i++) {
          addMarker(result);
        }
      }

      function addMarker(place) {
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location,
          icon: {
            url: 'https://scontent.fbkk14-1.fna.fbcdn.net/v/t1.0-9/29595102_788631494665282_2968581575602579790_n.jpg?_nc_cat=0&oh=1bd09960bf96a7db6200161c3ffc1508&oe=5B5278FA',
            anchor: new google.maps.Point(30, 30),
            scaledSize: new google.maps.Size(30, 30)
          }
        });

        google.maps.event.addListener(marker, 'click', function() {
          service.getDetails(place, function(result, status) {
            if (status !== google.maps.places.PlacesServiceStatus.OK) {
              console.error(status);
              return;
            }
            infoWindow.setContent(result.name);
            infoWindow.open(map, marker);
          });
        });
      }
    </script>
    <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    #map {
      height: 100%;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
      height: 40%;
      margin: 0;
      padding: 0;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">Logo</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php base_url();?>/Barry">Home</a></li>
          <li><a href="#">Hotel</a></li>
          <li><a href="#">Restaurant</a></li>
          <li><a href="#">Attractions</a></li>
          <li><a href="#">Recipe</a></li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="container-fluid text-center"> 
    <div class="row content">
      <div id="map"></div>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtnuW7FQshVbrqWiCHNszEDi5F5I4h1eM&callback=initMap&libraries=places,visualization" async defer></script>
    </div>
  </div>
  <div class="container-fluid text-center"> 
    <div class="row content">
      <div class="col-sm-2">
      </div>
      <div class="col-sm-8">
        <h1>BARRY</h1>
      </div>
      <div class="col-sm-2">
      </div>
    </div>
  </div>


</body>
</html>

