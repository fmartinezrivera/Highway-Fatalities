<?php
  include_once 'connect.php';

if(isset($_POST['submit'])){
	$Text = $_POST['search'];
	echo $Text;
 }
?>
<!DOCTYPE html> 
<html>
  <head>
<!--   ===========================Title & add-ons========================================= -->
  <title>Highway Fatality</title>
   <meta charset="utf-8">
  <link href="style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--   ==================================================================== -->
    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 600px;  // The height is 400 pixels 
        width: 1000px;  // The width is the width of the web page 
		left: 5px;
		}
/* ===================The body itself ===========================*/
	   body {
		  font-family: Verdana;
		}
/* ===========This the serch bar stuff============================== */
		* {
		  box-sizing: border-box;
		}
		.search-container button {
		  float: left;
		  width: 20%;
		  padding: 10px;
		  background: #2196F3;
		  color: white;
		  font-size: 17px;
		  border: 1px solid grey;
		  border-left: none;
		  cursor: pointer;
		}
		.search-container button:hover {
		  background: #0b7dda;
		}
		.search-container::after {
		  content: "";
		  clear: both; 
		  display: table;
		}
/*===================This the code for the side bar ==============================*/
		.sidenav {
		  height: 740px;
		  margin-top: 9px;
		  margin-left: 8px;
		  position: relative;
		  width: 200px;
		  position:fixed;
		  z-index: 1;
		  top: 0;
		  left: 0;
		  background-color: #111;
		  overflow-x: hidden;
		  padding-top: 250px;
		}

		.sidenav a {
		  padding: 6px 8px 6px 16px;
		  text-decoration: none;
		  font-size: 25px;
		  color: #818181;
		  display: block;
		}

		.sidenav a:hover {
		  color: #f1f1f1;
		}

		.main {
		  margin-left: 200px; /* Same as the width of the sidenav */
		}
		@media screen and (max-height: 450px) {
		  .sidenav {padding-top: 15px;}
		  .sidenav a {font-size: 18px;}
		}
		
		form.example input[type=text] {
		  padding: 10px;
		  font-size: 17px;
		  border: 1px solid grey;
		  float: left;
		  width: 80%;
		  background: #f1f1f1;
		}

		form.example button {
		  float: left;
		  width: 20%;
		  padding: 10px;
		  background: #2196F3;
		  color: white;
		  font-size: 17px;
		  border: 1px solid grey;
		  border-left: none;
		  cursor: pointer;
		}

		form.example button:hover {
		  background: #0b7dda;
		}

		form.example::after {
		  content: "";
		  clear: both;
		  display: table;
		}
/*==============Color of some words ================*/
		.White_T {
			color: white;
		}
		/* The container */
		.container {
		  display: block;
		  position: relative;
		  padding-left: 35px;
		  margin-bottom: 12px;
		  cursor: pointer;
		  font-size: 16px;
		  -webkit-user-select: none;
		  -moz-user-select: none;
		  -ms-user-select: none;
		  user-select: none;
		  color: white;
		}

		/* Hide the browser's default checkbox */
		.container input {
		  position: absolute;
		  opacity: 0;
		  cursor: pointer;
		  height: 0;
		  width: 0;
		}

		/* Create a custom checkbox */
		.checkmark {
		  position: absolute;
		  top: 0;
		  left: 0;
		  height: 25px;
		  width: 25px;
		  background-color: #eee;
		}

		/* On mouse-over, add a grey background color */
		.container:hover input ~ .checkmark {
		  background-color: #ccc;
		}

		/* When the checkbox is checked, add a blue background */
		.container input:checked ~ .checkmark {
		  background-color: #2196F3;
		}

		/* Create the checkmark/indicator (hidden when not checked) */
		.checkmark:after {
		  content: "";
		  position: absolute;
		  display: none;
		}

		/* Show the checkmark when checked */
		.container input:checked ~ .checkmark:after {
		  display: block;
		}

		/* Style the checkmark/indicator */
		.container .checkmark:after {
		  left: 9px;
		  top: 5px;
		  width: 5px;
		  height: 10px;
		  border: solid white;
		  border-width: 0 3px 3px 0;
		  -webkit-transform: rotate(45deg);
		  -ms-transform: rotate(45deg);
		  transform: rotate(45deg);
		}
<!-- this will let us search throught the map====================================-->
		#description {
			font-family: Roboto;
			font-size: 15px;
			font-weight: 300;
		  }

		  #infowindow-content .title {
			font-weight: bold;
		  }

		  #infowindow-content {
			display: none;
		  }

		  #map #infowindow-content {
			display: inline;
			
		  }

		  .pac-card {
			margin: 10px 10px 0 0;
			border-radius: 2px 0 0 2px;
			box-sizing: border-box;
			-moz-box-sizing: border-box;
			outline: none;
			box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
			background-color: #fff;
			font-family: Roboto;
		  }

		  #pac-container {
			padding-bottom: 12px;
			margin-right: 12px;
		  }

		  .pac-controls {
			display: inline-block;
			padding: 5px 11px;
		  }

		  .pac-controls label {
			font-family: Roboto;
			font-size: 13px;
			font-weight: 300;
		  }

		  #pac-input {
			background-color: #fff;
			font-family: Roboto;
			font-size: 15px;
			font-weight: 300;
			margin-left: 12px;
			padding: 0 11px 0 13px;
			text-overflow: ellipsis;
			width: 400px;
		  }

		  #pac-input:focus {
			border-color: #4d90fe;
		  }

		  #title {
			color: #fff;
			background-color: #4d90fe;
			font-size: 25px;
			font-weight: 500;
			padding: 6px 12px;
		  }
		  #target {
			width: 345px;
		  }

    </style>
  </head>
 <body>
 <!--   ===============================Header words===================================== -->
  <header>
	Highway Fatality
  </header>
<!--   ==========================This is the side panel and search bar================================================= -->
				

<div class="sidenav" >
	<!-- This is the search box -->
	<div class = "search-container">
			<form class="example" method="post" style="max-width:200px">
			  <input type="text" placeholder="Search.." name="search" id="location">
			  <button type="submit"><i class="fa fa-search"></i></button>
			</form>
			<br>
		</div>
		<!-- this is the checkboxes -->
				<strong class="White_T">Filter:</strong>
				<br>
			<label class="container">Age Group
			  <input type="checkbox" checked="checked">
			  <span class="checkmark"></span>
			</label>
			<label class="container">County Size
			  <input type="checkbox">
			  <span class="checkmark"></span>
			</label>
			<label class="container">Month
			  <input type="checkbox">
			  <span class="checkmark"></span>
			</label>
			<label class="container">Day of the month
			  <input type="checkbox">
			  <span class="checkmark"></span>
			</label>
	</div>
<!-- the google map itself -->
	
    <!--The div element for the map -->
		<input id="pac-input" class="controls" type="text" placeholder="Search Box">
		<div id="map" ></div>
	<!--<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>-->
<!--   =====================Initital start to map... may need to be fixed ========================= -->
    <!--<script>
      function initMap() {
       	  var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
          center: {lat: 33.2148, lng:  -97.1331 }
        });
		var control = document.getElementById('floating-panel');
        control.style.display = 'block';
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);

        // Add 5 markers to map at random locations.
        // For each of these markers, give them a title with their index, and when
        // they are clicked they should open an infowindow with text from a secret
        // message.
        var secretMessages = ['Kills: 5', 'Kills: 5.5'];
        var lngSpan = [33.2148, 33.7557];
        var latSpan = [-97.1331, -96.5367];
        for (var i = 0; i < secretMessages.length; ++i) {
          var marker = new google.maps.Marker({
            position: {
              lat: lngSpan[i],
              lng: latSpan[i]
            },
            map: map
          });
          attachSecretMessage(marker, secretMessages[i]);
        }
      }

      // Attaches an info window to a marker with the provided message. When the
      // marker is clicked, the info window will open with the secret message.
      function attachSecretMessage(marker, secretMessage) {
        var infowindow = new google.maps.InfoWindow({
          content: secretMessage
        });

		marker.addListener('click', function() {
          openNav.open(marker.get('map'), marker);
        });
      }
    </script> -->
	<script>
	function initMap() {
       	  var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
          center: {lat: 33.2148, lng:  -97.1331 }
        });
		/* function initAutocomplete() {
			var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 33.2148, lng:  -97.1331 },
          zoom: 13,
          mapTypeId: 'roadmap'
        }); */
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }
	  </script>
<!--   ==================================================================== -->
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDg7XRMMCtraS-rafEXMk63IN7YPvIpGcc&callback=initMap">
    </script type="text/javascript">
  
 
 </body>
 <!--  =============================footer ================================== -->
	<footer>
        <p>© 2019 Team 7</p>
    </footer>
<!--   ==================================================================== -->
</html>