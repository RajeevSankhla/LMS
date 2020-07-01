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
if(isset($_POST['accn1']))
{
	$a=$_POST['accn1'];
	$one=$_POST['edition'];
	$two=$_POST['pub'];
	$three=$_POST['cost'];
	$four=$_POST['copy'];
	 
	$sql="UPDATE addbooks SET edition='".$one."',publisher='".$two."',cost='".$three."',copy='".$four."' WHERE `accn no`='".$a."' ";
	 if (mysqli_query($con, $sql)) 
	{
	    header("Location:fbupdate.html");
	} 
	else {
	    echo "Error updating record: " . mysqli_error($con);
	}
}



if(isset($_POST['isbn1']))
{
	$b=$_POST['isbn1'];
	$one=$_POST['edition'];
	$two=$_POST['pub'];
	$three=$_POST['cost'];
	$four=$_POST['copy'];
	 
	$sql="UPDATE addbooks SET edition='".$one."',publisher='".$two."',cost='".$three."',copy='".$four."' WHERE isbn='".$b."' ";
	 if (mysqli_query($con, $sql)) 
	{
	    header("Location:fbupdate.html");
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
  background-color: green;
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

<h1 align="center">Enter Detail of the book</h1>
<body  bgcolor="#E6E6FA">		

  <form method="POST" action="#">
  <p align="center"><b>Enter Book Accession Number: <input type="number" name="accn1"> </b></p>
<div align="center">
  <b>Select Below Option To Perform Upadte Operation</b> 
</div>
  <p align="center"><b>Update Book Edition : <input type="text" name="edition"> </b></p>
  <p align="center"><b>Update Book Publisher : <input type="text" name="pub"> </b></p>
  <p align="center"><b>Update Book Cost: <input type="number" name="cost"> </b></p>
  <p align="center"><b>Update Book Copy : <input type="number" name="copy"> </b></p>
  
<p  align="center"><button type="submit" class="button">Submit</button></p>  
</form>
</html>
<div align="center">
  OR
</div> 

  <p align="center"><b>Enter Book ISBN: <input type="number" name="isbn1"> </b></p>
<div align="center">
  <b>Select Below Option To Perform Upadte Operation</b> 
</div>
  <p align="center"><b>Update Book Edition : <input type="text" name="edition"> </b></p>
  <p align="center"><b>Update Book Publisher : <input type="text" name="pub"> </b></p>
  <p align="center"><b>Update Book Cost: <input type="number" name="cost"> </b></p>
  <p align="center"><b>Update Book Copy : <input type="number" name="copy"> </b></p>
  
<p  align="center"><button type="submit" class="button">Submit</button></p>
</form>
</html>
