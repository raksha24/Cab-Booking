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
		<form action='uremove.php' method='post'>


<nav>
	<ul>
							<a href="index1.html"><img src="Luxury-Ride-Dark-Logo.png" alt="logo" style="float:left; margin-left:10px; padding:5px; width:12%;" ></a>

						<li><a href="explore.html">EXPLORE</a></li>
						<li><a href='login.php'>BOOK NOW</a></li>
                        <li><a href="support.html">SUPPORT</a></li>
						
						
    </ul>
</nav> <div style="padding-top:10%;margin-left:25%;">
<?php

$usql="select * from uregister where ubook='0'";
$ures=mysqli_query($connect,$usql);

echo "<table style='border:solid'>";
echo "<tr style='border:solid'>";
	echo "<td style='border: 1px solid black;
    border-collapse: collapse;padding: 15;'>"; echo "NAME"; echo "</td>";
	echo "<td style='border: 1px solid black;
    border-collapse: collapse;padding: 15;'>"; echo "ADDRESS"; echo "</td>";
	echo "<td style='border: 1px solid black;
    border-collapse: collapse;padding: 15;'>"; echo "EMAIL"; echo "</td>";
	echo "<td style='border: 1px solid black;
    border-collapse: collapse;padding: 15;'>"; echo "MOBILE NO."; echo "</td>";
	echo "<td style='border: 1px solid black;
    border-collapse: collapse;padding: 15;'>"; echo "USERID"; echo "</td>";
	echo "<td style='border: 1px solid black;
    border-collapse: collapse;padding: 15;'>"; echo "PASSWORD"; echo "</td>";
	echo "</tr>";
echo "<tr>";
while($row=mysqli_fetch_array($ures))
{
	
	echo "<td style='border: 1px solid black;
    border-collapse: collapse;padding: 15;'>"; echo $row["name"]; echo "</td>";
	echo "<td style='border: 1px solid black;
    border-collapse: collapse;padding: 15;'>"; echo $row["address"]; echo "</td>";
	echo "<td style='border: 1px solid black;
    border-collapse: collapse;padding: 15;'>"; echo $row["email"]; echo "</td>";
	echo "<td style='border: 1px solid black;
    border-collapse: collapse;padding: 15;'>"; echo $row["mobno"]; echo "</td>";
	echo "<td style='border: 1px solid black;
    border-collapse: collapse;padding: 15;'>"; echo $row["userid"]; echo "</td>";
	echo "<td style='border: 1px solid black;
    border-collapse: collapse;padding: 15;'>"; echo $row["password"]; echo "</td>";
	echo "</tr>";
}
echo "</table>"	;

?>
</div>

<h3 style="padding-top:5%;margin-left:5%">ENTER DETAILS YOU WANT TO REMOVE FROM DATABASE </h3>

<table align='center'>
			<br><br>
			<tr>
				<td align='right'> NAME : </td>
			
				<td > <input type='text' name='username' maxlength='50' required='required'> </td>
			</tr>
			<tr>
				<td align='right'> <br> </td>
			</tr>
			<tr>
				<td align='right'> ADDRESS : </td>
			
				<td > <input type='text' name='address' maxlength='100' required='required'> </td>
			</tr>
			<tr>
				<td> <br> </td>
			</tr>
			<tr>
				<td align='right'> EMAIL : </td>
			
				<td > <input type='email' name='email' maxlength='50' required='required'> </td>
			</tr>
			<tr>
				<td> <br> </td>
			</tr>
			<tr>
				<td align='right'> MOBILE NO. : </td>
				<td > <textarea	style="width: 100%; height:100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; resize: none;"
							name='mnum' maxlength='10'  max='10000000000' required='required'></textarea>
				</td>
			</tr>
			<tr>
				<td> <br> </td>
			</tr>
			<tr>
				<td align='right'> USER ID : </td>
			
				<td > <input type='text' name='uid' maxlength='50' required='required'> </td>
			</tr>
			<tr>
				<td> <br> </td>
			</tr>
			<tr>
				<td align='right'> PASSWORD : </td>
			
				<td > <input type='password' name='password' maxlength='50' required='required'> </td>
			</tr>
			<tr>
				<td> <br> </td>
			</tr>
			<tr>
			<td colspan='2' align='center'> <input type='submit' name='delu_remove' value="DELETE USER"> </td>
			</tr>
</table>