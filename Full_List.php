<?php
  include_once 'connect.php';
 
 $sql = 'SELECT * FROM Data_2017';
	

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}
echo '<div style="font-size:2em;color:#9a3432"> County Information </div>';
while($row = $result->fetch_assoc()){
    echo '<br> Name: '.$row['County'].' ::   Population: '.$row['Population'] .' ::  Fatalities: '.$row['FBY'];

}
echo '<br>';
echo '© 2019 Team 7';
?>
<!DOCTYPE html> 
<html>
  <head>
<!--   ===========================Title & add-ons========================================= -->
  <title>Total Highway Fatality</title>
   <meta charset="utf-8">
   <link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<!--   ==================================================================== -->
<style>
	html, body {
           height: 100%;
           margin-left: 100px;
           padding: 0;
	   font-family: Verdana;
	}
	footer {
	    display: flex;
	    justify-content: center;
	    padding: 5px;
	    background-color: #9a3432;
	    color: #fff;
	    font-family: Verdana;
	    margin-left: -200px;
	}
	header{
	   padding: 5px;
	   font-size: 3em;
	   text-align: center;
	   text-shadow: 3px 2px grey;
	   background-color: #9a3432;
       	   color: #fff;
	   font-family: Verdana;
	   margin-left: -200px;
	}
    </style>
  </head>
 <body>
 <!--   ===============================Header words===================================== -->
  <header>
	Highway Fatality
  </header>
 </body>
 <!--  =============================footer ================================== -->
	<footer>
        <p>© 2019 Team 7</p>
    </footer>
<!--   ==================================================================== -->
</html>