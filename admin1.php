<?php
include 'connect.php';
session_start();
if(!isset($_SESSION['userid']))
{
  header('refresh:0; url=index1.html');
}

?>

<html>
<head>
	<title>LUXURY RIDE: BOOKING</title>
	        <link rel="stylesheet" type="text/css" href="nav1.css"/>
	<style>
body{
    background-image: url("bck10.jpg");
    background-repeat: no-repeat;
	background-size: cover;
	
}

</style> 
</head>	
<body >

<nav>
	<ul>
							<a href="index1.html"><img src="Luxury-Ride-Dark-Logo.png" alt="logo" style="float:left; margin-left:10px; padding:5px; width:12%;" ></a>

						<li><a href="explore.html">EXPLORE</a></li>
						<li><a href='login.php'>BOOK NOW</a></li>
                        <li><a href="support.html">SUPPORT</a></li>
						
						
    </ul>
</nav>


						<h1 style="padding-top:10%;float:left; font-size:40px;margin-left:5%">WELCOME "<i> <?php echo $_SESSION['adid'];  ?> </i>"! </h1>

<div style="padding-top:20%;margin-left:10%">
<p>ADD USER</p>
<a href='adduser.php'> <input type='button' name='add_user' value='ADD USER'></a>
<p>DELETE USER</p>
<a href='deluser.php'> <input type='button' name='del_user' value='DELETE USER'></a>
<p>ADD CAB</p>
<a href='addcab.php'> <input type='button' name='add_cab' value='ADD CAB'></a>
<p>DELETE CAB</p>
<a href='delcab.php'> <input type='button' name='del_cab' value='DELETE CAB'></a>
</div>

				<div><a href="admin1.php?logout=1" ><img src="logout4.gif" alt="logout" style="float:right; margin-right:15%;">
					<?php
							if(isset($_GET['logout']))
							{
								session_destroy();
								header("refresh:0; url=login.php");
							}
							?>		
					
					</div>

</body>
</html>