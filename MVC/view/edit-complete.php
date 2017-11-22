<link rel="stylesheet" type="text/css" href="style.css">


<div class="center">

<?php

    if (!$error) {
      $controller->editCar($car_model, $weight, $manufacture_year, $sales_email, $automobile_id);

      ?>
          <table>
          <thead>
            <th> Automobile ID </th>
            <th> Car Model </th>
            <th> Weight </th>
            <th> Manufacture Year </th>
            <th> Sales Email </th>
          </thead>
          <tr>
            <td> <?php echo $automobile_id ?> </td>
            <td> <?php echo $car_model ?> </td>
            <td> <?php echo $weight ?> </td>
            <td> <?php echo $manufacture_year ?> </td>
            <td> <?php echo $sales_email ?> </td>
          </tr>
        </table>

        <p><a href='index.php'>&#9668; Back to Home</a></p>
      <?php
      } else {
      ?>
      <p><a href='MVC/view/edit.php'>&#9668; Go Back</a></p>
      <p><a href='index.php'>&#9668; Go Home</a></p>
      <?php
    }

 ?>

</div>
