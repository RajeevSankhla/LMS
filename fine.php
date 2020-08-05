<?php
include'configure.php';
if(isset($_POST['roll']))
{
        $_SESSION["id"] = $_POST['roll'];

	$one=$_POST['roll'];
$sql=mysqli_query($conn,"select return_date,actual_return_date from `$one`");
while( $row = mysqli_fetch_assoc( $sql ) ){
              $date2=$row['return_date'];
              $date1=$row['actual_return_date'];
}

function dateDiffInDays($date1, $date2) 
{ 
	// Calulating the difference in timestamps 
	$diff = strtotime($date2) - strtotime($date1); 
	
	// 1 day = 24 hours 
	// 24 * 60 * 60 = 86400 seconds 
	return abs(round($diff / 86400)); 
} 
// Function call to find date difference 
$dateDiff = dateDiffInDays($date1, $date2); 

// Display the result 
printf("Total: " . $dateDiff . " Days\n");
$fine=$dateDiff*2;
printf("Fine: " . $fine . " Rupees ");
 }
mysqli_close($conn);
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
 <p style="text-align:center;"><img align="middle" src="images/calculator.png" alt="avatar"  width=375" height="500" ></p> 
 <body  bgcolor="#E6E6FA">		

  <form method="POST" action="#">
  <p align="center"><b>RollNumber: <input type="number" name="roll" style="font-size:16pt;" required> </b></p>
  <p align="center"><button type="submit" class="button">Submit</button></p>

</form> 
</body>
 </html>

