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
if(isset($_POST['accn2'])){
if(isset($_POST['accn2']))
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
}
elseif(isset($_POST['isbn2'])){

if(isset($_POST['isbn2']))
{
	$b=$_POST['accn1'];
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
<div align="center">
<p>Please select your input:</p>
  <input type="radio" id="isbn2" name="isbn2" value="isbn2">
  <label for="isbn2"> ISBN</label><br>
  <input type="radio" id="accn2" name="accn2" value="accn2">
  <label for="accn2">Book Accession Number</label><br>
</div>
  <p align="center"><b>Please input your selected input value: <input type="number" name="accn1"> </b></p>
<div align="center">
  <b>Enter value into Below given Option To Perform Upadte Operation</b> 
</div>
  <p align="center"><b>Book Edition : <input type="text" name="edition"> </b></p>
  <p align="center"><b>Book Publisher : <input type="text" name="pub"> </b></p>
  <p align="center"><b>Book Cost: <input type="text" name="cost" pattern="[0-9].{0,}"> </b></p>
  <p align="center"><b>Book Copy : <input type="text" name="copy" pattern="[0-9].{0,}"> </b></p>
  
<p  align="center"><button type="submit" class="button">Submit</button></p>  
</form>
</html>
