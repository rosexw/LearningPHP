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

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // sql to create table if it doesn't exist
  $sql = "CREATE TABLE IF NOT EXISTS `tbl_automobiles` (
    automobile_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    car_model VARCHAR(30) NOT NULL,
    weight DECIMAL NOT NULL,
    manufacture_year DATE
  )";

  if ($conn->query($sql) === TRUE) {
      //testing below
      // echo "Table tbl_automobiles created successfully";
  } else {
      echo "Error creating table: " . $conn->error;
  }
  //adding values to tbl_automobiles list

  $select = "SELECT * from tbl_automobiles";
  $hasCars = $conn->query($select)->num_rows > 0;

  //This if statement check if cars are already present - if present, don't add/duplicate records.
  //check later if there's a way to check the cars, so user doesn't have to refresh everything.
  //examples here
  if (!$hasCars) {
    $insert = "
      INSERT INTO tbl_automobiles (car_model, weight, manufacture_year)
      VALUES ('Toyota Camry', '3190', '2009-01-01'),
      ('Audi A4', '3045', '2016-02-03'),
      ('Toyota Corolla', '3192', '2012-01-01')";
    if ($conn->query($insert) === TRUE) {
        // echo "Inserted successfully";
    } else {
        echo "Error inserting: " . $conn->error;
    }
  }


?>
