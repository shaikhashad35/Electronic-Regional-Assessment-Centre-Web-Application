
<?php
 require('connect.php'); //to conn with db
 session_start();
 if (isset($_POST['email']) && isset($_POST['password']) ){   //check value insert
    
   $email = htmlentities($_POST['email'] );  //html form data get stored in var
   $password = htmlentities($_POST['password'] );

   if (!empty($email) && !empty($password) ){  // check  field empty or not
   $query = "SELECT * FROM `admin` WHERE user='$email' AND pass='$password'";   //retrieve all username n passwordf

   $results = mysqli_query($connection, $query); //run query in db
   $count = mysqli_num_rows($results);
   if($count == 1){
     echo "Login successfull";
	header('Location: adminhome.php');
	
   }else{
	   print_r($count);
     echo "Login Unsuccessful";
   }
 }else{
  echo "Please enter all details!";
 }
}

?>
<!DOCTYPE html>
<html >
  <head>
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
    <h1>Login Form</h1>
                         <p>Enter username and password to log on:</p>
	    <form  action="loginadmin.php" method="post"  >
				        						
				  <label  for="email">ADMIN Username</label><br>
					<input type="text" name="email" placeholder="Enter Your EmailID"><br><br>
				                       
			  	<label for="password">Password</label><br>
				  <input type="password" name="password" placeholder="Enter your Password" ><br><br>
				  
				                        
				 <button type="submit" class="btn">Log in!</button>
				  
	    </form>
		</div>
                     
    </body>

</html>