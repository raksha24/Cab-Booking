<?php
include 'connect.php';
$sql_images="select * from vimage";
$result=mysqli_query($connect,$sql_images);

echo "<table>";

while($row=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td><br>"; ?> <img src="<?php echo row["imgpath"];?>" height="100" width="100"> <?php echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>"; echo $row["imgpath"]; echo "</td>";
	echo "</tr>";

echo "</table>"	;
}


?>