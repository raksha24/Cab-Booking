<?php
include 'connect.php';
session_start();
if(!isset($_SESSION['userid']))
{
  header('refresh:0; url=index1.html');
}
?>
<?php
$u1=$_SESSION['userid'];
$a1=$_SESSION['name'];
$a2=$_SESSION['img'];
$a3=$_SESSION['fare_total'];
$a4=$_SESSION['no'];
$chng="UPDATE vehicle SET vbook='0' WHERE vname='$a1'";
$uchng="UPDATE uregister SET ubook='0' WHERE userid='$u1'";
mysqli_query($connect, $chng);

mysqli_query($connect, $uchng);

$q1="UPDATE uregister SET ucar='0',ufare='0',uno='0',uimg='0' WHERE userid='$u1'";
mysqli_query($connect, $q1);

?>
<script type='text/javascript'>
	alert("THANKYOU! HOPE TO SEE YOU AGAIN!"); 
</script>
<?php
header("refresh:0; url=index1.html");
?>