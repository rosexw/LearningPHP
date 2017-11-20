<?php
    if (!$error) {
      $controller->addCar($car_model, $weight, $manufacture_year, $sales_email);
?>

      <table>
        <thead style = 'font-weight: bold'>
          <td> Car Model </td>
          <td> Weight </td>
          <td> Manufacture Year </td>
        </thead>
        <tr>
          <td> <?php $car_model ?> </td>
          <td> <?php $weight ?> </td>
          <td> <?php $manufacture_year ?> </td>
          <td> <?php $sales_email ?> </td>
        </tr>
      </table>
      <p><a href='index.php'>Go Back to Home Page</a></p>

  <?php
  } else {
  ?>
      <p><a href='index.php'>Go Back</a><p>
  <?php
}

?>
