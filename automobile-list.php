<!DOCTYPE HTML>

<html>
<head><title>Automobile</title></head>

<body>
  <h1>All the Cars</h1>
  <?php
    $dbname= 'wordpress';

    if (!mysql_connect('mysql_host', 'mysql_user', 'mysql_password')) {
      echo 'Could not connect to mysql';
      exit;
    }


    $sql = "select * from table;"
    $sql = "SHOW TABLES FROM $dbname";
    $result = mysql_query($sql);

    // if (!$result) {
    //     echo "DB Error, could not list tables\n";
    //     echo 'MySQL Error: ' . mysql_error();
    //     exit;
    // }

    while ($row = mysql_fetch_assoc($sql)) {
    // while ($row = mysql_fetch_row($result)) {
        echo "Table: {$row[0]}\n";

        <form action="automobile-edit.php" method="post/get">
          <input type="hidden" name="id" value="<?php echo $row_id; ?>" />
          <input type="submit" value="Edit"/>
        </form>
        <br>

        echo "<a href=\"automobile-edit.php?id=".mysql_result($result,$j,'id')."\"><strong>EDIT</strong>";
        echo "<a href=\"delete.php?id=".mysql_result($result,$j,'id')."\" onclick=\"return confirm('Are you sure you want to delete this car?');\"><strong>delete</strong>";
    }

    mysql_free_result($result);
  ?>

</body>
</html>
