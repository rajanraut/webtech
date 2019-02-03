<?php
include_once("config.php");
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$sql = "DELETE FROM register where id='$id'";
	$result = mysqli_query($mysqli,"DELETE  FROM register where id='$id' ");

	if(!$result){
		die('Error:'. mysqli_error($conn));
	}
	header('Location: adminpage.php');
}
?>
