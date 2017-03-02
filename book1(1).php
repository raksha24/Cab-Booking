<?php
include 'connect.php';
?>

<html>
<head>
	<title>LUXURY RIDE: BOOKING</title>
	        <link rel="stylesheet" type="text/css" href="nav1.css"/>

</head>
<body>
						<a href="index1.html"><img src="Luxury-Ride-Dark-Logo.png" alt="logo" style="float:left; margin-left:10px; padding:5px; width:12%;" ></a>
	<form action='book2.php' method='post'>

<nav>
	<ul>
						<li><a href="explore.html">EXPLORE</a></li>
						<li><a href='login.php'>BOOK NOW</a></li>
                        <li><a href="#">SUPPORT</a></li>
    </ul>
</nav>

	<table align="center">
	<br><br><br><br>
		<tr>
			<br><td align='right'>SOURCE</td> 
	
			<td align='center'> <input type='text' name='source' maxlength='50' > </td>
		</tr>
		<tr>
				<td> <br> </td>
			</tr>
		<tr>
			<td align='right'>DESTINATION</td> 
		
			<td align='center'> <input type='text' name='desti' maxlength='50' >
			</td>
		</tr>
		<tr>
				<td> <br> </td>
		</tr>
		<tr>
			<td align='right'>NUMBER OF PASSENGER</td> 
		
			<td align='center'> <input type='number' name='nop' maxlength='8' >
		</tr>
		<tr>
				<td> <br> </td>
		</tr>
		<tr>
			<td colspan='2' align='center'><button type="button" align="center" onclick="document.getElementById('demo').style.display='table'">CONTINUE</button></td>
		</tr>
		<table id="demo" align='center' style="display:none">
		<tr>
				<td> <br> </td>
		</tr>
		<tr>
			<td align='center'>AVAILABLE CAB FOR YOU</td>
		</tr>
		<tr>
			<td> <br> </td>
		</tr>
		<tr>
			<td align='center'>TOTAL FARE</td>
		</tr>
		<tr>
			<td> <br> </td>
		</tr>
		<tr>
			<td align='center'>YOUR DESTINATION ROUTE</td>
		</tr>
		<tr>
			<td> 
				
			</td>
		</tr>
		<tr>
			<td align='center'> <input type='submit' name='book_submit' > </td>
		</tr>

</body>
</html>

<!--<script>
	function mapcall($source,$desti)
	{
		$sql_users="SELECT * FROM route WHERE source='$source' AND desti='$desti'";
		$result_users=mysqli_query($connect,$sql_users);
		
 
	}
</script>-->