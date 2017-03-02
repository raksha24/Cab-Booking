<?php
include 'connect.php';
session_start();
/*if(!isset($_SESSION['userid']))
{
  header('refresh:0; url=index1.html');
}*/

$u1=$_SESSION['userid'];

/*for booked one */
$q2="SELECT * FROM uregister WHERE userid='$u1'";
$res=mysqli_query($connect, $q2);
$row=mysqli_fetch_array($res);

if($row['ubook']>0)
{
		$_SESSION['name']=$row['ucar'];
		$_SESSION['fare_total']=$row['ufare'];
		$_SESSION['img']=$row['uimg'];
		$_SESSION['no']=$row['uno'];
		$a1=$_SESSION['name'];
		$a2=$_SESSION['img'];
		$a3=$_SESSION['fare_total'];
		$a4=$_SESSION['no'];
}
else{

$a1=$_SESSION['name'];
$a2=$_SESSION['img'];
$a3=$_SESSION['fare_total'];


$chng="UPDATE vehicle SET vbook='1' WHERE vname='$a1'";
$uchng="UPDATE uregister SET ubook='1' WHERE userid='$u1'";

mysqli_query($connect, $chng);

mysqli_query($connect, $uchng);
}
$a="SELECT vno FROM vehicle WHERE vname='$a1'";
				$res=mysqli_query($connect,$a);
			if(mysqli_num_rows($res)<= 0)
			{
			echo "fail";
			}
			else{
			$row=mysqli_fetch_array($res);
			$_SESSION['no']=$row["vno"];}
			
$a4=$_SESSION['no'];

$q1="UPDATE uregister SET ucar='$a1',ufare='$a3',uno='$a4',uimg='$a2' WHERE userid='$u1'";
mysqli_query($connect, $q1);


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
	<form action='over.php' method='post'>

<nav>
	<ul>
							<a href="index1.html"><img src="Luxury-Ride-Dark-Logo.png" alt="logo" style="float:left; margin-left:10px; padding:5px; width:12%;" ></a>

						<li><a href="explore.html">EXPLORE</a></li>
						<li><a href='login.php'>BOOK NOW</a></li>
                        <li><a href="support.html">SUPPORT</a></li>
    </ul>
</nav>

<br><br>
						<h1 style="padding-top:4%;float:left; font-size:40px;margin-left:5%">WELCOME "<i> <?php echo $_SESSION['userid'];  ?> </i>"! </h1>
			<div style="padding-top:15%; margin-left:10%;"><table align="left">
			<tr>
			<td align="right"><b>YOUR CAB FOR THE RIDE :</b></td>
			<td align="center"><img style="center" src="<?php echo $a2;?>" height="100%" width="100%"><br>
			<?php echo $a1;
	
			?>
			</td>
			</tr>
			<tr>
			<td> <br> </td>
			</tr>
			<tr>
			<td align="right"><b>CAB NUMBER : </b></td>
			<td align="center"><?php 
			echo $a4;
			?></td>
			</tr>
			<tr>
			<td> <br> </td>
			</tr>
			<tr>
			<td align="right"><b>TOTAL FARE :</b></td>
			<td align="center"><?php 
				echo $a3;
			?></td>
			</tr>
			<tr>
				<td> <br> </td>
			</tr>
			<tr>
			<td colspan='2' align='center'><input type='submit' name='over_submit' value='FINISH RIDE'></td>
			</tr>
			</table></div>
</body>

		<div><a href="book2.php?logout=1" ><img src="logout4.gif" alt="logout" style="float:right; margin-right:15%;">
					<?php
							if(isset($_GET['logout']))
							{
								session_destroy();
								header("refresh:0; url=login.php");
							}
							?>		
					
					</div>


</html> 