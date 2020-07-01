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
if(isset($_POST['roll']))
{
	$one=$_POST['roll'];
	$two=$_POST['user'];
	$three=$_POST['pass'];
	$four=$_POST['sem'];
	$five=$_POST['dept'];
	$sql="INSERT INTO studentlogin  (Rollno,Username,Password,Semester,Department) VALUES('$one','$two','$three','$four','$five')";

	  if (mysqli_query($con, $sql)) 
	{
	    header("Location:final.html");
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
// sql to create table
$sql = "CREATE TABLE `" . $one . "`  (
isbn int primary key NOT NULL ,
Book_Title VARCHAR(30) NOT NULL,
TYPE Text NOT NULL,
Edition VARCHAR(10) NOT NULL,
Author VARCHAR(30) NOT NULL,
issue_date date,
return_date date
)";
if (mysqli_query($conn, $sql)) 
	{
	        echo "New Table created successfully";;
	} 
	else {
	    echo "Error creating new record: " . mysqli_error($conn);
	}
}
}

?>
<html>
<h1 align="center">Enter details of the student</h1>
<body  bgcolor="#E6E6FA">
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

  <form method="POST" action="#">
  <p align="center"><b>Roll no.: <input type="number" name="roll" required> </b></p>
  <p align="center"><b>Username: <input type="text" name="user" required> </b></p>
<p align="center"><b>Password: <input type="password" name="pass" required> </b></p>
<p align="center"><b>Semester: <input type="number" name="sem" required> </b></p>
<p align="center"><b>Department: <input type="text" name="dept" required> </b></p>
<p  align="center"><button type="submit" class="button">Submit</button></p>
</form>
</html> 





