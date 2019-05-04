<?php
/*error_reporting(E_ALL);
ini_set('display_errors', 1);*/
  include_once 'Test_DB.php';
?>
<!DOCTYPE html>
<html>
  <head>
<!--   ===========================Title & add-ons========================================= -->
  <title>Texas Highway Fatalities</title>
  <meta charset="utf-8">
  <link href="/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css'>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <style>
	/* ===================The body itself ===========================*/
	  /* body {
		  font-family: sans-serif;
		}*/
		 /* Optional: Makes the sample page fill the window. */
    html, body {
        height: 100%;
        width: 100%;
        margin-left: 0px;
		    margin-top: -5px;
		    margin-right: -5px;
        padding: 0;
		    font-family: sans-serif;
    }
	  .footer{
		   display: flex;
			 justify-content: center;
			 padding: 0px;
			 background-color: #006A31;
			 color: #fff;
			 font-family: sans-serif;
	  }
	  .White_T {
			color: white;
			font-size: 15px;
      font-family: : sans-serif;
		}
    .Filter_Txt{
      color: white;
			font-size: 20px;
      font-family: sans-serif;
    }
    .header img {
    float: right;
    width: 10%;
    height: 18%;
    }
    </style>
  </head>
 <body>
  <!--   ===============================Header words===================================== -->
  <div class="header">
  <img src="UNT_logo.png" alt="logo">
  <header>Texas Highway Fatalities</header>
</div>

  <!--   ==========================This is the side panel and search bar================== -->
  <div class="sidenav">
    <!--<label class="Filter_Txt">Data Set</label> -->
    <h3 class = "Filter_Txt" align="center" style="line-height:0px;">Data Set</h3>
    <p align="center" style="color:white; line-height:0px;">____________________</p>

  	<!-- Search box -->
  	<form>
      <label class="White_T" >Select Year:</label>
        <select id="Year"><!--onchange="(this.value)">-->
        <option>2017</option>
        <option>2016</option>
      </select>
      <br>
      <label class="White_T">Select County:</label>
      <select name="q" id="address">
  		<option>Select County</option>
  		<option>Anderson</option><option>Andrews</option><option>Angelina</option><option>Aransas</option><option>Archer</option><option>Armstrong</option><option>Atascosa</option><option>Austin</option>
  		<option>Bailey</option><option>Bandera</option><option>Bastrop</option><option>Baylor</option><option>Bee</option><option>Bell</option><option>Bexar</option><option>Blanco</option><option>Borden</option>
  		<option>Bosque</option><option>Bowie</option><option>Brazoria</option><option>Brazos</option><option>Brewster</option><option>Briscoe</option><option>Brooks</option><option>Brown</option><option>Burleson</option><option>Burnet</option>
  		<option>Caldwell</option><option>Calhoun</option><option>Callahan</option><option>Cameron</option><option>Camp</option><option>Carson</option><option>Cass</option><option>Castro</option><option>Chambers</option><option>Cherokee</option>
  		<option>Childress</option><option>Clay</option><option>Cochran</option><option>Coke</option><option>Coleman</option><option>Collin</option><option>Collingsworth</option><option>Colorado</option><option>Comal</option><option>Comanche</option>
  		<option>Concho</option><option>Cooke</option><option>Coryell</option><option>Cottle</option><option>Crane</option><option>Crockett</option><option>Crosby</option><option>Culberson</option>
  		<option>Dallam</option><option>Dallas</option><option>Dawson</option><option>Deaf Smith</option><option>Delta</option><option>Denton</option><option>DeWitt</option><option>Dickens</option><option>Dimmit</option><option>Donley</option><option>Duval</option>
  		<option>Eastland</option><option>Ector</option><option>Edwards</option><option>Ellis</option><option>El Paso</option><option>Erath</option><option>Falls</option><option>Fannin</option><option>Fayette</option><option>Fisher</option><option>Floyd</option><option>Foard</option><option>Fort Bend</option><option>Franklin</option>
  		<option>Freestone</option><option>Frio</option><option>Gaines</option><option>Galveston</option><option>Garza</option><option>Gillespie</option><option>Glasscock</option><option>Goliad</option><option>Gonzales</option><option>Gray</option><option>Grayson</option><option>Gregg</option>
  		<option>Grimes</option><option>Guadalupe</option><option>Hale</option><option>Hall</option><option>Hamilton</option><option>Hansford</option><option>Hardeman</option><option>Hardin</option><option>Harris</option><option>Harrison</option><option>Hartley</option><option>Haskell</option><option>Hays</option>
  		<option>Hemphill</option><option>Henderson</option><option>Hidalgo</option><option>Hill</option><option>Hockley</option><option>Hood</option><option>Hopkins</option><option>Houston</option><option>Howard</option><option>Hudspeth</option><option>Hunt</option><option>Hutchinson</option><option>Irion</option>
  		<option>Jack</option><option>Jackson</option><option>Jasper</option><option>Jeff Davis</option><option>Jefferson</option><option>Jim Hogg</option><option>Jim Wells</option><option>Johnson</option><option>Jones</option><option>Karnes</option><option>Kaufman</option>
  		<option>Kendall</option><option>Kenedy</option><option>Kent</option><option>Kerr</option><option>Kimble</option><option>King</option><option>Kinney</option><option>Kleberg</option><option>Knox</option><option>Lamar</option><option>Lamb</option>
  		<option>Lampasas</option><option>La Salle</option><option>Lavaca</option><option>Lee</option><option>Leon</option><option>Liberty</option><option>Limestone</option><option>Lipscomb</option><option>Live Oak</option><option>Llano</option><option>Loving</option>
  		<option>Lubbock</option><option>Lynn</option><option>McCulloch</option><option>McLennan</option><option>McMullen</option>
  		<option>Madison</option><option>Marion</option><option>Martin</option><option>Mason</option><option>Matagorda</option><option>Maverick</option><option>Medina</option><option>Menard</option><option>Midland</option><option>Milam</option><option>Mills</option><option>Mitchell</option>
  		<option>Montague</option><option>Montagomery</option><option>Moore</option><option>Morris</option><option>Motley</option><option>Nacogdoches</option><option>Navarro</option><option>Newton</option><option>Nolan</option><option>Nueces</option><option>Ochiltree</option><option>Oldham</option>
  		<option>Orange</option><option>Palo Pinto</option><option>Panola</option><option>Parker</option><option>Parmer</option><option>Pecos</option><option>Polk</option><option>Potter</option><option>Presidio</option><option>Rains</option><option>Randall</option><option>Reagan</option>
  		<option>Real</option><option>Red River</option><option>Reeves</option><option>Refugio</option><option>Roberts</option><option>Robertson</option><option>Rockwall</option><option>Runnels</option><option>Rusk</option><option>Sabine</option><option>San Augustine</option><option>San Jacinto</option>
  		<option>San Patricio</option><option>San Saba</option><option>Schleicher</option><option>Scurry</option><option>Shackelford</option><option>Shelby</option><option>Sherman</option><option>Smith</option><option>Somervell</option><option>Starr</option><option>Stephens</option><option>Sterling</option>
  		<option>Stonewall</option><option>Sutton</option><option>Swisher</option><option>Tarrant</option><option>Taylor</option><option>Terrell</option><option>Terry</option><option>Throckmorton</option><option>Tifus</option><option>Tom Green</option><option>Travis</option><option>Trinity</option>
  		<option>Tyler</option><option>Upshur</option><option>March</option><option>Upton</option><option>Uvalde</option><option>Val Verde</option><option>Van Zandt</option><option>Victoria</option><option>Walker</option><option>Waller</option><option>Ward</option><option>Washington</option>
  		<option>Webb</option><option>Wharton</option><option>Wheeler</option><option>Wichita</option><option>Wilbarger</option><option>Willacy</option><option>Williamson</option><option>Wilson</option><option>Winkler</option><option>Wise</option><option>Wood</option><option>Yoakum</option><option>Young</option>
  		<option>Zapata</option><option>Zavala</option>
     <input id="submit" type="button" name="search" value="Submit">
   </form>
     <p align="center" style="color:white; line-height:0px;">---OR---</p>
     <label class="White_T" style="line-height: 0px;">Select Population:</label>
     <button data-balloon-length="medium" data-balloon="When selecting population all the counties within the selected range will apear on the map." data-balloon-pos="up">i</button>
     <form>
     <i class="fa fa-info-circle"></i>
     <br>
     <select id="filter3" name="f3" >
     <option>Select Population</option>
     <option>0 - 5,000</option>
     <option>5,000 - 9,999</option>
     <option>10,000 - 39,999</option>
     <option>40,000 - 99,999</option>
     <option>100,000 - 499,999</option>
     <option>500,000 - 2,000,000</option>
     <option>2,000,000 - 5,000,000</option>
     </select>
     <input id="submit_2" type="button" name="search" value="Submit">
   </form>
      <h3 align="center" style="color:white;line-height:0px;">Filters</h3>
      <p align="center" style="color:white; line-height:0px;">____________________</p>
  		<label class="White_T">Select Age:</label>
  	  	<select id="filter"><!--onchange="(this.value)">-->
  	  		<option>Select Age</option>
  			  <option>0 to 15</option>
  			  <option>16 to 25</option>
  			  <option>26 to 40</option>
  			  <option>41 to 64</option>
  			  <option>65 and up</option>
  		</select>
        <p align="center" style="color:white; line-height:0px;">---OR---</p>
  		 <label class="White_T">Select Month:</label>
  		<select id="filter2" name="F2" ><!--onchange="(this.value)">-->
  		<option>Select Month</option>
  		<option>January</option>
  		<option>February</option>
  		<option>March</option>
  		<option>April</option>
  		<option>May</option>
  		<option>June</option>
  		<option>July</option>
  		<option>August</option>
  		<option>September</option>
  		<option>October</option>
  		<option>November</option>
  		<option>December</option>
  		</select>
      <br>
    <!-- <form> -->
    <h3 align="center" style="color:white;line-height:0px;">Downloads</h3>
    <p align="center" style="color:white; line-height:0px;">____________________</p>
    <form>
    <label class="White_T" style="line-height:0px;">Print Raw Data:</label>
       <form class="P_Button" action="/Full_List.php" style="max-width:300px">
     	</form> <!-- To access use : function showCustomer(str): where "showCustomer" is the function calling it -->
    </form>
        <a href="/Full_List.php" class="button">All Data</a>
      <<img src="Team_7.PNG" alt="Trulli" width="105" height="95">
         <button data-balloon-length="medium" data-balloon="To update information, popup window must be closed and opened again." data-balloon-pos="left" style="left:50%; bottom:3%">i</button>
  	</div>
  		<!-- Print -->
  	<div align="center">
      <div id="txtHint"></div>
  	</div>
    <!--The div element for the map -->
  	<div id="map"></div>

	<script>
//starts the map===============================
var map;
var geocoder;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {//this section initiates the google map
      zoom: 5,
      center: {lat: 31.507250, lng:  -99.158538 }
    });

    geocoder = new google.maps.Geocoder();//calls the function to set the searched locatin

		document.getElementById('submit').addEventListener('click', function() {
      geocodeAddress(geocoder, map);
		  map.setZoom(8);
		  showCounty();
    });
		document.getElementById('submit_2').addEventListener('click', function() {
      var temp = document.getElementById('filter3').value;
      var year = document.getElementById('Year').value;
      if(temp != 'Select Population'){
        $.get("Test_DB.php?q="+temp+"&geocodeAddress=Population&Table="+year, function(data, status){
               var CountyName = data.split(" ");
                   var arrayLength = CountyName.length - 1;
                   for(var i=0; i < arrayLength; i++){
                    geocodeAddress_two(geocoder, map, CountyName[i]);
                  }
     			    });
     		  }
    });

    loadXMLDoc(map);
  }

  function loadXMLDoc(mapObject){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200){
          initCounties(this,mapObject);
        }
      };
    xmlhttp.open("GET", "countylist.xml", true);
    xmlhttp.send();
  }

  function initCounties(xml,mapObject) {
    var arr = new Array();
    var polygons = [];
    var bounds = new google.maps.LatLngBounds();
    var xmlDoc = xml.responseXML;
    var subdivision = xmlDoc.getElementsByTagName("subdivision");
    for (var i = 0; i < subdivision.length; i++) {
        arr=[];
        var coordinates = xmlDoc.documentElement.getElementsByTagName("subdivision")[i].getElementsByTagName("coord");
        var stateid = xmlDoc.documentElement.getElementsByTagName("subdivision")[i].getElementsByTagName("ID")[0].innerHTML;
        parseInt(stateid,10);
        for (var j=0;j < coordinates.length; j++) {
            arr.push(new google.maps.LatLng(parseFloat(coordinates[j].getAttribute("lat")),parseFloat(coordinates[j].getAttribute("lng"))));
            bounds.extend(arr[arr.length-1])
        }
        polygons.push(new google.maps.Polygon({
          paths: arr,
          strokeColor: '#84B1CD',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#C0DB37',
          fillOpacity: 0,
          zIndex: stateid
        }));
        polygons[polygons.length-1].setMap(mapObject);
        var Name;
        var num;
        for(var j = 0; j < polygons.length; j++)
        {
          google.maps.event.addListener(polygons[j],"mouseover",function() {
            this.setOptions({fillColor: "#00FF00",fillOpacity: 0.35});
            num=0;
          });
          google.maps.event.addListener(polygons[j],"mouseout",function() {
            this.setOptions({fillColor: "#ffffff00"});
          });
          google.maps.event.addListener(polygons[j],"click", function(){
            var ID= this.zIndex;
            num++;
            if(num < 2){
              Clicked_map(ID);
            }
          });
      }
  }
}
function Clicked_map(County_ID){
  var year = document.getElementById('Year').value;
  $.get("Test_DB.php?q="+County_ID+"&geocodeAddress=Clicked&Table="+year, function(data, status){
     var CountyName = data.split(" ");
     var arrayLength = CountyName.length;
     if(arrayLength == 2){
      geocodeAddress_three(geocoder, map, CountyName[0]);
    }
    else if(arrayLength == 3){
      var Name = CountyName[0];
      Name += ' ';
      Name += CountyName[1];
      geocodeAddress_three(geocoder, map, Name);
    }
 });
}
    function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('address').value;
		    var Texas = " County TX";
		    if(address == 'Select County'){
			       return;
		    }
		    address += Texas;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {//if the searched area is correct we will set a marker at the point
                resultsMap.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                  map: resultsMap,
                  position: results[0].geometry.location
                });
    			var ts = new Date();//Adds the last visited time stamp
    			var temp = document.getElementById('address').value;
    			var filter = document.getElementById('filter').value;
          var year = document.getElementById('Year').value;
          var month = document.getElementById('filter2').value;

    				var contentString = '<div id="content">'+
    				'<div id="siteNotice">'+
    				'</div>'+
    				'<h1 id="firstHeading" class="firstHeading">'+temp+'</h1>'+
    				'</div>';
    		 if(filter == 'Select Age' && temp != 'Select County' && month == 'Select Month'){//no filter option
    			    $.get("Test_DB.php?q="+temp+"&geocodeAddress=Simple&filter="+filter+"&Table="+year, function(data, status){
    					contentString += data;
    					contentString += '<p>(last visited ' + ts.toDateString() +').</p>';
    			     	var infowindow = new google.maps.InfoWindow({//this is the info window set on the checkmark
    					content: contentString
    					});
    					var address = document.getElementById('address').value;//this is what connects the info window with each checkmark
              infowindow.open(map, marker);
      					marker.addListener('click', function() {
      					  infowindow.open(map, marker);
      					});
    			    });
    			}
          else if(filter != 'Select Age' && temp != 'Select County' && month != 'Select Month'){//if both filters are chosen
            $.get("Test_DB.php?q="+temp+"&geocodeAddress=Both&filter="+filter+"&month_Filter="+month+"&Table="+year, function(data, status){
            contentString += data;
            contentString += '<p>(last visited ' + ts.toDateString() +').</p>';
              var infowindow = new google.maps.InfoWindow({//this is the info window set on the checkmark
            content: contentString
            });
            var address = document.getElementById('address').value;//this is what connects the info window with each checkmark
            infowindow.open(map, marker);
              marker.addListener('click', function() {
                infowindow.open(map, marker);
              });
            });
          }
          else if(month != 'Select Month' && temp != 'Select County'){//if month is chosen
                $.get("Test_DB.php?q="+temp+"&geocodeAddress=Month&filter="+month+"&Table="+year, function(data, status){
                contentString += data;
                contentString += '<p>(last visited ' + ts.toDateString() +').</p>';
                  var infowindow = new google.maps.InfoWindow({//this is the info window set on the checkmark
                content: contentString
                });
                var address = document.getElementById('address').value;//this is what connects the info window with each checkmark
                infowindow.open(map, marker);
                  marker.addListener('click', function() {
                    infowindow.open(map, marker);
                  });
                });
          }
          else if(filter != 'Select Age' && temp != 'Select County'){//if age filter is chosen
                $.get("Test_DB.php?q="+temp+"&geocodeAddress=Age&filter="+filter+"&Table="+year, function(data, status){
                contentString += data;
                contentString += '<p>(last visited ' + ts.toDateString() +').</p>';
                  var infowindow = new google.maps.InfoWindow({//this is the info window set on the checkmark
                content: contentString
                });
                var address = document.getElementById('address').value;//this is what connects the info window with each checkmark
                infowindow.open(map, marker);
                  marker.addListener('click', function() {
                    infowindow.open(map, marker);
                  });
                });
          }
          else {
                alert('Geocode was not successful for the following reason: ' + status);
          }
        }
      });
    }
    function geocodeAddress_two(geocoder, resultsMap, C_Name) {
        var Name = C_Name;
		    var Texas = " County TX";
		    Name += Texas;
        console.log(Name);
        geocoder.geocode({'address': Name}, function(results, status) {
          if (status === 'OK') {//if the searched area is correct we will set a marker at the point
                resultsMap.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                  map: resultsMap,
                  position: results[0].geometry.location
                });
    			var ts = new Date();//Adds the last visited time stamp
    			var filter = document.getElementById('filter').value;
          var year = document.getElementById('Year').value;
          var month = document.getElementById('filter2').value;

    				var contentString = '<div id="content">'+
    				'<div id="siteNotice">'+
    				'</div>'+
    				'<h1 id="firstHeading" class="firstHeading">'+C_Name+'</h1>'+
    				'</div>';
    		if(filter == 'Select Age'  && month == 'Select Month'){//if no filters were chosen
    			    $.get("Test_DB.php?q="+C_Name+"&geocodeAddress=Simple&filter="+filter+"&Table="+year, function(data, status){
    					contentString += data;
    					contentString += '<p>(last visited ' + ts.toDateString() +').</p>';
    			     	var infowindow = new google.maps.InfoWindow({//this is the info window set on the checkmark
    					content: contentString
    					});
    					var address = Name;//this is what connects the info window with each checkmark
      					marker.addListener('click', function() {
      					  infowindow.open(map, marker);
      					});
    			    });
    		}
        else if(filter != 'Select Age' && month != 'Select Month'){//if both filters are chosen
            $.get("Test_DB.php?q="+C_Name+"&geocodeAddress=Both&filter="+filter+"&month_Filter="+month+"&Table="+year, function(data, status){
            contentString += data;
            contentString += '<p>(last visited ' + ts.toDateString() +').</p>';
              var infowindow = new google.maps.InfoWindow({//this is the info window set on the checkmark
            content: contentString
            });
            var address = document.getElementById('address').value;//this is what connects the info window with each checkmark
              marker.addListener('click', function() {
                infowindow.open(map, marker);
              });
            });
        }
        else if(filter != 'Select Age'){//if month filter was chosen
            $.get("Test_DB.php?q="+C_Name+"&geocodeAddress=Age&filter="+filter+"&Table="+year, function(data, status){
            contentString += data;
            contentString += '<p>(last visited ' + ts.toDateString() +').</p>';
              var infowindow = new google.maps.InfoWindow({//this is the info window set on the checkmark
            content: contentString
            });
            var address = Name;//this is what connects the info window with each checkmark
              marker.addListener('click', function() {
                infowindow.open(map, marker);
              });
            });
        }
        else if(month != 'Select Month'){//if age filter is chosen
                $.get("Test_DB.php?q="+C_Name+"&geocodeAddress=Month&filter="+month+"&Table="+year, function(data, status){
                contentString += data;
                contentString += '<p>(last visited ' + ts.toDateString() +').</p>';
                  var infowindow = new google.maps.InfoWindow({//this is the info window set on the checkmark
                content: contentString
                });
                var address = Name;//this is what connects the info window with each checkmark
                  marker.addListener('click', function() {
                    infowindow.open(map, marker);
                  });
                });
                }
        else {
              alert('Geocode was not successful for the following reason: ' + status);
        }
        }
      });
    }
    function geocodeAddress_three(geocoder, resultsMap, C_Name) {
        var Name = C_Name;
		    var Texas = " County TX";
		    Name += Texas;
        console.log(Name);
        geocoder.geocode({'address': Name}, function(results, status) {
          if (status === 'OK') {//if the searched area is correct we will set a marker at the point
                resultsMap.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                  map: resultsMap,
                  position: results[0].geometry.location
                });
    			var ts = new Date();//Adds the last visited time stamp
    			var filter = document.getElementById('filter').value;
          var year = document.getElementById('Year').value;
          var month = document.getElementById('filter2').value;

    				var contentString = '<div id="content">'+
    				'<div id="siteNotice">'+
    				'</div>'+
    				'<h1 id="firstHeading" class="firstHeading">'+C_Name+'</h1>'+
    				'</div>';
    		if(filter == 'Select Age'  && month == 'Select Month'){//if no filters were chosen
    			    $.get("Test_DB.php?q="+C_Name+"&geocodeAddress=Simple&filter="+filter+"&Table="+year, function(data, status){
    					contentString += data;
    					contentString += '<p>(last visited ' + ts.toDateString() +').</p>';
    			     	var infowindow = new google.maps.InfoWindow({//this is the info window set on the checkmark
    					content: contentString
    					});
    					var address = Name;//this is what connects the info window with each checkmark
              infowindow.open(map, marker);
                marker.addListener('click', function() {
      					  infowindow.open(map, marker);
      					});
    			    });
    		}
        else if(filter != 'Select Age' && month != 'Select Month'){//if both filters are chosen
            $.get("Test_DB.php?q="+C_Name+"&geocodeAddress=Both&filter="+filter+"&month_Filter="+month+"&Table="+year, function(data, status){
            contentString += data;
            contentString += '<p>(last visited ' + ts.toDateString() +').</p>';
              var infowindow = new google.maps.InfoWindow({//this is the info window set on the checkmark
            content: contentString
            });
            var address = document.getElementById('address').value;//this is what connects the info window with each checkmark
            infowindow.open(map, marker);
              marker.addListener('click', function() {
                infowindow.open(map, marker);
              });
            });
        }
        else if(filter != 'Select Age'){//if month filter was chosen
            $.get("Test_DB.php?q="+C_Name+"&geocodeAddress=Age&filter="+filter+"&Table="+year, function(data, status){
            contentString += data;
            contentString += '<p>(last visited ' + ts.toDateString() +').</p>';
              var infowindow = new google.maps.InfoWindow({//this is the info window set on the checkmark
            content: contentString
            });
            var address = Name;//this is what connects the info window with each checkmark
            infowindow.open(map, marker);
              marker.addListener('click', function() {
                infowindow.open(map, marker);
              });
            });
        }
        else if(month != 'Select Month'){//if age filter is chosen
                $.get("Test_DB.php?q="+C_Name+"&geocodeAddress=Month&filter="+month+"&Table="+year, function(data, status){
                contentString += data;
                contentString += '<p>(last visited ' + ts.toDateString() +').</p>';
                  var infowindow = new google.maps.InfoWindow({//this is the info window set on the checkmark
                content: contentString
                });
                var address = Name;//this is what connects the info window with each checkmark
                infowindow.open(map, marker);
                  marker.addListener('click', function() {
                    infowindow.open(map, marker);
                  });
                });
                }
        else {
              alert('Geocode was not successful for the following reason: ' + status);
        }
        }
      });
    }
	  function showCounty() {
			var str = document.getElementById('address').value;
			if (str=="") {
			document.getElementById("txtHint").innerHTML="";
			return;
			}
			if (window.XMLHttpRequest) {
			     // code for IE7+, Firefox, Chrome, Opera, Safari
			     xmlhttp=new XMLHttpRequest();
			}
      else { // code for IE6, IE5
			     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}

			xmlhttp.onreadystatechange=function() {
			     if (this.readyState==4 && this.status==200) {
			          document.getElementById("txtHint").innerHTML=this.responseText;
			     }
			}

			xmlhttp.open("GET","Test_DB.php?q="+str,true);
			xmlhttp.send();
		}
	  </script>
<!--   ==================================================================== -->
    <!-- This is our google API key-->
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=[InsertAPIKeyHere] &callback=initMap">
  </script>
</body>
 <!--  =============================footer ================================== -->
  <footer justify-content="center">
        <p>Â© 2019 Team 7</p>
  </footer>
<!--   ==================================================================== -->
</html>
