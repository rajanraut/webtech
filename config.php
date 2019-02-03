<?php
//mysql_connect('databasehost','username','password')
$conn=mysqli_connect("localhost","root") or die("cannot connect");
@mysqli_select_db("bloodbank",$conn);
/**
mysql_connect is depreciated 
using mysqli_connect instead
*/
$databaseHost='localhost';
$databaseName='bloodbank';
$databaseUsername='root';
$databasePassword='';
$mysqli=mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
?>