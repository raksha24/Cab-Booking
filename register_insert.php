
<?php
include 'connect.php';

$uname=$_POST['username'];
$add=$_POST['address'];
$email=$_POST['email'];
$phone=$_POST['mnum'];
$userid=$_POST['uid'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if($password==$cpassword){
$sql_users= "INSERT INTO uregister (name,address,email,mobno,userid,password) values ('$uname','$add','$email','$phone','$userid','$password')";
if(mysqli_query($connect,$sql_users))
{
	?>

<script type='text/javascript'>
	alert("SUCCESSFULLY REGISTERED"); 
</script>

<?php 	header("refresh:0; url=login.php");

}
}
else
{
	echo "Registration Unsuccessful! 
	PASSWORD INCORRECT! Please TRY again!";
}

?>
