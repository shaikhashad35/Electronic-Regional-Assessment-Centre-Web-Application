<?php

require('connect.php');
session_start();
if(isset($_POST['update']))
{
	
  if (isset($_POST['examid']) && isset($_POST['yr'])&& isset($_POST['sub'])&& isset($_POST['scode'])&& isset($_POST['pno'])&& isset($_POST['bno']) && isset($_POST['course']))
  {
	$examid= htmlentities($_POST['examid']);
    $yr = htmlentities($_POST['yr'] );
    $sub = htmlentities($_POST['sub'] );
    $scode = htmlentities($_POST['scode'] );
    $pno = htmlentities($_POST['pno'] );
	$bno = htmlentities($_POST['bno'] );
	$c = htmlentities($_POST['course'] );
	
    
    if (!empty($examid) && !empty($yr) && !empty($sub) && !empty($scode) && !empty($pno) && !empty($bno) && !empty($c)){
		   switch($yr)
		   {
			   
          case 1:
		  {$q = "INSERT INTO `examiner` (`examid`, `sub`, `subcode`, `bno`, `year`, `pno`, `course`,`c_u` ,`amount` ,`aid`) VALUES ('$examid', '$sub', '$scode', '$bno', '$yr', '$pno', '$c','Uncheck','$pno'*12, NULL)";
		  break;}
         case 2: {$q = "INSERT INTO `examiner` (`examid`, `sub`, `subcode`, `bno`, `year`, `pno`, `course`,`c_u` ,`amount` ,`aid`) VALUES ('$examid', '$sub', '$scode', '$bno', '$yr', '$pno', '$c','Uncheck','$pno'*14, NULL)";
		 break;}
         case 3: {$q = "INSERT INTO `examiner` (`examid`, `sub`, `subcode`, `bno`, `year`, `pno`, `course`,`c_u` ,`amount` ,`aid`) VALUES ('$examid', '$sub', '$scode', '$bno', '$yr', '$pno', '$c','Uncheck','$pno'*16, NULL)";
		   break;}
		   }
		  $response = mysqli_query($connection,$q);  
           print_r($response);
            if($response){
			 
            echo "<script> alert('updateds Successfully.')</script>";
			header('Location: admin.php');
           
        }else{
	
            echo "<script> alert('updation Failed')</script>";
          }
        
    }
	else{
      echo "<script> alert('Please enter all details!')</script>";
    }
  }	
  }
else if(isset($_POST['logout'])){
	session_destroy();
	header("location:home.php");
}

?>

<!DOCTYPE html>
<html >
  <head>
  <title></title>
  <style type="text/css">
 body {
	background-image: url(600.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: cover;
}
  .form{
    margin:8px;
    text-align:center;
    padding:10px 5px;
    width: 100%;
    margin-bottom: 4%;
    padding: 3%;
    color: #555;
    font: 95% Arial, Helvetica, sans-serif;
	}
	.form-style{
    font-size: 95%;
 	font-family:Arial, Helvetica, sans-serif;
    max-width: 400px;
    margin: 10px auto;
    padding: 16px;
    background: #F7F7F7;
	
    }
.form-style h1{
    background: #43D1AF;
	text-transform:uppercase;
	text-alignment:center;
	border-style:solid;
    padding: 20px 0;
    font-size: 140%;
    font-weight: 300;
	text-decoration:bold;
    text-align: center;
    color: #fff;
    margin: -17px 17px 16px -17px;
   }
   
	</style>
  </head>
  <body>
  <div class="form-style">
<div class="form">	
 <form  action="admin.php" method="post"  >
				        						
				  <label  for="Examiner ID">Examiner ID</label><br>
					<input type="number" name="examid" placeholder="Enter ExaminerID"><br><br>
				                       
			  	<label for="yr">Enter year </label><br>
				  <input type="number" name="yr" placeholder="Enter no of year of papers" ><br><br>
				  
					<label for="sub">Subject </label><br>
				  <input type="text" name="sub" placeholder="Enter subject name" ><br><br>

					<label for="scode">Subject Code </label><br>
				  <input type="text" name="scode" placeholder="Enter subject code" ><br><br>
				  
				    <label for="paper">Enter number of paper </label><br>
				  <input type="number" name="pno" placeholder="Enter no of papers" ><br><br>
				  
				  <label for="paper">Enter bundle number</label><br>
				  <input type="number" name="bno" placeholder="Enter bundle no." ><br><br>
				  
				  <label for="sub">COURSE</label><br>
				  <input type="text" name="course" placeholder="Enter course name" ><br><br>
				  
				 <button type="submit" name="update" class="btn">Update</button>
			
 <button type="submit" class="btn" name="logout">Logout</button>	 
	</form>
	</div>
</body>
</html>
