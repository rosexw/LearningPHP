<?php
require 'db.php';

$car_model    = htmlspecialchars($_POST['car_model']);
$weight   = htmlspecialchars($_POST['weight']);
$manufacture_year = htmlspecialchars($_POST['manufacture_year']);

// Required field names
$required = array('car_model', 'weight', 'manufacture_year');

$sql="INSERT INTO tbl_automobiles (car_model, weight, manufacture_year)
VALUES
('$car_model','$weight','$manufacture_year')";

// run SQL command to update table of automobiles
if ($conn->query($sql) === TRUE) {
    echo "One record has been added";
} else {
    echo "Error updating table: " . $conn->error;
}

$conn->close();

?>

<table>
  <thead style = "font-weight: bold">
    <td> Car Model </td>
    <td> Weight </td>
    <td> Manufacture Year </td>
  </thead>
  <tr>
    <td><?php echo $car_model; ?></td>
    <td><?php echo $weight; ?></td>
    <td><?php echo $manufacture_year; ?></td>
  </tr>
</table>
<a href="index.php">Go Back to Home Page</a>
