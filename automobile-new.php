<?php

if ($result = $conn->query($select)) {
} else {
  echo "Error selecting: " . $conn->error;
}


mysql_select_db("automobiles", $conn);

$sql="INSERT INTO tbl_automobiles (car_model, weight, manufacture_year)
VALUES
('$_POST[car_model]','$_POST[weight]','$_POST[manufacture_year]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>
