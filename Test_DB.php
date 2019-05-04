<?php
//echo '<script>alert("Starting");</script>';
$mysqli = new mysqli("localhost", "root", "Team_7", "Highway_Fatality");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$get_criteria= mysqli_real_escape_string($mysqli, $_GET['q']); // filter the input coming from the user's selection

if(isset($_GET['geocodeAddress']) && $_GET['geocodeAddress'] == 'Simple')
{
  if($_GET['Table'] == '2016'){
    $year = 'Table_2016';
  }
  else if($_GET['Table'] == '2017'){
    $year = 'Table_2017';
  }

	$sql1=mysqli_query($mysqli,"SELECT * FROM  $year WHERE County='$get_criteria'");
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
  				<th data-field="Title" data-sortable="true";>Fatalities</th>
  				</tr>
  			</tbody>
  		</table>';
	echo '<table>
			<tbody>
				<tr>
				<th data-field="FatalityByYear"data-sortable="true";> In  '.$_GET['Table'].': '.$row['FBY'].'</th>
				</tr>
			</tbody>
		</table>';

	exit(0);
}
else if(isset($_GET['geocodeAddress']) && $_GET['geocodeAddress'] == 'Population')
{
  if($_GET['Table'] == '2016'){
    $year = 'Table_2016';
  }
  else if($_GET['Table'] == '2017'){
    $year = 'Table_2017';
  }

  if($get_criteria == '0 - 5,000'){
    $min = '0';
    $max = '5000';
  }
  else if($get_criteria == '5,000 - 9,999'){
    $min = '5000';
    $max = '9999';
  }
  else if($get_criteria == '10,000 - 39,999'){
    $min = '10000';
    $max = '39999';
  }
  else if($get_criteria == '40,000 - 99,999'){
    $min = '40000';
    $max = '99999';
  }
  else if($get_criteria == '100,000 - 499,999'){
    $min = '100000';
    $max = '499999';
  }
  else if($get_criteria == '500,000 - 2,000,000'){
    $min = '500000';
    $max = '2000000';
  }
  else if($get_criteria == '2,000,000 - 5,000,000'){
    $min = '2000000';
    $max = '5000000';
  }
  	$sql1=mysqli_query($mysqli,"SELECT * FROM  $year WHERE Population BETWEEN '$min' AND '$max'");
  	 //$result = mysqli_fetch_array($sql1);
    while($row = $sql1->fetch_assoc()){
      	echo $row['County'];
        echo ' ';
    }
  	exit(0);
}
else if(isset($_GET['geocodeAddress']) && $_GET['geocodeAddress'] == 'Month')
{
  if($_GET['Table'] == '2016'){
    $year = 'Table_2016';
  }
  else if($_GET['Table'] == '2017'){
    $year = 'Table_2017';
  }
  $month = $_GET['filter'];
    	$sql1=mysqli_query($mysqli,"SELECT * FROM  $year WHERE County='$get_criteria'");
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
     				<th data-field="Title" data-sortable="true";>Fatalities</th>
     				</tr>
     			</tbody>
     		</table>';
    echo '<table>
     			<tbody>
     				<tr>
     				<th data-field="FatalityByYear"data-sortable="true";> In '.$_GET['Table'].': '.$row['FBY'].'</th>
     				</tr>
     			</tbody>
     		</table>';
     echo '<table>
         <tbody>
           <tr>
           <th data-field="FatalityByYear"data-sortable="true";> In '.$month.' : '.$row[$month].'</th>
           </tr>
         </tbody>
       </table>';
}
else if(isset($_GET['geocodeAddress']) && $_GET['geocodeAddress'] == 'Age')
{
  if($_GET['Table'] == '2016'){
    $year = 'Table_2016';
  }
  else if($_GET['Table'] == '2017'){
    $year = 'Table_2017';
  }

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
  else if($_GET['filter'] == '41 to 64'){
    $age = 'A41to65';
  }
  else if($_GET['filter'] == '65 and up'){
    $age = 'A65';
  }
    	$sql1=mysqli_query($mysqli,"SELECT * FROM   $year WHERE County='$get_criteria'");
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
     				<th data-field="Title" data-sortable="true";>Fatalities</th>
     				</tr>
     			</tbody>
     		</table>';
    echo '<table>
     			<tbody>
     				<tr>
     				<th data-field="FatalityByYear"data-sortable="true";>In '.$_GET['Table'].': '.$row['FBY'].'</th>
     				</tr>
     			</tbody>
     		</table>';
     echo '<table>
         <tbody>
           <tr>
           <th data-field="FatalityByYear"data-sortable="true";>Age range '.$_GET['filter'].': '.$row[$age].'</th>
           </tr>
         </tbody>
       </table>';
}
else if(isset($_GET['geocodeAddress']) && $_GET['geocodeAddress'] == 'Clicked')
{
  if($_GET['Table'] == '2016'){
    $year = 'Table_2016';
  }
  else if($_GET['Table'] == '2017'){
    $year = 'Table_2017';
  }
	$sql1=mysqli_query($mysqli,"SELECT * FROM $year WHERE Id='$get_criteria'");
	//$row = mysqli_fetch_array($sql1);
  while($row = $sql1->fetch_assoc()){
      echo $row['County'];
      echo ' ';
  }
	exit(0);
}
else if(isset($_GET['geocodeAddress']) && $_GET['geocodeAddress'] == 'Both')
{
  if($_GET['Table'] == '2016'){
    $year = 'Table_2016';
  }
  else if($_GET['Table'] == '2017'){
    $year = 'Table_2017';
  }
  $month = $_GET['month_Filter'];
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
  else if($_GET['filter'] == '41 to 64'){
    $age = 'A41to65';
  }
  else if($_GET['filter'] == '65 and up'){
    $age = 'A65';
  }
    	$sql1=mysqli_query($mysqli,"SELECT * FROM  $year WHERE County='$get_criteria'");
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
               <th data-field="Title" data-sortable="true";>Fatalities</th>
               </tr>
             </tbody>
           </table>';
    echo '<table>
     			<tbody>
     				<tr>
     				<th data-field="FatalityByYear"data-sortable="true";>In '.$_GET['Table'].': '.$row['FBY'].'</th>
     				</tr>
     			</tbody>
     		</table>';
    echo '<table>
            <tbody>
              <tr>
              <th data-field="FatalityByYear"data-sortable="true";>Age Range '.$_GET['filter'].': '.$row[$age].'</th>
              </tr>
            </tbody>
          </table>';
     echo '<table>
         <tbody>
           <tr>
           <th data-field="FatalityByYear"data-sortable="true";>In '.$month.': '.$row[$month].'</th>
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
