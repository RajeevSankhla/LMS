</html> 
<head>
      <title>Books Record Table</title>
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
      $result = mysqli_query($con,"SELECT * FROM addbooks");
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
          <th>ACCESSION NUMBER</th>
          <th>ISBN</th>
          <th>TITLE</th>
          <th>AUTHOR</th>
          <th>EDITION</th>
          <th>PUBLISHER</th>
          <th>TYPE</th>
          <th>COST</th>
          <th>COPY</th>

        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>  <font size=5> {$row['accn no']}</td>
              <td><font size=5>{$row['isbn']}</td>
              <td><font size=5>{$row['title']}</td>
              <td><font size=5>{$row['author']}</td>
              <td><font size=5>{$row['edition']}</td>
              <td><font size=5>{$row['publisher']}</td>
              <td><font size=5>{$row['type']}</td>
              <td><font size=5>{$row['cost']}</td>
              <td><font size=5>{$row['copy']}</td>
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php mysqli_close($con); ?>
    </body>
</html>
