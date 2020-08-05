<?php
session_start();
include'conn.php';
$ch=$_SESSION["bookid"];
echo $ch;
      $asql = mysqli_query($conn,"SELECT copy FROM addbooks where isbn=$ch");
while( $rowss = mysqli_fetch_assoc( $asql ) ){
              $t=$rowss['copy'];
echo $t;
$change=$t+1;
$uasql="update addbooks set copy='".$change."' where isbn=$ch";
if (mysqli_query($conn, $uasql)) 
	{
	    header("Location:final.html");
	} 
	else {
	    echo "Error updating record: " . mysqli_error($conn);
	}


}
   mysqli_close($conn);
?>
