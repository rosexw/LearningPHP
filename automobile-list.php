
<h1>All the Cars</h1>
<?php

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // sql to create table if it doesn't exist
  $sql = "CREATE TABLE IF NOT EXISTS `tbl_automobiles` (
    automobile_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    car_model VARCHAR(30) NOT NULL,
    weight DECIMAL NOT NULL,
    manufacture_year DATE
  )";

  if ($conn->query($sql) === TRUE) {
      // echo "Table tbl_automobiles created successfully";
  } else {
      echo "Error creating table: " . $conn->error;
  }
  //adding values to tbl_automobiles list
  //
  // $insert = "IF (EXISTS (SELECT * FROM tbl_automobiles))
  //   INSERT INTO tbl_automobiles (car_model, weight, manufacture_year)
  //   VALUES ('Toyota Camry', '3190', '2009-01-01'), ('Honda Civic', '3045', '2016-02-03')";
  // if ($conn->query($insert) === TRUE) {
  //     echo "Inserted successfully";
  // } else {
  //     echo "Error inserting: " . $conn->error;
  // }

  ?>

  <table>
    <tr>
      <th>Car Model</th>
      <th>Weight</th>
      <th>Manufacture Year</th>
    </tr>

    <?php
    $select = "SELECT * from tbl_automobiles";
    if ($result = $conn->query($select)) {
      // echo "Got results";
    } else {
      echo "Error selecting: " . $conn->error;
    }


    while ($row = $result->fetch_array()) {
      echo '<tr>
              <td>'.$row["car_model"].'</td>
              <td>'.$row["weight"].'</td>
              <td>'.$row["manufacture_year"].'</td>
              <td>
                <form action="automobile-edit.php" method="post/get">
                  <input type="hidden" name="id" value="'.$row["automobile_id"].'" />
                  <input type="submit" value="Edit"/>
                </form>
              </td>
            </tr>';
    }

    ?>
  </table>

<?php

  // free result set
  $result->free();

  $conn->close();
?>
