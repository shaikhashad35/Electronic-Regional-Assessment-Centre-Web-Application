<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
body{
    background:url("ap.jpg") center no-repeat;
	hight:100vh;
	background-size:cover;
}
.menudropdown1{
    width:900px;
    height:100px;
    margin:0px auto;
}
.menudropdown1 ul{
    padding:10px;
}
.menudropdown1 ul li{
    float:left;
	background-color: rgba(7, 40, 195, 0.8);
	color: #ffffff;
	width:200px;
	height:50px;
	line-height:50px;
	font-size:20px;
	text-align:center;
	list-style:none;
	opacity:0.8;
}
.menudropdown1 ul li ul{
    display:none;
}
.menudropdown1 ul li:hover > ul{
    display:block;
}
.menudropdown1 ul li:hover{
    background-color:green;
	opacity:0.9;
}



</style>
    </head>
    <body>
     <h1 align="center"><u> E-RAC </u></h1>
     <hr size="15" width=100% color="black" </hr>

<div class="menudropdown1">
    <B>
<ul>
    <li> HOME  </li>              
	<li> LOGIN
	  <ul>
	     <li> <a href="loginadmin.php">ADMIN</a></li>
		 <li> <a href="login.php">EXAMINER</a></li>
		</ul>
	<li> ABOUT</li>
	<li> HELP</li>
</ul>
    </B>
    </body>
</html>
