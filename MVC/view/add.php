
<?php
    if (!$error) {
      $controller->addCar($car_model, $weight, $manufacture_year, $sales_email);
?>

      <table class="table">
        <thead style = 'font-weight: bold'>
          <td> Car Model </td>
          <td> Weight </td>
          <td> Manufacture Year </td>
          <td> Sales Email </td>
        </thead>
        <tr>
          <td> <?php echo $car_model ?> </td>
          <td> <?php echo $weight ?> </td>
          <td> <?php echo $manufacture_year ?> </td>
          <td> <?php echo $sales_email ?> </td>
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
