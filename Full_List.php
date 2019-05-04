<?php
  include_once 'connect.php';

 $sql = 'SELECT * FROM Table_2017';

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}
echo '<div style="font-size:3em; color:#195E1E; justify-content: center;"> County Information </div>';
echo '<div style="font-size:2em; color:#195E1E; justify-content: center;"> 2017: </div>';
echo '<div class = "row">
          <div class = "col-md-4" style="font-size:1em; color:#195E1E">
          <b><u><p>County Name</p></u></b>
          </div>
          <div class = "col-md-4" style="font-size:1em; color:#195E1E">
          <b><u><p>Population</p></u></b>
          </div>
          <div class = "col-md-4" style="font-size:1em; color:#195E1E">
          <b><u><p>Fatalities By Year</p></u></b>
          </div>
      </div>';
while($row = $result->fetch_assoc()){

    echo '<div class = "row">
              <div class = "col-md-4">
              '.$row['County'].'
              </div>
              <div class = "col-md-4">
              '.$row['Population'].'
              </div>
              <div class = "col-md-4">
              '.$row['FBY'].'
              </div>
          </div>';

}
echo '<div class = "row">
          <div class = "col-md-4">
          </div>
          <div class = "col-md-4">
          </div>
          <div class = "col-md-4">
          </div>
      </div>';

$sql_2 = 'SELECT * FROM Table_2016';

if(!$result = $db->query($sql_2)){
   die('There was an error running the query [' . $db->error . ']');
}
echo '<div style="font-size:2em; color:#195E1E; justify-content: center;"> 2016: </div>';

echo '<div class = "row">
         <div class = "col-md-4" style="font-size:1em; color:#195E1E">
         <b><u><p>County Name</p></u></b>
         </div>
         <div class = "col-md-4" style="font-size:1em; color:#195E1E">
         <b><u><p>Population</p></u></b>
         </div>
         <div class = "col-md-4" style="font-size:1em; color:#195E1E">
         <b><u><p>Fatalities By Year</p></u></b>
         </div>
     </div>';
while($row = $result->fetch_assoc()){

   echo '<div class = "row">
             <div class = "col-md-4">
             '.$row['County'].'
             </div>
             <div class = "col-md-4">
             '.$row['Population'].'
             </div>
             <div class = "col-md-4">
             '.$row['FBY'].'
             </div>
         </div>';

}
echo '<div class = "row">
          <div class = "col-md-4">
          </div>
          <div class = "col-md-4">
          </div>
          <div class = "col-md-4">
          <b><u><p>Â© 2019 Team 7</p></u></b>
          </div>
      </div>';

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
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!--   ==================================================================== -->
<style>
	html, body {
           padding: 0;
	   font-family: Garamond;
	}
	footer {
	    display: flex;
	    justify-content: center;
	    padding: 5px;
	    background-color: #195E1E;
	    color: #fff;
	    font-family: Garamond;
	}
	header{
	   padding: 5px;
	   font-size: 3em;
	   text-align: center;
	   background-color: #195E1E;
     color: #fff;
	   font-family: Garamond;
	}
  .button{
    background-color: #195E1E;
    border: none;
    color: white;
    padding: 7px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
    </style>
  </head>
  <a href="/index.php" class="button">HomePage</a>
 <!--   ===============================Header words===================================== -->
  <header>
	   Texas Highway Fatalities
  </header>
 <!--  =============================footer ================================== -->
	<footer>
        <p>2019 Team 7</p>
    </footer>
<!--   ==================================================================== -->
</html>
