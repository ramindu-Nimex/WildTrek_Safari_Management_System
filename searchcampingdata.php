<?php
   include 'connectionRamindu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Camping search data</title>
   <style>
      body {
         background-color: #1f242d;
         color: #a7a0a0;
      }
      
      table tr {
         text-align: center;
      }
   </style>
</head>
<body>
   <table border="1" width="100%">
      <?php
         if(isset($_POST['submit'])) {
            $search = $_POST['search'];

            $sql = "SELECT * FROM campreservation WHERE id LIKE '$search' or name LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);

            if($result) {
               if(mysqli_num_rows($result) > 0) {
                  echo '<thead>
                    <tr>
                    <th>Reservation ID</th>
                    <th>Full Name</th>
                    </tr></thead>';

                  while($row = mysqli_fetch_assoc($result)) {
                     echo '<tbody>
                    <tr>
                    <td><a href="searchDatacamp.php?data='.$row['id'].'">'.$row['id'].'</a></td>
                    <td>'.$row['name'].'</td>
                    </tr></tbody>';
                  }
               }
               else {
                  echo '<h2>Data not found</h2>';
               }
            }
         }
      ?>
   </table>
</body>
</html>