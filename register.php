<?php
include 'connect.php';
?>
<html>
<head>
        <link rel="stylesheet" type="text/css" href="nav1.css"/>
<style>
body{
    background-image: url("bck10.jpg");
    background-repeat: no-repeat;
	background-size: cover;
	
}

</style> 
</head>

<body style="padding-top:5%">

	<nav>
	<ul>
							<a href="index1.html"><img src="Luxury-Ride-Dark-Logo.png" alt="logo" style="float:left; margin-left:10px; padding:5px; width:12%;" ></a>

                        <li><a href="explore.html">EXPLORE</a></li>
                        <li><a href='login.php'>BOOK NOW</a></li>
                        <li><a href="support.html">SUPPORT</a></li>
    </ul>
	</nav>
	<form action='register_insert.php' method='post'>
	<br><br><br><br>
		<table align='center'>
			
			<tr>
				<td align='right'> NAME </td>
			
				<td > <input type='text' name='username' maxlength='50' required='required'> </td>
			</tr>
			<tr>
				<td align='right'> <br> </td>
			</tr>
			<tr>
				<td align='right'> ADDRESS </td>
			
				<td > <input type='text' name='address' maxlength='100' required='required'> </td>
			</tr>
			<tr>
				<td> <br> </td>
			</tr>
			<tr>
				<td align='right'> EMAIL </td>
			
				<td > <input type='email' name='email' maxlength='50' required='required'> </td>
			</tr>
			<tr>
				<td> <br> </td>
			</tr>
			<tr>
				<td align='right'> MOBILE NO. </td>
				<td ><input type="number_format" name="mnum" maxlength="10" required="required"> <!--<textarea	type="number_format" style="width: 100%; height:100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; resize: none;"
							name='mnum' maxlength='10'  max='10000000000' required='required'></textarea> -->
				</td>
			</tr>
			<tr>
				<td> <br> </td>
			</tr>
			<tr>
				<td align='right'> USER ID </td>
			
				<td > <input type='text' name='uid' maxlength='4' required='required'> </td>
			</tr>
			<tr>
				<td> <br> </td>
			</tr>
			<tr>
				<td align='right'> PASSWORD </td>
			
				<td > <input type='password' name='password' maxlength='50' required='required'> </td>
			</tr>
			<tr>
				<td> <br> </td>
			</tr>
			<tr>
				<td align='right'> CONFIRM PASSWORD </td>
			
				<td > <input type='password' name='cpassword' maxlength='50' required='required'> </td>
			</tr>
			<tr>
				<td> <br> </td>
			</tr>
			<tr>
				<td> <br> </td>
			</tr>
			<tr>
			<td colspan='2' align='center'> <input type='submit' name='register_submit' value='REGISTER'> </td>
			</tr>
		</table>
		<p align="left" style="font-size:12px;margin-left:20px;"><b>T&C :</b> User can not update the details once registered.</p>
</body>

</html>