<!DOCTYPE html>
<html>
<head>
  <title>DonorInformation</title>
</head>
<body>
<?php
include_once("config.php");
   $result = mysqli_query($mysqli,"SELECT * FROM register");
if ($result->num_rows > 0){
  echo "The Results Are<br>";
  echo "<table border='1' width='100%'>
<tr bgcolor='lightblue'>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>Repeat Password</th>
<th>State</th>
<th>Sex</th>
<th>Weight</th>
<th>Blood Group</th>
<th>day</th>
<th>month</th>
<th>year</th>
<th>Mobile Number</th>
<th>day1</th>
<th>month1</th>
<th>year1</th>

</tr>";
    while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "<td>" . $row['re_password'] . "</td>";
  echo "<td>" . $row['state'] . "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>" . $row['weight'] . "</td>";
  echo "<td>" . $row['blood_grp'] . "</td>";
  echo "<td>" . $row['day'] . "</td>";
  echo "<td>" . $row['month'] . "</td>";
  echo "<td>" . $row['year'] . "</td>";
  echo "<td>" . $row['mobnum'] . "</td>";
  echo "<td>" . $row['day1'] . "</td>";
  echo "<td>" . $row['month1'] . "</td>";
  echo "<td>" . $row['year1'] . "</td>";
  echo '<td><a  href="delete.php?id='.$row['id'].'">Delete</a>';
  echo '<td><a  href="update.php?id='.$row['id'].'">Update</a>';
  echo "</tr>";
  }
echo "</table>";
} else {
    echo "No  data are available";
}
?>
</body>
</html>
