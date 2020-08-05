<?php
session_start();
include'conn.php';
$c=$_SESSION["transisbn"];
      $csql = mysqli_query($conn,"SELECT copy FROM addbooks where isbn=$c");
while( $rows = mysqli_fetch_assoc( $csql ) ){
              $tw=$rows['copy'];
//$csql="select copy from addbooks where isbn=$c";
$change=$tw-1;
$usql="update addbooks set copy='".$change."' where isbn=$c";
if (mysqli_query($conn, $usql)) 
	{
	    header("Location:final.html");
	} 
	else {
	    echo "Error updating record: " . mysqli_error($conn);
	}


}
   mysqli_close($conn);
?>
