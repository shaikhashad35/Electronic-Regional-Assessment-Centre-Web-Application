<?php
$connection = mysqli_connect('localhost', 'root', '');

if(!$connection){
	die("Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'erac');
if(!$select_db){
	die("Selection Failed" . mysqli_error($connection));
}
?>