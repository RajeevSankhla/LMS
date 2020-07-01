 <?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `addbooks` WHERE CONCAT(`title`, `isbn`, `author`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `addbooks`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "ab");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
      <table border="10" style= "background-color:skyblue ; color: black; margin: 10x" >
        <style>
            table,tr,th,td
            {
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
    </head>
    <body>
        
        <form action="#" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
       
                <tr>
                    <th>Title</th>
                    <th>ISBN</th>
                    <th>Author</th>
                    <th>Type</th>
                    <th>Edition</th>
                    <th>Availability</th>

                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><font size=5><?php echo $row['title'];?></td>
                    <td><font size=5><?php echo $row['isbn'];?></td>
                    <td><font size=5><?php echo $row['author'];?></td>
                    <td><font size=5><?php echo $row['type'];?></td>
                    <td><font size=5><?php echo $row['edition'];?></td>
                    <td><font size=5><?php echo $row['copy'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>


