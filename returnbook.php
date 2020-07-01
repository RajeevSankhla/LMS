<?php
session_start();
$a=$_SESSION["id"];
$todaydate=date("Y/m/d");
include 'configure.php';


if(isset($_POST['isbn']))
{  $_SESSION["bookid"] = $_POST['isbn'];
	$one=$_POST['isbn'];

	$result="delete from `$a` WHERE `isbn`='".$one."'";


	    
	 if (mysqli_query($conn, $result)) 
	{

	    header("Location:copyadd.php");

	} 
	else {
	    echo "Error updating record: " . mysqli_error($conn);
	}
}
   mysqli_close($conn);
?>
<html>
  <h1 align="center">Return Book</h1> 
 <p style="text-align:center;"><img align="middle" src="images/avatar.jpg" alt="avatar"  width="375" height="375" ></p> 
 <body  bgcolor="#E6E6FA">		

  <form method="POST" action="#">
  <p align="center"><b>Enter ISBN: <input type="int" name="isbn" required> </b></p>
	<p  align="center"><button type="submit">Submit</button></p>
	 
</p>

</form> 
</body>
 </html>

