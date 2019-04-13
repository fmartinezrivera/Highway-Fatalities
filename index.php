<?php include_once 'Test_DB.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <!-- Title and add-ons -->
    <title>Highway Fatality</title>
    <meta charset="utf-8">
    <link href="/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css'>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <!-- Styling -->
    <style>
      html, body {
        height: 100%;
        width: 93.2%;
        margin-left: 100px;
        margin-top: -5px;
        margin-right: -5px;
        padding: 0;
        font-family: Verdana;
      }
      .footer {
        display: flex;
        justify-content: : center;
        padding: 5px;
        background-color: #195E1E;
        color: #fff;
        font-family: Verdana;
      }
      .White_T {
        color: white;
        font-size: 15px;
      }
    </style>
  </head>
  <!-- Body of page -->
  <body>
    <header>Highway Fatality</header>
    <!-- Side navigation bar -->
    <div class="sidenav">
      <form class="P_Button" action="/Full_List.php" style="max-width:300px">
        <button class="P_B" type="submit" action="/Full_List.php">Print All</button>
      </form>
      <br>
      <form>
        <!-- County Selection List -->
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
        <input id="submit" type="button" name="search" value="Search">
        <br><br>
        <label class="White_T">Select Year:</label>
          <!-- Year Seletion -->
          <select id="Year">
            <option>2017</option>
          </select>
        <br><br>
        <label class="White_T">Select Age:</label>
          <!-- Age Filter Selection -->
          <select id="filter">
            <option>Select Age</option>
            <option>0 to 15</option>
            <option>16 to 25</option>
            <option>26 to 40</option>
            <option>41 to 64</option>
            <option>65+</option>
          </select>
        <br><br>
        <label class="White_T">Select Specific Month:</label>
          <!-- Month Selection -->
          <select id="filter2" name="F2">
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
          <br><br>
      </form>
    </div>
    <div align="center">
      <div id="txtHint"</div>
    </div>
    <div id="map"></div>

    <script>
      /* Initialize Map Function */
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
          center: {lat: 33.2148, lng: -97.1331}
        });

        var geocoder = new google.maps.Geocoder();

        document.getElementById('submit').addEventListener('click', function() {
          geocodeAddress(geocoder, map);
          map.setZoom(8);
          showCounty();
          console.log("Here");
        });

        document.getElementById('submit_2').addEventListener('click',function() {
          Counties();
        });

        /* State of Texas Outline */
        var stateCoords = [ {lat: 31.8659,lng: -106.5715},{lat: 31.7504,lng: -106.5042},{lat: 31.6242,lng: -106.3092},{lat: 31.4638,lng: -106.2103},{lat: 31.3912,lng: -106.0181},{lat: 31.1846,lng: -105.7874},{lat: 31.0012,lng: -105.5663},
    		{lat: 30.8456,lng: -105.4015},{lat: 30.6462,lng: -105.0032},{lat: 30.3847,lng: -104.8521},{lat: 30.2591,lng: -104.7437},{lat: 30.0738,lng: -104.6915},{lat: 29.9169,lng: -104.6777},{lat: 29.7644,lng: -104.5679},{lat: 29.6475,lng: -104.5280},
    		{lat: 29.5603,lng: -104.4044},{lat: 29.4719,lng: -104.2067},{lat: 29.3834,lng: -104.1559},{lat: 29.2948,lng: -103.9774},{lat: 29.2804,lng: -103.9128},{lat: 29.2481,lng: -103.8208},{lat: 29.1378,lng: -103.5640},{lat: 29.0682,lng: -103.4692},
    		{lat: 29.0105,lng: -103.3154},{lat: 28.9601,lng: -103.1616},{lat: 29.0177,lng: -103.0957},{lat: 29.1330,lng: -103.0298},{lat: 29.2157,lng: -102.8677},{lat: 29.2565,lng: -102.8979},{lat: 29.3570,lng: -102.8375},{lat: 29.4898,lng: -102.8004},
    		{lat: 29.6881,lng: -102.7002},{lat: 29.7691,lng: -102.5134},{lat: 29.7596,lng: -102.3843},{lat: 29.8788,lng: -102.3047},{lat: 29.7834,lng: -102.1509},{lat: 29.7572,lng: -101.7004},{lat: 29.7644,lng: -101.4917},{lat: 29.6308,lng: -101.2939},
    		{lat: 29.5269,lng: -101.2582},{lat: 29.3642,lng: -101.0056},{lat: 29.3056,lng: -100.9204},{lat: 29.1642,lng: -100.7707},{lat: 29.0946,lng: -100.7007},{lat: 28.9012,lng: -100.6306},{lat: 28.6593,lng: -100.4974},{lat: 28.4675,lng: -100.3601},
    		{lat: 28.2778,lng: -100.2969},{lat: 28.1882,lng: -100.1733},{lat: 28.0526,lng: -100.0195},{lat: 27.9435,lng: -99.9344},{lat: 27.7638,lng: -99.8438},{lat: 27.6641,lng: -99.7119},{lat: 27.4839,lng: -99.4812},{lat: 27.3059,lng: -99.5375},
    		{lat: 27.1948,lng: -99.4290},{lat: 27.0175,lng: -99.4455},{lat: 26.8829,lng: -99.3164},{lat: 26.6867,lng: -99.2065},{lat: 26.4116,lng: -99.0967},{lat: 26.3574,lng: -98.8138},{lat: 26.2257,lng: -98.6668},{lat: 26.2343,lng: -98.5474},
    		{lat: 26.1357,lng: -98.3276},{lat: 26.0457,lng: -98.1697},{lat: 26.0518,lng: -97.9143},{lat: 26.0050,lng: -97.6643},{lat: 25.8419,lng: -97.4020},{lat: 25.9074,lng: -97.3526},{lat: 25.9679,lng: -97.0148},{lat: 26.1789,lng: -97.0697},
    		{lat: 26.8253,lng: -97.2249},{lat: 27.4230,lng: -97.0752},{lat: 28.0599,lng: -96.6096},{lat: 28.4228,lng: -95.9285},{lat: 28.7568,lng: -95.3036},{lat: 29.0742,lng: -94.7296},{lat: 29.3810,lng: -94.3355},{lat: 29.6021,lng: -93.8205},
    		{lat: 29.8013,lng: -93.9317},{lat: 29.9157,lng: -93.8136},{lat: 30.0489,lng: -93.7230},{lat: 30.1214,lng: -93.6996},{lat: 30.2021,lng: -93.7216},{lat: 30.2792,lng: -93.7038},{lat: 30.3278,lng: -93.7628},{lat: 30.3835,lng: -93.7587},
    		{lat: 30.4380,lng: -93.7010},{lat: 30.5079,lng: -93.7024},{lat: 30.5362,lng: -93.7299},{lat: 30.6296,lng: -93.6694},{lat: 30.7466,lng: -93.6090},{lat: 30.8114,lng: -93.5527},{lat: 30.8834,lng: -93.5747},{lat: 30.9376,lng: -93.5307},
    		{lat: 31.0318,lng: -93.5074},{lat: 31.0812,lng: -93.5266},{lat: 31.1787,lng: -93.5335},{lat: 31.1670,lng: -93.5980},{lat: 31.3055,lng: -93.6832},{lat: 31.3830,lng: -93.6708},{lat: 31.4369,lng: -93.6887},{lat: 31.5107,lng: -93.7202},
    		{lat: 31.5820,lng: -93.8315},{lat: 31.6440,lng: -93.8123},{lat: 31.7188,lng: -93.8232},{lat: 31.7936,lng: -93.8342},{lat: 31.8309,lng: -93.8782},{lat: 31.8869,lng: -93.9221},{lat: 31.9335,lng: -93.9661},{lat: 32.0081,lng: -94.0430},
    		{lat: 33.4681,lng: -94.0430},{lat: 33.5414,lng: -94.0430},{lat: 33.5689,lng: -94.1528},{lat: 33.5872,lng: -94.1968},{lat: 33.5872,lng: -94.2627},{lat: 33.5689,lng: -94.3176},{lat: 33.5597,lng: -94.3945},{lat: 33.5780,lng: -94.4275},
    		{lat: 33.6055,lng: -94.4275},{lat: 33.6421,lng: -94.4495},{lat: 33.6329,lng: -94.4879},{lat: 33.6421,lng: -94.5236},{lat: 33.6695,lng: -94.6637},{lat: 33.7061,lng: -94.7461},{lat: 33.7791,lng: -94.8999},{lat: 33.8818,lng: -95.0757},
    		{lat: 33.9251,lng: -95.1526},{lat: 33.9604,lng: -95.2254},{lat: 33.8750,lng: -95.2858},{lat: 33.8841,lng: -95.5399},{lat: 33.8887,lng: -95.7568},{lat: 33.8408,lng: -95.8420},{lat: 33.8556,lng: -96.0274},{lat: 33.6901,lng: -96.3528},
    		{lat: 33.8442,lng: -96.6179},{lat: 33.8898,lng: -96.5836},{lat: 33.8955,lng: -96.6673},{lat: 33.8179,lng: -96.7538},{lat: 33.8613,lng: -96.8335},{lat: 33.8613,lng: -96.8774},{lat: 33.9388,lng: -96.9159},{lat: 33.7392,lng: -97.0917},
    		{lat: 33.7449,lng: -97.1645},{lat: 33.8978,lng: -97.2180},{lat: 33.8225,lng: -97.3746},{lat: 33.8305,lng: -97.4611},{lat: 33.8761,lng: -97.4460},{lat: 33.9798,lng: -97.6945},{lat: 33.8476,lng: -97.8648},{lat: 33.8978,lng: -97.9651},
    		{lat: 34.0299,lng: -98.0983},{lat: 34.1141,lng: -98.1752},{lat: 34.1425,lng: -98.3743},{lat: 34.0640,lng: -98.4773},{lat: 34.1209,lng: -98.5529},{lat: 34.1232,lng: -98.7520},{lat: 34.2095,lng: -98.9539},{lat: 34.2073,lng: -99.0637},
    		{lat: 34.2141,lng: -99.1832},{lat: 34.3593,lng: -99.2505},{lat: 34.4613,lng: -99.3823},{lat: 34.3774,lng: -99.4318},{lat: 34.4160,lng: -99.5718},{lat: 34.3706,lng: -99.6158},{lat: 34.4726,lng: -99.8094},{lat: 34.5631,lng: -99.9934},
    		{lat: 36.4975,lng: -100.0017},{lat: 36.5008,lng: -103.0408},{lat: 32.0011,lng: -103.0655},{lat: 32.0023,lng: -106.6168} ];

        /* State of Texas Polygon */
        var state = new google.maps.Polygon({
          paths: stateCoords,
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillOpacity: 0.00
        });
        state.setMap(map);
        loadXMLDoc(map);
      }

      /* Load XMl document of County List */
      function loadXMLDoc(mapObject) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            initCounties(this,mapObject);
          }
        };
        xmlhttp.open("GET", "countylist.xml",true);
        xmlhttp.send();
      }

      /* Display polygons of all Counties */
      function initCounties(xml, mapObject) {
        var arr = new Array();
        var polygons = [];
        var bounds = new google.maps.LatLngBounds();
        var xmlDoc = xml.responseXML;
        var subdivision = xmlDoc.getElementsByTagName("subdivision");

        for (var i = 0; i < subdivision.length; i++) {
          arr=[];
          var coordinates = xmlDoc.documentElement.getElementsByTagName("subdivision")[i].getElementsByTagName("coord");
          for (var j = 0; j < coordinates.length; j++) {
            arr.push(new google.maps.LatLng(parseFloat(coordinates[j].getAttribute("lat")),parseFloat(coordinates[j].getAttribute("lng"))));
            bounds.extend(arr[arr.length-1])
          }

          polygons.push(new google.maps.Polygon({
            paths: arr,
            strokeColor:'#FF0000',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#FF0000',
            fillOpacity: 0.35
          }));
          polygons[polygons.length-1].setMap(mapObject);
        }
      }

      /* After user input, display county information */
      function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('address').value;
        var Texas = "County TX";
        if (address == 'Select County') {
          return;
        }
        address += Texas;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
          }
          var ts = new Date();
          var temp = document.getElementById('address').value;
          var filter = document.getElementById('filter').value;
          var year = document.getElementById('Year').value;
          var month = document.getElementById('filter2').value;

          var contentString = '<div id="content">'+
          '<div id="siteNotice">'+
          '</div>'+
          '<h1 id="firstHeading" class="firstHeading">'+temp+'</h1>'+
          '</div>';

          if(filter == 'Select Age' && temp != 'Select County' && year == '2017' && month == 'Select Month') {
            $.get("Test_DB.php?q="+temp+"&geocodeAddress=Simple&filter="+filter, function(data, status) {
              contentString += data;
              contentString += '(last visited ' + ts.toDateString() +').</p>';
              var infowindow = new google.maps.InfoWindow({
                content: contentString
              });
              var address = document.getElementById('address').value;
              marker.addListener('click', function () {
                infowindow.open(map,marker);
              });
            });
          }
          else if(filter != 'Select Age' && temp != 'Select County' && year == '2017' && month == 'Select Month') {
            $.get("Test_DB.php?q="+temp+"&geocodeAddress=Age&filter="+filter, function(data, status){
              contentString += data;
              contentString += '(last visited ' + ts.toDateString() +').</p>';
              var infowindow = new google.maps.InfoWindow({
                content: contentString
              });
              var address = document.getElementById('address').value;
              marker.addListener('click', function() {
                infowindow.open(map, marker);
              });
            });
          }
          else if(month != 'Select Month' && temp != 'Select County' && year == '2017'){
            $.get("Test_DB.php?q="+temp+"&geocodeAddress=Month&filter="+month, function(data, status){
              contentString += data;
              contentString += '(last visited ' + ts.toDateString() +').</p>';
              var InfoWindow = new google.maps.InfoWindow({
                content: contentString
              });
              var address = document.getElementById('address').value;
              marker.addListener('click', function() {
                InfoWindow.open(map, marker);
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
      if (str == "") {
        document.getElementById("txtHint").innerHTML="";
        return;
      }
      if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
      }
      else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }

      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML=this.responseText;
        }
      }
      xmlhttp.open("GET","Test_DB.php?q="+str,true);
      xmlhttp.send();
    }
    </script>

    <!-- Script srouce -->
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key= &callback=initMap">
    </script>
  </body>
    <!-- Footer information -->
    <footer justify-content="center">
      <p>© 2019 Team 7</p>
    </footer>
</html>
