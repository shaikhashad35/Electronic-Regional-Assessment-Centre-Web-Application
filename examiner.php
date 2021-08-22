<?php
require('connect.php');
session_start();
 $eid=$_GET['eid'];
 $query= "SELECT * FROM `register` WHERE eid=$eid";

$info=mysqli_query ($connection,$query );
$user=mysqli_fetch_assoc($info);
$examid=$user['examid'];
$result=mysqli_query ($connection,"SELECT * from `examiner` WHERE examid=$examid" );


    if($result){
		//print_r($result);
		$r=mysqli_fetch_assoc($result);
		echo 'Your Exam ID:',$r['examid'];
        echo "<table>
        
        <th>Subject</th>
        <th>Subject Code</th>
        <th>Bundle No.</th>
		<th>Year</th>
        <th>No. of Paper</th>
		<th>Course</th>
		<th>Amount</th>
		<th>Check/Uncheck</th>";
        
        while($row=mysqli_fetch_assoc($result)){
            $url= "update.php?aid=".$row['aid'];
			if($row['c_u']=='Checked')
			{
			}
			else{
             echo '<tr>',
                
                '<td>'.$row['sub'].'</td>',
                '<td>',$row['subcode'],'</td>',
				'<td>',$row['bno'],'</td>',
                '<td>',$row['year'],'</td>',
                '<td>',$row['pno'],'</td>',
				'<td>',$row['course'],'</td>',
					'<td>',$row['amount'],'</td>',
				
				 '<td>',"<a href=$url>Check</a>",'</td>',
				'<tr>';
			}
        }
		$sum="SELECT SUM(amount) from `examiner` where (examid='$examid') AND (c_u='Uncheck')";
		$t=mysqli_query($connection,$sum);
		$total=mysqli_fetch_assoc($t);
		echo 'Total',$total['SUM(amount)'];
    }
    else{
        echo "No availability,Sorry for this";
    }
 ?>