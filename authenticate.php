<html>
<head>

</head>
<body>


<?php
include 'connect.php';

session_start();
if(!isset($_SESSION['userid']))
{
  header('refresh:0; url=index1.html');
}

$userid=$_POST['uid'];
$password=$_POST['password'];
$_SESSION['userid']=$userid;

$sql_users="SELECT * FROM uregister WHERE userid='$userid'";
$result_users=mysqli_query($connect,$sql_users);
////echo $sql_users;

$row=mysqli_fetch_array($result_users);

/*if field contains any value */
///if((!$row['ucar'])&&(!$row['ufare'])&&(!$row['uno'])&&(!$row['uimg']))
//echo $row['ubook'];
if($row['ubook'] > 0)
{
	header("refresh:0; url=book2.php");
}
else
{
if(mysqli_num_rows($result_users)<= 0)
{
	/* for admin */ 
	$ad1="SELECT * FROM admin WHERE adminid='$userid' AND password='$password'";
	$res_a=mysqli_query($connect,$ad1);
	if(mysqli_num_rows($res_a)<=0)
	{
		echo "NO user found with such email ID and Password";
	}
	else
	{
		$row_a=mysqli_fetch_array($res_a);
		
		$_SESSION['adid']=$userid;
		$_SESSION['adname']=$row_a['aname'];
		header("refresh:0; url=admin1.php");
	}
}
else	/*for user*/
{	$row_users=mysqli_fetch_array($result_users);
	
	
	$_SESSION['userid'] = $userid;
	$_SESSION['name']=$row_users['name']; 
	header("refresh:0; url=book1.php");

}
}
?>

</body>
</html>