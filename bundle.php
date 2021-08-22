<?php
    
  require('connect.php');
session_start();
  if (isset($_POST['bno']))
  {
	  $bno=htmlentities($_POST['bno']);
	  if(!empty($bno))
	  {
		  $q="SELECT * from `examiner` where bno='$bno'";
		  $result=mysqli_query($connection,$q);
   if($result){
		
	
        echo "<table>
        <th>Examiner ID</th>
        <th>Subject</th>
        <th>Subject Code</th>
        <th>Bundle No.</th>
		<th>Year</th>
        <th>No. of Paper</th>
		<th>Course</th>
		<th>Amount</th>
		<th>Check/Uncheck</th>";		  
		 while($row=mysqli_fetch_assoc($result)){
			  echo '<tr>',
                '<td>',$row['bno'],'</td>',                              
			    '<td>',$row['examid'],'</td>',
                '<td>',$row['sub'],'</td>',
                '<td>',$row['subcode'],'</td>',
                '<td>',$row['year'],'</td>',			
                '<td>',$row['pno'],'</td>',
                '<td>',$row['course'],'</td>',
					'<td>',$row['amount'],'</td>',
					
				 '<td>',$row['c_u'],'</td>',
			    '<tr>';
		 }		
   }	 
      }                           
  }  
  
  
  
  ?>
  
  <!DOCTYPE html>
<html >
    <head>
        <title>Register Form</title>
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
    background: white;
    }
.form-style h1{
    background: #00CED1;
	text-transform:uppercase;
	text-alignment:center;
	border-style:solid;
    padding: 20px 0;
    font-size: 140%;
    font-weight: 300;
	text-decoration:bold;
    text-align: center;
    color: #fff;
    margin: -17px -17px 16px -17px;
   }
	</style>
    </head>
    <body>
	<div class="form-style">
    <h1>Bundle Tracker </h1>
    <form action="bundle.php" method="post"  >
		
		<label  for="eno">Bundle Number</label><br>
		<input type="number" name="bno" placeholder="Enter bundle number..." ><br><br>
		
		<button type="submit" >TRACK</button>
	</form>
	 </body>

</html>
	