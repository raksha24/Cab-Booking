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
	<form action='addc_insert.php' method='post'>

<nav>
	<ul>
							<a href="index1.html"><img src="Luxury-Ride-Dark-Logo.png" alt="logo" style="float:left; margin-left:10px; padding:5px; width:12%;" ></a>

						<li><a href="explore.html">EXPLORE</a></li>
						<li><a href='login.php'>BOOK NOW</a></li>
                        <li><a href="support.html">SUPPORT</a></li>
						
						
    </ul>
</nav>
<h3 style="padding-top:10%;margin-left:5%">YOU ARE ADDING USER DETAILS</h3>
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
			
				<td > <input type='text' name='vnum' maxlength='10' required='required'> </td>
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
				<td align='right'> COST FACTOR : </td>
			
				<td > <input type='number' name='cf' maxlength='10' required='required'> </td>
			</tr>
			<tr>
				<td> <br> </td>
			</tr>
			<tr>
			<td colspan='2' align='center'> <input type='submit' name='addc_insert' value="ADD CAB"> </td>
			</tr>
</table>
</body>
</html>