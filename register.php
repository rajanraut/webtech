<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['submit']))
{
     $name=mysqli_escape_string($mysqli,$_POST['name']);
     $email=mysqli_escape_string($mysqli,$_POST['email']);
     $password=mysqli_escape_string($mysqli,$_POST['psw']);
     $re_password=mysqli_escape_string($mysqli,$_POST['psw-repeat']);
     $state=mysqli_escape_string($mysqli,$_POST['state']);
     $sex=mysqli_escape_string($mysqli,$_POST['sex']);
     $weight=mysqli_escape_string($mysqli,$_POST['weight']);
     $blood_grp=mysqli_escape_string($mysqli,$_POST['bloodgroup']);
     $day=mysqli_escape_string($mysqli,$_POST['day']);
     $month=mysqli_escape_string($mysqli,$_POST['month']);
     $year=mysqli_escape_string($mysqli,$_POST['year']);
     $mobnum=mysqli_escape_string($mysqli,$_POST['mobilenumber']);
      $day1=mysqli_escape_string($mysqli,$_POST['day1']);
     $month1=mysqli_escape_string($mysqli,$_POST['month1']);
     $year1=mysqli_escape_string($mysqli,$_POST['year1']);
     $result=mysqli_query($mysqli,"INSERT INTO register(name,email,password,re_password,state,sex,weight,blood_grp,day,month,year,mobnum,day1,month1,year1) VALUES('$name','$email','$password','$re_password','$state','$sex','$weight','$blood_grp','$day','$month','$year','$mobnum','$day1','$month1','$year1')");
     header("Location:register.htm");
}

?>
