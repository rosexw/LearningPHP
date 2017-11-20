<?php

/*

DELETE.PHP
Deletes a specific entry from the 'tbl_automobiles' table

*/

// connect to the database
require 'db.php';

// check if the 'id' variable is set in URL, and check that it is valid

if ($_POST['automobile_id'] && is_numeric($_POST['automobile_id'])) {
  // get id value
  $id = $_POST['automobile_id'];

  // delete the entry for the database

  $result = $conn->query("DELETE FROM tbl_automobiles WHERE automobile_id=" . $_POST['automobile_id'] . ";");
  echo "Deleted successfully";
} else {
  echo "error";
}

?>

<a href="index.php">Back to Home</a>
