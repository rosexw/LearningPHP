
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
    }
  }

  //check if all fields are the required types

  if (!is_string($car_model) || !is_numeric($weight) || !is_numeric($manufacture_year)) {
    $error = true;
  }

?>
