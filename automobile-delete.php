<?php

/*

DELETE.PHP
Deletes a specific entry from the 'tbl_automobiles' table

*/

// connect to the database
include('automobile-list.php');

// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['automobile_id']) && is_numeric($_GET['automobile_id'])) {
  // get id value
  $id = $_GET['automobile_id'];

  // delete the entry

  $result = mysql_query("DELETE FROM tbl_automobiles WHERE automobile_id=$id")
  or die(mysql_error());

  // redirect back to the view page
  header("Location: index.php");
} else {
// if id isn't set, or isn't valid, redirect back to view page
  header("Location: index.php");
}

?>
