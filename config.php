<?php
$user="root";
$host="localhost";
$password="";
$db="student";
  
$con=mysqli_connect($host,$user,$password);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db($con,  $db) or die("cannot select DB");
if(isset($_POST['roll']))
{
	$one=$_POST['roll'];
	 
	      $result ="SELECT * FROM `$one`";
}
?>
