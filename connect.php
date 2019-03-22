<?php

$db = new mysqli('localhost', 'root', '12345678', 'highway_fatality');

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

?>