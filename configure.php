<?php
$user="root";
$host="localhost";
$password="";
$db="student";
  
$conn=mysqli_connect($host,$user,$password);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db($conn,  $db) or die("cannot select DB");
?>
