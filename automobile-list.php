<!DOCTYPE HTML>

<html>
<head><title>Automobile</title></head>

<body>
  <h1>All the Cars</h1>
  <?php

    require 'automobile-edit.php';

    $dbname= 'wordpress';

    if (!mysql_connect('mysql_host', 'mysql_user', 'mysql_password')) {
      echo 'Could not connect to mysql';
      exit;
    }


    $select = "select * from table";
    $show = "SHOW TABLES FROM $dbname";
    $result = mysql_query($show);

    // if (!$result) {
    //     echo "DB Error, could not list tables\n";
    //     echo 'MySQL Error: ' . mysql_error();
    //     exit;
    // }

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

// create table if not exist. Echo print_r, pre
    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS `tbl_automobiles` (
    automobile_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    car_model VARCHAR(30) NOT NULL,
    weight DECIMAL NOT NULL,
    manufacture_year DATE
    )";

    //adding values to tbl_automobiles list

    $insert = "INSERT INTO `tbl_automobiles` (car_model, weight, manufacture_year)
    VALUES ('Toyota Camry', '3190', '2009-01-01')";
    // , ('Honda Civic', '3045', '2016-02-03')

    echo '<table>
          <tr>
          <td>Car Model | </td>
          <td>Weight | </td>
          <td>Manufacture Year</td>
          </tr>
          </table>';

      $select="SELECT * from tbl_automobiles where sequence = '".$_GET["sequence"]."' ";
      $rs=mysql_query($select,$conn) or die(mysql_error());
      $result=mysql_fetch_array($rs);

      print_r("test");

      ?>

      <table>
            <tr>
            <td>'.$result["car_model"].'</td>
            <td>'.$result["weight"].'</td>
            <td>'.$result["manufacture_year"].'</td>
            </tr>
            </table>;

    while ($row = mysql_fetch_assoc($sql)) {
    // while ($row = mysql_fetch_row($result)) {
        echo "Table: {$row[0]}\n";
        <form action="automobile-edit.php" method="post/get">
          <input type="hidden" name="id" value="<?php echo $row_id; ?>" />
          <input type="submit" value="Edit"/>
        </form>
        <br>

        <a href=\"automobile-edit.php?id=".mysql_result($result,$j,'id')."\"><strong>EDIT</strong>;
        <a href=\"delete.php?id=".mysql_result($result,$j,'id')."\" onclick=\"return confirm('Are you sure you want to delete this car?');\"><strong>delete</strong>;
    }

  <?php
    mysql_free_result($result);

    if ($conn->query($sql) === TRUE) {
        echo "Table tbl_automobiles created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    $conn->close();
  ?>

</body>
</html>
