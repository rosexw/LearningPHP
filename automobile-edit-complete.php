<?php
  require 'db.php';
  require 'validation.php';


    if (!$error) {
      $sql = "UPDATE tbl_automobiles
              SET car_model = '" . $car_model . "',
                  weight = " . $weight . ",
                  manufacture_year = '" . $manufacture_year . "'
              WHERE automobile_id = " . $automobile_id . ";";

        // run SQL command to update table of automobiles
        if ($conn->query($sql) === TRUE) {
            echo "Successful";
        } else {
            echo "Error updating table: " . $conn->error;
        }

        echo "
          <table>
          <thead style = 'font-weight: bold'>
            <td> Automobile ID </td>
            <td> Car Model </td>
            <td> Weight </td>
            <td> Manufacture Year </td>
          </thead>
          <tr>
            <td>" . $automobile_id . "</td>
            <td>" . $car_model . "</td>
            <td>" . $weight . "</td>
            <td>" . $manufacture_year . "</td>
          </tr>
        </table>

        <a href='index.php'>Back to Home</a>";
      } else {
      echo "
        Please enter all fields
        <p><a href='automobile-edit.php'>Go Back</a></p>";
    };

 ?>
