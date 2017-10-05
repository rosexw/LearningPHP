
<?php
  $automobile_id = htmlspecialchars($_POST['Automobile ID']);
  $car_model    = htmlspecialchars($_POST['car_model']);
  $weight   = htmlspecialchars($_POST['weight']);
  $manufacture_year = htmlspecialchars($_POST['manufacture_year']);


  // Required field names
  $required = array('automobile_id', 'car_model', 'weight', 'manufacture_year');

  // Loop over field names, make sure each one exists and is not empty
  $error = false;
  foreach($required as $field) {
    if (empty($_POST[$field])) {
      $error = true;
    }
  }
?>
The information for <?php echo $automobile_id; ?> has been changed to:
<table>
  <thead style = "font-weight: bold">
    <td> Automobile ID </td>
    <td> Car Model </td>
    <td> Weight </td>
    <td> Manufacture Year </td>
  </thead>
  <tr>
    <td><?php echo $automobile_id; ?></td>
    <td><?php echo $car_model; ?></td>
    <td><?php echo $weight; ?></td>
    <td><?php echo $manufacture_year; ?></td>
  </tr>
</table>
