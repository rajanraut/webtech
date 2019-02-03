<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['submit']))
{
     $name=mysqli_escape_string($mysqli,$_POST['name']);
     $email=mysqli_escape_string($mysqli,$_POST['email']);
      $exp=mysqli_escape_string($mysqli,$_POST['experience']);


     $result=mysqli_query($mysqli,"INSERT INTO share_exp(name,email,exp1) VALUES('$name','$email','$exp')");
     header("Location:share-experience.htm");
}
?>
