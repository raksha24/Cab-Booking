<?php
include 'connect.php';

session_start();
if(!isset($_SESSION['userid']))
{
  header('refresh:0; url=index1.html');
}

$uname=$_POST['username'];
$add=$_POST['address'];
$email=$_POST['email'];
$phone=$_POST['mnum'];
$userid=$_POST['uid'];
$password=$_POST['password'];

$sql_users= "DELETE FROM uregister WHERE userid='$userid' AND password='$password'";
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