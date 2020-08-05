<?php
$user="root";
$host="localhost";
$password="";
$db="ab";
  
$con=mysqli_connect($host,$user,$password);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db($con,  $db) or die("cannot select DB");
if(isset($_POST['id']))
{
	$one=$_POST['id'];
	 
	$sql="DELETE FROM faculty WHERE ID='".$one."'";
	 if (mysqli_query($con, $sql)) 
	{
	    header("Location:final.html");
	} 
	else {
	    echo "Error updating record: " . mysqli_error($con);
	}
}
?><html>
<head>
<style>
.button {
  background-color: #FF1493;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}	

</style>
</head>	

<h1 align="center">Enter details of the faculty</h1>
<body  bgcolor="#E6E6FA">		

  <form method="POST" action="#">
  <p align="center"><b>ID: <input type="number" name="id" required> </b></p>
<p  align="center"><button type="submit" class="button">Submit</button></p>
</form>
</html>
