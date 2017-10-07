
<?php

  //The htmlspecialchars() function converts special characters to HTML entities. This means that it will replace HTML characters like < and > with &lt; and &gt;. This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.
  $automobile_id = htmlspecialchars($_POST['automobile_id']);
  $car_model    = htmlspecialchars($_POST['car_model']);
  $weight   = htmlspecialchars($_POST['weight']);
  $manufacture_year = htmlspecialchars($_POST['manufacture_year']);


  // Required field names
  $required = array('car_model', 'weight', 'manufacture_year');

  // Loop over field names, make sure each one exists and is not empty
  $error = false;
  foreach($required as $field) {
    if (empty($_POST[$field])) {
      $error = true;
      echo "All fields are required. You must've forgotten a field!";
    }
  }

  //check if all fields are the required types

  if (!is_string($car_model) || !is_numeric($weight) || !is_numeric($manufacture_year)) {
    $error = true;
    echo "<p>The fields must be in the correct formats: Car Model is a string. Weights and Manufacture Year must be numbers.</p>";
  }

  if ((int)$manufacture_year <= 1950 ) {
    $error = true;
    echo "<p>The manufacture year of the car must be after 1950.</p>";
  }

  if ((int)$weight <= 5 || (int)$weight >= 10 ) {
    $error = true;
    echo "<p>The weight of the car must be between 5 and 10.</p>";
  }

?>
