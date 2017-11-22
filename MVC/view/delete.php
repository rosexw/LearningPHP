<link rel="stylesheet" type="text/css" href="style.css">

<div class="center">

  <?php

      /*

      DELETE.PHP
      Deletes a specific entry from the 'tbl_automobiles' table

      */

      // check if the 'id' variable is set in URL, and check that it is valid

      if ($_POST['automobile_id'] && is_numeric($_POST['automobile_id'])) {
        // get id value
        $id = $_POST['automobile_id'];

        // delete the entry for the database
        $controller->deleteCar($id);
        echo "Deleted successfully";
      } else {
        echo "error";
      }

  ?>

      <br />
      <br />

      <a href="index.php"> &#9668; Back to Home</a>
</div>
