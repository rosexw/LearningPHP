<!-- Test -->
<!DOCTYPE HTML>

<html>
  <head><title> Automobiles </title></head>
  <body>
    <h1>Show all automobiles</h1>

    <form method="post" action="automobile-list.php">
      SEARCH: <input name="search" value="<?php echo $row_id; ?>" />
      <input type="submit" value="submit"/>
    </form>


    <?php
      require 'db.php';
      require 'automobile-list.php';


      // add a reset button
      // add a "Add new entry form"
    ?>

  </body>
</html>

<!-- includes -->
