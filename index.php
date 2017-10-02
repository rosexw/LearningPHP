<!-- Test -->
<!DOCTYPE HTML>

<html>
  <head><title> Automobiles </title></head>
  <body>
    <h1>Show all automobiles</h1>

    <?php

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

      // sql to create table
      $sql = "CREATE TABLE tbl_automobiles (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      car_model VARCHAR(30) NOT NULL,
      weight DECIMAL NOT NULL,
      manufacture_year DATE
      )";

      //adding values to tbl_automobiles list

      $sql = "INSERT INTO tbl_automobiles (car_model, weight, manufacture_year)
      VALUES ('Toyota Camry', '3190', '2009')";
      $sql = "INSERT INTO tbl_automobiles (car_model, weight, manufacture_year)
      VALUES ('Toyota Corolla', '3049', '2016')";


      echo '<table>
            <tr>
            <td>Car Model</td>
            <td>Weight</td>
            <td>Manufacture Year</td>
            </tr>
            <tr>
            <td>'.$sql["car_model"].'</td>
            <td>'.$sql["weight"].'</td>
            <td>'.$sql["manufacture_year"].'</td>
            </tr>
            </table>';

      if ($conn->query($sql) === TRUE) {
          echo "Table tbl_automobiles created successfully";
      } else {
          echo "Error creating table: " . $conn->error;
      }

      $sql="SELECT * from table where sequence = '".$_GET["sequence"]."' ";
      $rs=mysql_query($sql,$conn) or die(mysql_error());
      $result=mysql_fetch_array($rs);
      $conn->close();
    ?>

    <form action="automobile-list.php" method="post">
      <input name="search" value="<?php echo $row_id; ?>" />
      <input type="submit" value="submit"/>
    </form>
    <br>

  </body>
</html>
