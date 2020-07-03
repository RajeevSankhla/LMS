 <?php 
session_start();
$user="root";
$host="localhost";
$password="";
$db="facultybook";
  
$con=mysqli_connect($host,$user,$password);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db($con,  $db) or die("cannot select DB");
if(isset($_POST['ID']))
{
        $_SESSION["rn1"] = $_POST['ID'];
	$un=$_POST['ID'];

	$sql="SELECT * FROM `$un` ";
	$result1  = mysqli_query($con, $sql);
	
	if(mysqli_num_rows($result1)==1)
	{

		header("Location:adminfetchfac.php" );
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
  <p align="center"><b>ID OF THE FACULTY: <input type="text" name="ID" required placeholder="Enter ID"> </b></p>

   <p  align="center"> 
	<button type="submit" class="button">Submit</button>
	 
</p>

</form> 
</body>
 </html>

