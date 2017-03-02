<?php
include 'connect.php';
session_start();
if(!isset($_SESSION['userid']))
{
  header('refresh:0; url=index1.html');
}

$vname=$_POST['vname'];
$vno=$_POST['vnum'];
$vnp=$_POST['vnp'];
$vcf=$_POST['cf'];

$sql_users= "INSERT INTO vehicle (vname,vno,vpassenger,vfare) values ('$vname','$vno','$vnp','$vcf')";
if(mysqli_query($connect,$sql_users)<=0)
{
	echo "Registration Unsuccessful!";
	
}
else
{
	?>

<script type='text/javascript'>
	alert("SUCCESSFULLY REGISTERED"); 
</script>

<?php 	header("refresh:0; url=admin1.php");
}




?>