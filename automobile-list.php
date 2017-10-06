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
                  <input type="hidden" name="automobile_id" value="'.$row["automobile_id"].'" />
                  <input type="hidden" name="car_model" value="'.$row["car_model"].'" />
                  <input type="hidden" name="weight" value="'.$row["weight"].'" />
                  <input type="hidden" name="manufacture_year" value="'.$row["manufacture_year"].'" />
                  <input type="submit" value="Edit"/>
                </form>
              </td>
              <td>
                <form action="automobile-delete.php" method="post">
                  <input type="hidden" name="automobile_id" value="'.$row["automobile_id"].'" />
                  <input type="hidden" name="car_model" value="'.$row["car_model"].'" />
                  <input type="hidden" name="weight" value="'.$row["weight"].'" />
                  <input type="hidden" name="manufacture_year" value="'.$row["manufacture_year"].'" />
                  <input type="submit" value="Delete"/>
                </form>
              </td>
            </tr>';
    }

    echo '<br/>
          <tr>
            <form action="automobile-new.php" method="post">
              <td><input type="hidden" name="automobile_id" />' . $_POST["automobile_id"] .'</td>
              <td><input type="text" name="car_model" /></td>
              <td><input type="text" name="weight" /></td>
              <td><input type="text" name="manufacture_year" /></td>
              <td></td>
              <td><input type="submit" value="Add New Car"/></td>
            </form>
          </tr>';
    ?>
  </table>


              <!-- <td>'.$_POST["automobile_id"].'</td> -->
<?php

  // free result set
  $result->free();

  $conn->close();
?>
