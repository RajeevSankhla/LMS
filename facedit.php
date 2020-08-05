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
        $four=$_POST['dept'];
	 
	$sql="INSERT INTO faculty (id,Username,Password,department) VALUES('$one','$two','$three','$four')";
	 if (mysqli_query($con, $sql)) 
	{
	    header("Location:final.html");
	$user="root";
$host="localhost";
$password="";
$db="facultybook";
  
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
<head>
<style>
.button {
  background-color:#00FF00;
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
  <p align="center"><b>ID: <input type="text" name="roll" pattern="[0-9].{2,7}" required> </b></p>
  <p align="center"><b>Username: <input type="text" name="user" pattern="[A-Za-z ]+" required> </b></p>
<p align="center"><b>Password: <input type="text" name="pass" pattern="[A-Za-z0-9].{4,12}" required> </b></p>
<p align="center"><b>Department: <input type="text" name="dept" required> </b></p>
 <p  align="center"><button type="submit" class="button">Submit</button></p>
</form>
</html>
