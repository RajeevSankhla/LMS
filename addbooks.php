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
if(isset($_POST['isbn']) && isset($_POST['title']))
{
	$one=$_POST['isbn'];
	$two=$_POST['title'];
	$three=$_POST['author'];
	$four=$_POST['edition'];
	$five=$_POST['type'];
	$six=$_POST['publisher'];
	$seven=$_POST['cost'];
	$eight=$_POST['copy'];
	$sql="INSERT INTO
addbooks(isbn,title,author,edition,type,publisher,cost,copy) VALUES('$one','$two','$three','$four','$five','$six','$seven','$eight')";
	 if (mysqli_query($con, $sql)) 
	{
             
	    header("Location:final.html");

	} 
	else {
	    echo "Error updating record: " . mysqli_error($con);
	}
}
   mysqli_close($con);
?>
<html>
<head>
<style>
.button {
  background-color: #4B0082;
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
<h1 align="center">Enter details of the Book</h1>
<body  bgcolor="#E6E6FA">		

  <form method="POST" action="#">
  <p align="center"><b>ISBN: <input type="text" name="isbn" pattern="[0-9].{9,12}" required /> </b></p>
  <p align="center"><b>TITLE: <input type="text" name="title" pattern="[A-Z a-z]+" required> </b></p>
<p align="center"><b>AUTHOR: <input type="text" name="author" pattern="[A-Z a-z]+" required> </b></p>
<p align="center"><b>EDITION: <input type="text" name="edition" pattern="[0-9].{0,1}" required> </b></p>
<p align="center"><b>TYPE:<select name="type">
  <option value="T">T</option>
  <option value="R">R</option></select></b></p>

<p align="center"><b>PUBLISHER: <input type="text" name="publisher" required> </b></p>
<p align="center"><b>COST: <input type="text" name="cost" pattern="[0-9].{0,}" required> </b></p>
<p align="center"><b>COPIES OF THE BOOK: <input type="text" name="copy" pattern="[0-9].{0,}" required> </b></p>
<p  align="center"><button type="submit" class="button">Submit</button></p>
</form>
</html>
