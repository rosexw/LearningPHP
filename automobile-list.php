  <table>
    <tr>
      <th>Automobile ID</th>
      <th>Car Model</th>
      <th>Weight</th>
      <th>Manufacture Year</th>
    </tr>

    <?php
    $select = "SELECT * from tbl_automobiles";

    if ($result = $conn->query($select)) {
    } else {
      echo "Error selecting: " . $conn->error;
    }


    while ($row = $result->fetch_array()) {
      echo '<tr>
              <td>'.$row["automobile_id"].'</td>
              <td>'.$row["car_model"].'</td>
              <td>'.$row["weight"].'</td>
              <td>'.$row["manufacture_year"].'</td>
              <td>
                <form action="automobile-edit.php" method="post">
                  <input type="hidden" name="id" value="'.$row["automobile_id"].'" />
                  <input type="submit" value="Edit"/>
                </form>
              </td>
              <td>
                <form action="automobile-delete.php" method="post">
                  <input type="hidden" name="id" value="'.$row["automobile_id"].'" />
                  <input type="submit" value="Delete"/>
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
