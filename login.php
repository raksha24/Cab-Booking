<?php
include 'connect.php';
?>
<html>
<head>
	<title>SIGN UP</title>
			        <link href="nav1.css" rel="stylesheet" type="text/css"/>
<style>
body{
    background-image: url("bck10.jpg");
    background-repeat: no-repeat;
	background-size: cover;
	
}

</style> 

</head>
<body>

<nav>
	<ul>
							<a href="index1.html"><img src="Luxury-Ride-Dark-Logo.png" alt="logo" style="float:left; margin-left:10px; padding:5px; width:12%;" ></a>

						<li><a href="explore.html">EXPLORE</a></li>
						<li><a href='login.php'>BOOK NOW</a></li>
                        <li><a href="support.html">SUPPORT</a></li>
    </ul>
</nav>

	<form action='authenticate.php' method='post'>
	<div style="padding-top:10%">
	<table align='center'>
	<br><br><br><br>
		<tr>
			<br><td align='center'> USER ID </td> 
	
			<td align='center'> <input type='text' name='uid'  maxlength='50' required='required'> </td>
		</tr>
		<tr>
				<td> <br> </td>
			</tr>
		<tr>
			<td align='center'> PASSWORD </td> 
		
			<td align='center'> <input type='password' name='password' maxlength='50' required='required'> </td>
		</tr>
		<tr>
				<td> <br> </td>
			</tr>
		<tr>
			<td colspan='2' align='center' > <input type='submit' name='login_submit' value='LOGIN'> </td>
		</tr>
		<tr>
				<td> <br> </td>
			</tr>
		<tr>
			<td colspan='2' align='center' ><i>NEW USER?</i></td>
		</tr>
		
		<tr>
			<td colspan='2' align='center' ><a href='register.php'> <input type='button' name='signup' value='SIGNUP'></a> </td>
		</tr>
	</table>

	</div>
</form>
	
</body>
</html>