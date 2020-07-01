</html> 
<head>
      <title>Student Detail Table</title>
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
      $result = mysqli_query($con,"SELECT * FROM studentlogin");
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
          <th>Roll Number</th>
          <th>Name</th>
          <th>Password</th>
          <th>Semester</th>
          <th>Department</th>

        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['Rollno']}</td>
              <td>{$row['Username']}</td>
              <td>{$row['Password']}</td>
              <td>{$row['semester']}</td>
              <td>{$row['Department']}</td>

            </tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php mysqli_close($con); ?>
    </body>
</html>
