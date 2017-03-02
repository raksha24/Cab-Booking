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
		<form action='cremove.php' method='post'>

<nav>
	<ul>
							<a href="index1.html"><img src="Luxury-Ride-Dark-Logo.png" alt="logo" style="float:left; margin-left:10px; padding:5px; width:12%;" ></a>

						<li><a href="explore.html">EXPLORE</a></li>
						<li><a href='login.php'>BOOK NOW</a></li>
                        <li><a href="support.html">SUPPORT</a></li>
						
						
    </ul>
</nav>

<div style="padding-top:10%;margin-left:25%;">
<?php

$usql="select * from vehicle where vbook='0'";
$ures=mysqli_query($connect,$usql);

echo "<table style='border:solid'>";
echo "<tr style='border:solid'>";
	echo "<td style='border: solid black;
    border-collapse: collapse;padding: 15;'>"; echo "NAME"; echo "</td>";
	echo "<td style='border: solid black;
    border-collapse: collapse;padding: 15;'>"; echo "NUMBER"; echo "</td>";
	echo "<td style='border: solid black;
    border-collapse: collapse;padding: 15;'>"; echo "NO. OF PASSENGER"; echo "</td>";
	echo "</tr>";
echo "<tr>";
while($row=mysqli_fetch_array($ures))
{
	
	echo "<td style='border: 1px solid black;
    border-collapse: collapse;padding: 15;'>"; echo $row["vname"]; echo "</td>";
	echo "<td style='border: 1px solid black;
    border-collapse: collapse;padding: 15;'>"; echo $row["vno"]; echo "</td>";
	echo "<td style='border: 1px solid black;
    border-collapse: collapse;padding: 15;'>"; echo $row["vpassenger"]; echo "</td>";
	echo "</tr>";
}
echo "</table>"	;

?>
</div>

<h3 style="padding-top:10%;margin-left:5%">ENTER DETAILS YOU WANT TO REMOVE FROM DATABASE</h3>
<table align='center'>
			
			<tr>
				<td align='right'> NAME : </td>
			
				<td > <input type='text' name='vname' maxlength='50' required='required'> </td>
			</tr>
			<tr>
				<td align='right'> <br> </td>
			</tr>
			<tr>
				<td align='right'> NUMBER : </td>
			
				<td > <input type='text' name='vnum' maxlength='20' required='required'> </td>
			</tr>
			<tr>
				<td> <br> </td>
			</tr>
			<tr>
				<td align='right'> NUMBER OF PASSENGER : </td>
			
				<td > <textarea	style="width: 100%; height:100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; resize: none;"
							name='vnp' maxlength='1'  max='8' required='required'></textarea> </td>
			</tr>
			<tr>
				<td> <br> </td>
			</tr>
			<tr>
			<td colspan='2' align='center'> <input type='submit' name='delc_remove' value="DELETE CAB"> </td>
			</tr>
</table>

</body>
</html>