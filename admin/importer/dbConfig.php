<?php
//DB details
$dbHost = 'localhost';
$dbUsernom = 'root';
$dbPassword = 'ouss1994';
$dbnom = 'library';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsernom, $dbPassword, $dbnom);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}
?>
