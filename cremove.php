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

$sql_users= "DELETE FROM vehicle WHERE vname='$vname' AND vno='$vno'";
if(mysqli_query($connect,$sql_users)<=0)
{
	echo "Deletion Unsuccessful!";
	
}
else
{
	?>

<script type='text/javascript'>
	alert("SUCCESSFULLY DELETED ENTRY"); 
</script>

<?php 	header("refresh:0; url=admin1.php");
}

?>