<?php
session_start();
$a=$_SESSION["fid"];
include 'configfaculty.php';
if(isset($_POST['isbn']))
{
$one=$_POST['isbn'];
$csql = mysqli_query($connection,"SELECT TYPE,actual_return_date FROM `$a` where isbn=$one");
while( $rows = mysqli_fetch_assoc( $csql ) ){
              $tw=$rows['TYPE'];
}
$todaydate=date("Y/m/d");
$dates=date_create("0000-00-00");
$w=date_format($dates,"Y/m/d");

if($tw=='T' or $tw=='t')
{
$d=strtotime("+45 Days");
$z=date("Y/m/d", $d);



/* $sql="UPDATE addbooks SET edition='".$one."',publisher='".$two."',cost='".$three."',copy='".$four."' WHERE `accn no`='".$a."' ";
	 if (mysqli_query($con, $sql)) 
	{
	    header("Location:fbupdate.html");
	} 
	else {
	    echo "Error updating record: " . mysqli_error($con);
	}
} */
	$result="UPDATE `$a` SET issue_date='".$todaydate."',return_date='".$z."' WHERE `isbn`='".$one."'";
        if (mysqli_query($connection, $result)) 
	{
        header("Location:final.html");
        } 
	else {
	    echo "Error updating record: " . mysqli_error($connection);
	    }
}
else
{
$d=strtotime("+15 Days");
$z=date("Y/m/d", $d);


$todaydate=date("Y/m/d");

	$result="UPDATE `$a` SET issue_date='".$todaydate."',return_date='".$z."' WHERE `isbn`='".$one."'";
        if (mysqli_query($connection, $result)) 
	{
        header("Location:final.html");
        } 
	else {
	    echo "Error updating record: " . mysqli_error($connection);
	    }
}
}


   mysqli_close($connection);
?>
<html>
  <h1 align="center">Reissue Book</h1> 
 <p style="text-align:center;"><img align="middle" src="images/reissue.jpg" alt="avatar"  width="375" height="375" ></p> 
 <body  bgcolor="#E6E6FA">		

  <form method="POST" action="#">
  <p align="center"><b>Enter ISBN: <input type="int" name="isbn" required> </b></p>
	<p  align="center"><button type="submit">Submit</button></p>
	 
</p>

</form> 
</body>
 </html>

