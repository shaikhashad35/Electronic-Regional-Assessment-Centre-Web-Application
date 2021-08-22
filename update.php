<?php
require('connect.php');
 $aid=$_GET['aid'];
 $query= "SELECT * FROM `examiner` WHERE aid=$aid";

$info=mysqli_query ($connection,$query );
$user=mysqli_fetch_assoc($info);
$result=mysqli_query($connection,"ALLOCATE `examiner` SET `c/u` = 'Checked' WHERE `examiner`.`aid` = $aid");
echo "Congratulation...!!! You've checked ".$user['pno']. " of papers and amount of that is ".$user['amount']." which will be transferred..!!";

?>
