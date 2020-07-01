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
if(isset($_POST['user']))
{
        $_SESSION["id"] = $_POST['roll'];
	$uname=$_POST['user'];
	$password=$_POST['pass'];
	$sql="SELECT * FROM studentlogin WHERE Username='".$uname."' AND Password='".$password."' ";
	$result  = mysqli_query($con, $sql);
	
	if(mysqli_num_rows($result)==1)
	{
               // $_SESSION['username']=$uname;
		header("Location: sturecsrch.php" );
		exit();
  }
	else
	{
    		header("Location: wrongpass.html?uname=".$uname );
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
  <h3 align="center">Don't have an account? Contact to Librarian</h3>
 <p style="text-align:center;"><img align="middle" src="images/avatar.jpg" alt="avatar"  width="375" height="375" ></p> 
 <body  bgcolor="#E6E6FA">		

  <form method="POST" action="#">
  <p align="center"><b>Your RollNumber: <input type="text" name="roll" required> </b></p>
  <p align="center"><b>Username: <input type="text" name="user" required> </b></p>
<p align="center"><b>Password: <input type="password" name="pass" required> </b></p>

   <p  align="center"><b >  Login as</b> 
	<button type="submit" class="button">Student</button>
	 
</p>

</form> 
</body>
 </html>

