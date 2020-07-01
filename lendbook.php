  <?php
session_start();
$a=$_SESSION["id"];

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

include 'configure.php';
$res = mysqli_query($conn,"select count(1) FROM `$a`");
$row = mysqli_fetch_array($res);

$total = $row[0];
echo "Total rows: " . $total;
if($total==6)
{
echo "<strong>"."YOU HAVE ALREADY TAKEN 6 BOOKS SO YOU CAN'T TAKE ANYMORE PLEASE RETURN BOOKS TO ISSUE BOOKS"."</strong>";
}
if($total<6)
{

if(isset($_POST['isbn']))
{
$_SESSION["transisbn"] = $_POST['isbn'];
$one=$_POST['isbn'];

      $result = mysqli_query($con,"SELECT title,author,edition,type FROM addbooks where isbn=$one");
     
while( $row = mysqli_fetch_assoc( $result ) ){
              $two=$row['title'];
              $three=$row['author'];
             $four= $row['edition'];
             $five= $row['type'];
}
if($five=='T' or $five=='t')
{
$d=strtotime("+45 Days");
$z=date("Y/m/d", $d);
}
else
{
$d=strtotime("+15 Days");
$z=date("Y/m/d", $d);
}
$todaydate=date("Y/m/d");
include 'configure.php';
        
   $sql="INSERT INTO `$a` (isbn,Book_Title,Author,Edition,Type,issue_date,return_date) VALUES('$one','$two','$three','$four','$five','$todaydate','$z')";
if (mysqli_query($conn, $sql)) 
	{

            
	    header("Location:copychange.php");
	} 
	else {
	    echo "Error updating record: " . mysqli_error($conn);
            echo "<br>";
           echo ' <img src="images/error.svg" width=200px lenght=200px /> ';
            echo '<span style="color:red; font-size: 50px;"> "<strong>  You Have Already taken This Book </strong>"</span>';

	}

}
   }
   mysqli_close($con);
?>
<html>
<h1 align="center">Enter details of the Book For Issue</h1>
<body  bgcolor="#E6E6FA">		

  <form method="POST" action="#">
  <p align="center"><b>ISBN_NUMBER: <input type="int" name="isbn" required /> </b></p>


<p  align="center"><button type="submit">Submit</button></p>
</form>
</html>
