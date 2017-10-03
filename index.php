<!-- Test -->
<!DOCTYPE HTML>

<html>
  <head><title> Automobiles </title></head>
  <body>
    <h1>Show all automobiles</h1>

    <form action="automobile-list.php" method="post">
      SEARCH: <input name="search" value="<?php echo $row_id; ?>" />
      <input type="submit" value="submit"/>
    </form>

    <?php

      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);

      require 'config/variables.php';

      $servername = "localhost";
      $username = "root";
      $password = "root";
      $db = "wordpress";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $db);

      require 'automobile-list.php';

    ?>

  </body>
</html>

<!-- includes -->
