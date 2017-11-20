<?php
    $controller->editCar($car_model, $weight, $manufacture_year, $sales_email, $automobile_id);

    if (!$error) {
      ?>
          <table>
          <thead style = 'font-weight: bold'>
            <td> Automobile ID </td>
            <td> Car Model </td>
            <td> Weight </td>
            <td> Manufacture Year </td>
            <td> Sales Email </td>
          </thead>
          <tr>
            <td> <?php echo $automobile_id ?> </td>
            <td> <?php echo $car_model ?> </td>
            <td> <?php echo $weight ?> </td>
            <td> <?php echo $manufacture_year ?> </td>
            <td> <?php echo $sales_email ?> </td>
          </tr>
        </table>

        <p><a href='index.php'>Back to Home</a></p>
      <?php
      } else {
      ?>
      <p><a href='MVC/view/edit.php'>Go Back</a></p>
      <p><a href='index.php'>Go Home</a></p>
      <?php
    }

 ?>
