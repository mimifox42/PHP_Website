<?php 
$id = $_GET['rn'];
include("connection.php");

$data = mysqli_query($conn, "delete from `recipe_info` where id = '$id'");


if($data){
	echo "<font color = 'green'>Record Deleted from Database";
}
else{
	echo
	"<font color = 'red'>Failed to delete record from Database";
}
?>