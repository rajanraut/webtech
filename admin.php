<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css\style.css">
</head>
<body>
	<form action="admin.php" method="post">
   <table align="center" width="50%">
  <thead><h1 align="center"><u>LOGIN</u></h1></thead>
  <hr>
    <tr><td>UserName</td><td><input type="text" placeholder="username" name='username'required></td></tr>
    <tr><td>Password</td><td><input type="password" placeholder="password" name="password" required></td></tr>
    <tr><td><button type="submit" value="submit" name="submit" class="submitbtn">LOGIN</button></td></tr>
  </table>
</form>
<?php
  include_once("config.php");
   session_start();

   if(isset($_POST['submit'])) {

      $username = mysqli_real_escape_string($mysqli,$_POST['username']);
      $password = mysqli_real_escape_string($mysqli,$_POST['password']);

      $sql = "SELECT id FROM admin WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($mysqli,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);


      if($count == 1) {
         //session_register("username");
         $_SESSION['login_user'] = $username;

         header("location: adminpage.php");
      }else {
      	 $error = "Your Login Name or Password is invalid";
      	 echo "<script type='text/javascript'>alert('$error');</script>";

      }
   }
?>
</body>
</html>
