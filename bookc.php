<?php
include 'connect.php';
session_start();
if(!isset($_SESSION['userid']))
{
  header('refresh:0; url=index1.html');
}

$src=$_POST['source'];
$des=$_POST['desti'];
$no=$_POST['nop'];
$save1=$_SESSION['userid'];
?>

<html>
<head>
			        <link href="nav1.css" rel="stylesheet" type="text/css"/>

<style>
body{
    background-image: url("bck13.jpg");
    background-repeat: no-repeat;
	background-size: cover;
	
}

</style> 
</head>

<body >
	<form action='book2.php' method='post'>

<nav>
	<ul>
							<a href="index1.html"><img src="Luxury-Ride-Dark-Logo.png" alt="logo" style="float:left; margin-left:10px; padding:5px; width:12%;" ></a>

						<li><a href="explore.html">EXPLORE</a></li>
						<li><a href='login.php'>BOOK NOW</a></li>
                        <li><a href="support.html">SUPPORT</a></li>
    </ul>
</nav>

			<div style="padding-top:10%"><p style="text-align:center"><b>AVAILABLE CAB FOR YOU</b></p>
		 <br> 
<center>
<?php

$v1=0;
/* For no. of passengers max 3 */
if($no<=3)
{
$sql_v="SELECT MIN(vehicle.vid),vehicle.vname,vimage.imgpath FROM vehicle,vimage WHERE vehicle.vid=vimage.id AND vehicle.vpassenger>='3' AND vehicle.vbook='0'";
$res=mysqli_query($connect,$sql_v);
if(mysqli_num_rows($res)<= 0)
{
	echo "connection fail";
}
else{
$row=mysqli_fetch_array($res);

	?> <img style="center" src="<?php echo $row["imgpath"];?>" height="20%" width="25%"> <?php 
	echo '<br>';
	 echo  $row["vname"]; 
	
$v1=$row["vname"];
$_SESSION['name'] = $v1;
$_SESSION['img']= $row["imgpath"];
//echo "imgpath".$row['imgpath'];
echo "</table>"	;
}
}

/* For no. of passengers max 5 */
else if($no<=5)
{
$sql_v="SELECT MIN(vehicle.vid),vehicle.vname,vimage.imgpath FROM vehicle,vimage WHERE vehicle.vid=vimage.id AND vehicle.vpassenger>='5' AND vehicle.vbook='0'";
$res=mysqli_query($connect,$sql_v);
if(mysqli_num_rows($res)<= 0)
{
	echo "connection fail!";
}
else{
$row=mysqli_fetch_array($res);

	?> <img style="center" src="<?php echo $row["imgpath"];?>" height="20%" width="25%"> <?php 
	echo '<br>';
	 echo  $row["vname"]; 
	
$v1=$row["vname"];
$_SESSION['name'] = $v1;
$_SESSION['img']= $row["imgpath"];
echo "</table>"	;
}
}

/* For no. of passengers max 8 */
else if($no<=8)
{
$sql_v="SELECT MIN(vehicle.vid),vehicle.vname,vimage.imgpath FROM vehicle,vimage WHERE vehicle.vid=vimage.id AND vehicle.vpassenger='8' AND vehicle.vbook='0'";
$res=mysqli_query($connect,$sql_v);
if(mysqli_num_rows($res)<= 0)
{
	echo "connection fail";
}
else{
$row=mysqli_fetch_array($res);

	?> <img style="center" src="<?php echo $row["imgpath"];?>" height="20%" width="25%"> <?php 
	echo '<br>';
	 echo  $row["vname"]; 
	
$v1=$row["vname"];
$_SESSION['name'] = $v1;
$_SESSION['img']= $row["imgpath"];
echo "</table>"	;
}
}

/* For no. of passenger greater than 8 */
else
{
	echo "Sorry! Cabs are unavailable!";
}
?>		 
</center>

		<br>
			<p style="text-align:center"><b>TOTAL FARE</b></p>	
<center>
<?php

$total=0;
$var1=0;
$var2=0;
$var1="SELECT disfare FROM route WHERE source='$src' AND desti='$des'"; 
$var2="SELECT vfare FROM vehicle WHERE vname='$v1'";
$res1=mysqli_query($connect,$var1);
$res2=mysqli_query($connect,$var2);
if(mysqli_num_rows($res1)<= 0)
{
	echo "connection failed!";
}
if(mysqli_num_rows($res2)<= 0)
{
	echo "connection failed!";
}
$row1=mysqli_fetch_array($res1);
$row2=mysqli_fetch_array($res2);

$total=$row1['disfare']*$row2['vfare'];

$_SESSION['fare_total'] = $total;
echo $total; $save1;
?>
</center>
		 <br>
			
			<p style="text-align:center"><b>YOUR DESTINATION ROUTE</b></p>
		 
<center>
<?php

$sql_users="SELECT * FROM route WHERE source='$src' AND desti='$des'";
$result_users=mysqli_query($connect,$sql_users);

if(mysqli_num_rows($result_users)<= 0)
{
	echo "Sorry! CAB is not available for this ROUTE!";
}
else if($src=="Panvel"&&$des=="Colaba")
{
	?>	<div style="text-decoration:none; overflow:hidden; height:500px; width:500px; max-width:100%;"><div id="embedded-map-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/directions?origin=Panvel,+Navi+Mumbai,+Maharashtra,+India&destination=Colaba,+Mumbai,+Maharashtra,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-map-enabler" rel="nofollow" href="http://www.szablonypremium.pl" id="authorize-map-data">http://www.szablonypremium.pl</a><style>#embedded-map-display .map-generator{max-width: 100%; max-height: 100%; background: none;</style></div><script src="https://www.szablonypremium.pl/google-maps-authorization.js?id=c41f3a54-bf13-d526-f246-3303768c4c17&c=google-map-enabler&u=1476205965" defer="defer" async="async"></script> 
	<?php

}
else if($src=="Vashi"&&$des="Santacruz (West)")
{
	?>	<div style="text-decoration:none; overflow:hidden; height:500px; width:500px; max-width:100%;"><div id="embedded-map-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/directions?origin=Vashi,+Navi+Mumbai,+Maharashtra,+India&destination=Santacruz+East,+Mumbai,+Maharashtra,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-map-enabler" rel="nofollow" href="http://www.szablonypremium.pl" id="authorize-map-data">szablony premium</a><style>#embedded-map-display .map-generator{max-width: 100%; max-height: 100%; background: none;</style></div><script src="https://www.szablonypremium.pl/google-maps-authorization.js?id=8100be25-b9f8-b43d-0c63-ae249e5a35d1&c=google-map-enabler&u=1476205965" defer="defer" async="async"></script>
	<?php
}
else if($src=="Panvel"&&$des="CST")
{
	?>	<div style="text-decoration:none; overflow:hidden; height:500px; width:500px; max-width:100%;"><div id="embedded-map-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/directions?origin=Panvel,+Navi+Mumbai,+Maharashtra,+India&destination=Chhatrapati+Shivaji+Terminus,+Chhatrapati+Shivaji+Terminus+Area,+Mumbai,+Maharashtra,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-map-enabler" rel="nofollow" href="http://www.szablonypremium.pl/wordpress" id="authorize-map-data">szablony wordpress</a><style>#embedded-map-display .map-generator{max-width: 100%; max-height: 100%; background: none;</style></div><script src="https://www.szablonypremium.pl/google-maps-authorization.js?id=417faef7-c7f2-933c-2897-7a4ed80c9598&c=google-map-enabler&u=1476205965" defer="defer" async="async"></script>
	<?php
}
else if($src=="Panvel"&&$des="Thane (West)")
{
	?>	<div style="text-decoration:none; overflow:hidden; height:500px; width:500px; max-width:100%;"><div id="embedded-map-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/directions?origin=Panvel,+Navi+Mumbai,+Maharashtra,+India&destination=Thane+West,+Thane,+Maharashtra,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-map-enabler" rel="nofollow" href="http://www.szablonypremium.pl/wordpress" id="authorize-map-data">motywy wordpress</a><style>#embedded-map-display .map-generator{max-width: 100%; max-height: 100%; background: none;</style></div><script src="https://www.szablonypremium.pl/google-maps-authorization.js?id=6aa5458c-b1a4-2e6f-f4fe-1844f4776ba8&c=google-map-enabler&u=14762059y65" defer="defer" async="async"></script>
	<?php
}
else if($src=="Vashi"&&$des=="Santacruz (East)")
{
	?> <div style="text-decoration:none; overflow:hidden; height:500px; width:500px; max-width:100%;"><div id="embedded-map-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/directions?origin=Vashi,+Navi+Mumbai,+Maharashtra,+India&destination=Santacruz+East,+Mumbai,+Maharashtra,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-map-enabler" rel="nofollow" href="http://www.szablonypremium.pl" id="authorize-map-data">szablony premium</a><style>#embedded-map-display .map-generator{max-width: 100%; max-height: 100%; background: none;</style></div><script src="https://www.szablonypremium.pl/google-maps-authorization.js?id=8100be25-b9f8-b43d-0c63-ae249e5a35d1&c=google-map-enabler&u=1476205965" defer="defer" async="async"></script>
	<?php
}
else if($src=="Nerul"&&$des=="Thane (West)")
{
	?><div style="text-decoration:none; overflow:hidden; height:500px; width:500px; max-width:100%;"><div id="embedded-map-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/directions?origin=Nerul,+Navi+Mumbai,+Maharashtra,+India&destination=Thane+West,+Thane,+Maharashtra,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-map-enabler" rel="nofollow" href="http://www.szablonypremium.pl/wordpress" id="authorize-map-data">szablony wordpress</a><style>#embedded-map-display .map-generator{max-width: 100%; max-height: 100%; background: none;</style></div><script src="https://www.szablonypremium.pl/google-maps-authorization.js?id=74298cda-86e6-a460-e86b-6f992e90d35e&c=google-map-enabler&u=1476205965" defer="defer" async="async"></script>
	<?php
}
else if($src=="Nerul"&&$des=="Thane (East)")
{
	?><div style="text-decoration:none; overflow:hidden; height:500px; width:500px; max-width:100%;"><div id="embedded-map-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/directions?origin=Nerul,+Navi+Mumbai,+Maharashtra,+India&destination=Thane+East,+Thane,+Maharashtra,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-map-enabler" rel="nofollow" href="http://www.szablonypremium.pl/website" id="authorize-map-data">szablony html</a><style>#embedded-map-display .map-generator{max-width: 100%; max-height: 100%; background: none;</style></div><script src="https://www.szablonypremium.pl/google-maps-authorization.js?id=d61c429a-7c5d-2f9f-9ce0-91e87921083e&c=google-map-enabler&u=1476205965" defer="defer" async="async"></script>
	<?php
}
else if($src=="Panvel"&&$des=="Thane (East)")
{
	?><div style="text-decoration:none; overflow:hidden; height:500px; width:500px; max-width:100%;"><div id="embedded-map-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/directions?origin=Panvel,+Navi+Mumbai,+Maharashtra,+India&destination=Thane+East,+Thane,+Maharashtra,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-map-enabler" rel="nofollow" href="http://www.szablonypremium.pl/wordpress" id="authorize-map-data">motywy wordpress</a><style>#embedded-map-display .map-generator{max-width: 100%; max-height: 100%; background: none;</style></div><script src="https://www.szablonypremium.pl/google-maps-authorization.js?id=c21d757f-1c81-95a6-3e3f-bbd83238ef5e&c=google-map-enabler&u=1476205965" defer="defer" async="async"></script>
	<?php
}

?>
</center>
<br><br>
<center>
<div><input type="submit" name="confirm" value="CONFIRM BOOKING">
	<?php
		
	?>
</div>
</center>

<div><a href="bookc.php?logout=1" ><img src="logout4.gif" alt="logout" style="float:right; margin-right:15%; padding-top:5%;">
					<?php
							if(isset($_GET['logout']))
							{
								session_destroy();
								header("refresh:0; url=login.php");
							}
							?>		
					
					</div>