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
        <link rel="stylesheet" type="text/css" href="nav1.css"/>
<style>
body{
    background-image: url("bck13.jpg");
    background-repeat: no-repeat;
	background-size: cover;
	
}

</style> 

</head>

<body>
		<form action='finish.php' method='post'>
	
<nav>
	<ul>
							<a href="index1.html"><img src="Luxury-Ride-Dark-Logo.png" alt="logo" style="float:left; margin-left:10px; padding:5px; width:12%;" ></a>

						<li><a href="explore.html">EXPLORE</a></li>
						<li><a href='login.php'>BOOK NOW</a></li>
                        <li><a href="support.html">SUPPORT</a></li>
    </ul>
</nav>
<div style="padding-top:10%;margin-left:10%;margin-right:10%">
<p><div style="font-size:30px;">We hope you enjoyed the Ride with us.<br>Please give the Rating below.</div></p>
<table>
<tr>
<td>RATING (OUT OF 5) :</td>
<td><input type="number_format" maxlength='1' max='5' name="rate" required='required' >	</td>
</tr>
<tr>
<td>	<br>	</td>
</tr>
<tr>
<td colspan='2'>FEEL FREE TO GIVE SUGGESTIONS :)</td>
</tr>
</table>
<textarea style="width: 60%; height:40%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; resize: none;"
							name='sg' ></textarea>	</td>
<table>
<tr>
<td>	<br>	</td>
</tr>
<tr>
<td colspan='2' align='center'><input type='submit' name='over_submit' value='FINISH RIDE'></td>	</td>
</tr>
</table>
</div>

</body>
</html>