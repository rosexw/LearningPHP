<?php
require 'db.php';
require 'validation.php';


if (!$error) {
    $sql="INSERT INTO tbl_automobiles (car_model, weight, manufacture_year, sales_email)
    VALUES
    ('$car_model','$weight','$manufacture_year','$sales_email')";

    // run SQL command to update table of automobiles
    if ($conn->query($sql) === TRUE) {
        echo "One record has been added";
      } else {
        echo "Error updating table: " . $conn->error;
    }

?>

      <table>
        <thead style = 'font-weight: bold'>
          <td> Car Model </td>
          <td> Weight </td>
          <td> Manufacture Year </td>
        </thead>
        <tr>
          <td> <?php $car_model ?> </td>
          <td> <?php $weight ?> </td>
          <td> <?php $manufacture_year ?> </td>
          <td> <?php $sales_email ?> </td>
        </tr>
      </table>
      <p><a href='index.php'>Go Back to Home Page</a></p>

  <?php
  } else {
  ?>
      <p><a href='index.php'>Go Back</a><p>
  <?php
}


$conn->close();

?>
