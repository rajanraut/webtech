<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['submit']))
{
     $name=mysqli_escape_string($mysqli,$_POST['name']);
     $email=mysqli_escape_string($mysqli,$_POST['email']);
      $name1=mysqli_escape_string($mysqli,$_POST['name1']);
     $email1=mysqli_escape_string($mysqli,$_POST['email1']);
     $name2=mysqli_escape_string($mysqli,$_POST['name2']);
     $email2=mysqli_escape_string($mysqli,$_POST['email2']);
    
     $result=mysqli_query($mysqli,"INSERT INTO refer(name,email,name1,email1,name2,email2) VALUES('$name','$email','$name1','$email1','$name2','$email2')");
     header("Location:refer.htm");
}

?>