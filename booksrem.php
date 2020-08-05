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
if(isset($_POST['accn']))
{
	$one=$_POST['accn'];
	
	 
	$sql="DELETE FROM addbooks WHERE `accn no`='".$one."'";
	 if (mysqli_query($con, $sql)) 
	{
	    header("Location:final.html");
	} 
	else {
	    echo "Error updating record: " . mysqli_error($con);
	}
}
if(isset($_POST['isbn1']))
{
	$one=$_POST['isbn1'];

	$sql="DELETE FROM addbooks WHERE isbn='".$one."'";
	 if (mysqli_query($con, $sql)) 
	{
	    header("Location:final.html");
	} 
	else {
	    echo "Error updating record: " . mysqli_error($con);
	}
}
?>
<html>
<head>
<style>
.button {
  background-color: red;
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
<h1 align="center">UPDATE BOOK DETAIL</h1>
<body  bgcolor="#E6E6FA">		

  <form method="POST" action="#">

  <p align="center"><b>2.Enter Book Accession Number: <input type="number" name="accn"> </b></p>
  
<p  align="center"><button type="submit" class="button">Submit</button></p>  
</form>
</html>
<div align="center">
  OR
</div> 

  <p align="center"><b>1.Enter Book ISBN: <input type="text" name="isbn1" pattern="[0-9].{9,12}" > </b></p>
<p  align="center"><button type="submit" class="button">Submit</button></p>
</form>
</html>
