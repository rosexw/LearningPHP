
<h1>All the Cars</h1>


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
