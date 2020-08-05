 <?php 
session_start();
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
if(isset($_POST['rollno']))
{
        $_SESSION["rn"] = $_POST['rollno'];
	$un=$_POST['rollno'];

	$sql="SELECT * FROM `$un` ";
	$result  = mysqli_query($con, $sql);
	
	if(mysqli_num_rows($result)==1)
	{

		header("Location:adminfetch.php" );
		exit();
  }
	else
	{
        echo"Entered Data Is Wrong";
		exit();
	}
 }
 ?>
<html>
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
  
 <body  bgcolor="#E6E6FA">		

  <form method="POST" action="#">
  <p align="center"><b>RollNumber: <input type="text" name="rollno" pattern="[0-9].{7}" required placeholder="Enter Roll Number"> </b></p>

   <p  align="center"> 
	<button type="submit" class="button">Submit</button>
	 
</p>

</form> 
</body>
 </html>
