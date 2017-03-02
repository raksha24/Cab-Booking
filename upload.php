<?php
include 'connect.php';
$imagename=$_POST['imagename'];


$sql_upload="insert into vimage (imgpath) values ('$imagename')";
mysqli_query($connect,$sql_upload);
?>