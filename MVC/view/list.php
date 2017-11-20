
    <h1>All automobiles</h1>

    <!-- includes -->


    <!-- How to clear the database and reset to the Examples
    /Applications/MAMP/Library/bin/mysql -uroot -proot
    use wordpress
    drop tables tbl_automobiles; -->
    <table>
        <tr>
          <th>Automobile ID</th>
          <th>Car Model</th>
          <th>Weight</th>
          <th>Manufacture Year</th>
          <th>Sales Email</th>
        </tr>

        <?php
          $list = $model->getCarList();
          while ($row = $list->fetch_array()) {
        ?>
          <tr>
            <td> <?php echo $row["automobile_id"] ?></td>
            <td> <?php echo $row["car_model"] ?></td>
            <td> <?php echo $row["weight"] ?></td>
            <td> <?php echo $row["manufacture_year"] ?></td>
            <td> <?php echo $row["sales_email"] ?></td>
            <td>
              <form action="edit.php" method="post">
                <input type="hidden" name="automobile_id" value="<?php echo $row["automobile_id"] ?>" />
                <input type="hidden" name="car_model" value="<?php echo $row["car_model"]?>" />
                <input type="hidden" name="weight" value="<?php echo $row["weight"] ?>" />
                <input type="hidden" name="manufacture_year" value="<?php echo $row["manufacture_year"] ?>" />
                <input type="hidden" name="sales_email" value="<?php echo $row["sales_email"] ?>" />
                <input type="submit" value="Edit"/>
              </form>
            </td>
            <td>
              <form action="delete.php" method="post">
                <input type="hidden" name="automobile_id" value="<?php echo $row["automobile_id"] ?>" />
                <input type="hidden" name="car_model" value="<?php echo $row["car_model"] ?>" />
                <input type="hidden" name="weight" value="<?php echo $row["weight"] ?>" />
                <input type="hidden" name="manufacture_year" value=" <?php echo $row["manufacture_year"] ?>" />
                <input type="hidden" name="sales_email" value="<?php echo $row["sales_email"] ?>" />
                <input type="submit" value="Delete"/>
              </form>
            </td>
          </tr>

        <?php
        }
        ?>

        <br/>
        <tr>
          <form action="add.php" method="post">
            <td><input type="hidden" name="automobile_id" /></td>
            <td><input type="text" name="car_model" /></td>
            <td><input type="text" name="weight" /></td>
            <td><input type="text" name="manufacture_year" /></td>
            <td><input type="text" name="sales_email" /></td>
            <td></td>
            <td><input type="submit" value="Add New Car"/></td>
          </form>
        </tr>
    </table>
