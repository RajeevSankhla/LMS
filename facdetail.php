</html> 
<head>
      <title>Faculty Records Table</title>
    </head>
    <body>
<?php
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


      //execute the SQL query and return records
      $result = mysqli_query($con,"SELECT * FROM faculty");
      ?>


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
          <th>ID</th>
          <th>Name</th>
          <th>Password</th>
          <th>Department</th>

        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>  <font size=5> {$row['id']}</td>
              <td><font size=5>{$row['username']}</td>
              <td><font size=5>{$row['password']}</td>
              <td><font size=5>{$row['department']}</td>


            </tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php mysqli_close($con); ?>
    </body>
</html>
