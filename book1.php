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
    background-image: url("bck13.jpg");
    background-repeat: no-repeat;
	background-size: cover;
	
}

</style> 
</head>	
<body >
	<form action='bookc.php' method='post'>

<nav>
	<ul>
							<a href="index1.html"><img src="Luxury-Ride-Dark-Logo.png" alt="logo" style="float:left; margin-left:10px; padding:5px; width:12%;" ></a>

						<li><a href="explore.html">EXPLORE</a></li>
						<li><a href='login.php'>BOOK NOW</a></li>
                        <li><a href="support.html">SUPPORT</a></li>
						
						
    </ul>
</nav>
<h3 style="padding-top:10%"align="center">JOURNEY DETAILS</h3>
<div  align="center">
<?php

$usql="select * from route";
$ures=mysqli_query($connect,$usql);

echo "<table style='border:solid'>";
echo "<tr style='border:solid'>";
	echo "<td style='border: solid black;
    border-collapse: collapse;padding: 15;'>"; echo "SOURCE"; echo "</td>";
	echo "<td style='border: solid black;
    border-collapse: collapse;padding: 15;'>"; echo "DESTINATION"; echo "</td>";
	echo "<td style='border: solid black;
    border-collapse: collapse;padding: 15;'>"; echo "ROUTE FARE"; echo "</td>";
	echo "</tr>";
echo "<tr>";
while($row=mysqli_fetch_array($ures))
{
	
	echo "<td style='border: 1px solid black;
    border-collapse: collapse;padding: 10;'>"; echo $row["source"]; echo "</td>";
	echo "<td style='border: 1px solid black;
    border-collapse: collapse;padding: 10;'>"; echo $row["desti"]; echo "</td>";
	echo "<td style='border: 1px solid black;
    border-collapse: collapse;padding: 10;'>"; echo $row["disfare"]; echo "</td>";
	echo "</tr>";
}
echo "</table>"	;

?>
</div>						


						
	<table align="center">
	<br><br>
		<tr>
			<br><td align='right'>SOURCE</td> 
	
			<td align='center'> <input type='text' name='source' id='source' maxlength='50' required='required' > </td>
		</tr>
		<tr>
				<td> <br> </td>
			</tr>
		<tr>
			<td align='right'>DESTINATION</td> 
		
			<td align='center'> <input type='text' name='desti' id='destination' maxlength='50' required='required' >
			</td>
		</tr>
		<tr>
				<td> <br> </td>
		</tr>
		<tr>
			<td align='right'>NUMBER OF PASSENGER</td> 
		
			<td align='center'> <input type='number' name='nop' maxlength='8' required='required'>
		</tr>
		<tr>
				<td> <br> </td>
		</tr>
		<tr>
			<td colspan='2' align='center'><input type='submit' name='book_submit' value='CONTINUE'></td>
		
		</tr>
		</table>
		<br><br>
				<p align="left" style="font-size:12px;margin-left:20px;"><b>T&C :</b> Details are case-sensitive.</p>

		
					<!--<div><a href="book1.php?logout=1" ><img src="logout4.gif" alt="logout" style="float:right; margin-right:15%; ">
					<?php
							/*if(isset($_GET['logout']))
							{
								session_destroy();
								
								header("refresh:0; url=login.php");
							}
							*/?>		
					
					</div>-->

		
		
		</style>
							
</body>



	
</html>
