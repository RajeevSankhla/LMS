
<?php
session_start();
echo "<strong>".$_SESSION["id"]."</strong>";
$one=$_SESSION["id"];
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

	 
	     // $result ="SELECT * FROM `$_SESSION["favcolor"];`";
      $result = mysqli_query($con,"SELECT * FROM  `$one`");
       
?>
<html>
<body>


<table border="10" style= "background-color:skyblue ; color: black; margin: 10x" >
<style>
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
  height: 50px;
}
</style>
      <thead>
        <tr>
          <th>Title</th>
          <th>Type</th>
          <th>Edition</th>
          <th>Author</th>
          <th>Issue date</th>
          <th>Return_date</th>


        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc($result) ){
            echo
            "<tr>
              <td>  <font size=5> {$row['Book_Title']}</td>
              <td><font size=5>{$row['TYPE']}</td>
              <td><font size=5>{$row['Edition']}</td>
              <td><font size=5>{$row['Author']}</td>
              <td><font size=5>{$row['issue_date']}</td>
              <td><font size=5>{$row['return_date']}</td>

            </tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php mysqli_close($con); ?>
    </body>
</html>

