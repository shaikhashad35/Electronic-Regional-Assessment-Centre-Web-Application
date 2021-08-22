
<?php
    
  require('connect.php');
session_start();
  if (isset($_POST['user_name']) && isset($_POST['password'])&& isset($_POST['cpassword'])&& isset($_POST['contact']) && isset($_POST['email']) && isset($_POST['college']) && isset($_POST['examid']))
  {
	$examid= htmlentities($_POST['examid']);
    $email = htmlentities($_POST['email'] );
    $mobile = htmlentities($_POST['contact'] );
    $user = htmlentities($_POST['user_name'] );
    $password = htmlentities($_POST['password'] );
    $cpassword = htmlentities($_POST['cpassword'] );
    $colg = htmlentities($_POST['college'] );
    
    if (!empty($email) && !empty($password) && !empty($cpassword) && !empty($user)&& !empty($mobile)&& !empty($colg) && !empty($examid)){
		if($cpassword==$password){
		
          $query = "INSERT INTO `register`(`examid`, `user_name`, `email`, `password`, `college`, `contact`, `eid`) VALUES ('$examid', '$user' , '$email', '$password', '$colg', '$mobile',NULL)";
		 
		  $response = mysqli_query($connection, $query);  
           print_r($response);   
          if($response){
           // echo "<script> alert('User Created Successfully.')</script>";
			header('Location: adminhome.php');
            
            
          }else{echo "query error";
            echo "<script> alert('User Registration Failed')</script>";
			
          }
        
    }else{echo "not match";
    	echo "<script> alert(Passwords do not match, please try again!')</script>";
        }
	}else{echo "empty";
      echo "<script> alert('Please enter all details!')</script>";
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
    <h1> Registration </h1>
    <form action="register.php" method="post"  >
		
		<label  for="eno">Examiner ID</label><br>
		<input type="number" name="examid" placeholder="Examiner ID..." ><br><br>
		
		<label  for="name">Examiner Name</label><br>
		<input type="text" name="user_name" placeholder="Full Name..." ><br><br>
		
		<label  for="email">Email</label><br>
		<input type="email" name="email" placeholder="Email..."><br><br>

		<label  for="password">Password</label><br>
		<input type="password" name="password" placeholder="Password..."><br><br>
				                       
		<label  for="cpassword"> Confirm Password</label><br>
		<input type="password" name="cpassword" placeholder=" Confirm Password..." ><br><br>

		<label for="college">College</label><br>
		<textarea type="text" name="college" placeholder="College..." ></textarea><br><br>
				              
		<label  for="contact">Contact</label><br>
		<input type="text" name="contact" placeholder="Contact..." ><br><br>
	    <button type="submit" >Sign in!</button>
	</form>
    
    </body>

</html>