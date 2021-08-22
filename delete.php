<?php
require('connect.php');
 $eid=$_GET['id'];
 $query= "SELECT * FROM `register` WHERE eid=$eid";

$info=mysqli_query ($connection,$query );
$user=mysqli_fetch_assoc($info);
$erno=$user['eno'];
$result=mysqli_query ($connection,"UPDATE `examiner` SET fyr=0,syr=0,tyr=0" );
?>
<html>
<head>
</head>
<body>
    background-image: url(600.jpg);
<h1>Congratulation..!!!Your amount will be transfered..!!!</h1>
<a href="home.php">LOGOUT</a>
</body>
</html>