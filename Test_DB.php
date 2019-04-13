<?php
//echo '<script>alert("Starting");</script>';
$mysqli = new mysqli("localhost", "root", "Team_7", "Highway_Fatality");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$get_criteria= mysqli_real_escape_string($mysqli, $_GET['q']); // filter the input coming from the user's selection

if(isset($_GET['geocodeAddress']) && $_GET['geocodeAddress'] == 'Simple')
{
	$sql1=mysqli_query($mysqli,"SELECT * FROM  Data_2017 WHERE County='$get_criteria'");
	$row = mysqli_fetch_array($sql1);
	echo '<table>
			<tbody>
				<tr>
				<th data-field="Population" data-sortable="true";>Population: '.$row['Population'].'</th>
				</tr>
			</tbody>
		</table>';
	echo '<table>
			<tbody>
				<tr>
				<th data-field="FatalityByYear"data-sortable="true";> Fatality By Year: '.$row['FBY'].'</th>
				</tr>
			</tbody>
		</table>';

	exit(0);
}
else if(isset($_GET['geocodeAddress']) && $_GET['geocodeAddress'] == 'Population')
{
  	$sql1=mysqli_query($mysqli,"SELECT * FROM  Data_2017 WHERE Population > '$get_criteria'");
  	 $result = mysqli_fetch_array($sql1);
    while($row = $result->fetch_assoc()){
      	echo $row['County'];
    }
  	exit(0);
}
else if(isset($_GET['geocodeAddress']) && $_GET['geocodeAddress'] == 'Month')
{
  $month = $_GET['filter'];
    	$sql1=mysqli_query($mysqli,"SELECT * FROM  Data_2017 WHERE County='$get_criteria'");
      $row = mysqli_fetch_array($sql1);
     echo '<table>
         <tbody>
           <tr>
           <th data-field="Population" data-sortable="true";>Population: '.$row['Population'].'</th>
           </tr>
         </tbody>
       </table>';
       echo '<table>
     			<tbody>
     				<tr>
     				<th data-field="FatalityByYear"data-sortable="true";> Fatality By Year: '.$row['FBY'].'</th>
     				</tr>
     			</tbody>
     		</table>';
     echo '<table>
         <tbody>
           <tr>
           <th data-field="FatalityByYear"data-sortable="true";> '.$month.' : '.$row[$month].'</th>
           </tr>
         </tbody>
       </table>';
}
else if(isset($_GET['geocodeAddress']) && $_GET['geocodeAddress'] == 'Age')
{
  if($_GET['filter'] == '0 to 15'){
    $age = 'A0to15';
  }
  else if($_GET['filter'] == '16 to 25'){
    $age = 'A16to25';
  }
  else if($_GET['filter'] == '26 to 40'){
    $age = 'A26to40';
  }
  else if($_GET['filter'] == '26 to 40'){
    $age = 'A26to40';
  }
  else if($_GET['filter'] == '41 to 65'){
    $age = 'A41to65';
  }
  else if($_GET['filter'] == '65 and on'){
    $age = 'A65';
  }
    	$sql1=mysqli_query($mysqli,"SELECT * FROM  Data_2017 WHERE County='$get_criteria'");
      $row = mysqli_fetch_array($sql1);
     echo '<table>
         <tbody>
           <tr>
           <th data-field="Population" data-sortable="true";>Population: '.$row['Population'].'</th>
           </tr>
         </tbody>
       </table>';
       echo '<table>
     			<tbody>
     				<tr>
     				<th data-field="FatalityByYear"data-sortable="true";> Fatality By Year: '.$row['FBY'].'</th>
     				</tr>
     			</tbody>
     		</table>';
     echo '<table>
         <tbody>
           <tr>
           <th data-field="FatalityByYear"data-sortable="true";> Fatalities from '.$_GET['filter'].': '.$row[$age].'</th>
           </tr>
         </tbody>
       </table>';
}
?>
<meta charset="utf-8" />

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title>Highway_Fatality</title>
</head>
<body>

<div class="wrapper">
<div class="fresh-table full-color-orange full-screen-table">
