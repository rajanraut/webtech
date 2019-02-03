<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['submit']))
{
     $name=mysqli_escape_string($mysqli,$_POST['name']);
     $email=mysqli_escape_string($mysqli,$_POST['email']);
     $subject=mysqli_escape_string($mysqli,$_POST['subject']);
     $message=mysqli_escape_string($mysqli,$_POST['message']);
     $result=mysqli_query($mysqli,"INSERT INTO contactus(name,email,subject,message) VALUES('$name','$email','$subject','$message')");
     header("Location:contactus.htm");
}

?>