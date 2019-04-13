<?php

$db = new mysqli('localhost', 'root', 'Team_7', 'Highway_Fatality');

if($db->connect_errno > 0)
{
    die('Unable to connect to database [' . $db->connect_error . ']');
}

?>