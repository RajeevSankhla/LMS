  <?php
session_start();
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
if(isset($_POST['idfac']))
{
        $_SESSION["fid"] = $_POST['idfac'];
	$uname=$_POST['idfac'];
	$password=$_POST['pass'];
	$sql="SELECT * FROM faculty WHERE id='".$uname."' AND password='".$password."' ";
	$result  = mysqli_query($con, $sql);
	
	if(mysqli_num_rows($result)==1)
	{
		 header("Location: facultyhome.php" );
		exit();
	}
	else
	{
                 header("Location: wrongpassfac.html" );
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
  <h1 align="center">Login Page</h1> 
 <p style="text-align:center;"><img align="middle" src="images/faculty1.svg" alt="avatar"  width="375" height="375" ></p>
 <body  bgcolor="#E6E6FA">		

  <form method="POST" action="#">
  <p align="center"><b>ID: <input type="number" name="idfac" > </b></p>
  <p align="center"><b>Password: <input type="password" name="pass"> </b></p>

  <p  align="center"><b >  Login as</b> 
	<button type="submit" class="button">Faculty</button>
  </p>

</form> 
</body>
 </html>

