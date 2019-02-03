<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['submit']))
{
     $name=mysqli_escape_string($mysqli,$_POST['name']);
     $mobile_num=mysqli_escape_string($mysqli,$_POST['mobilenumber']);
     $email=mysqli_escape_string($mysqli,$_POST['email']);
     $address=mysqli_escape_string($mysqli,$_POST['address']);
     $result=mysqli_query($mysqli,"INSERT INTO blood_bank(name,mobile_num,email,address) VALUES('$name','$mobile_num','$email','$address')");
     header("Location:bloodbank.htm");
}

?>
