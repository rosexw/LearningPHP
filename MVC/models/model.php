<?php

  class Model
  {
      var $conn;

      public function __construct($conn){
        $this->conn = $conn;
      }

      public function getCarList(){
        $select = "SELECT * from tbl_automobiles";

        if ($result = $this->conn->query($select)) {
        } else {
          echo "Error selecting: " . $this->conn->error;
        }

        return $result;
      }

      public function editCar($car_model, $weight, $manufacture_year, $sales_email, $automobile_id){
        $sql = "UPDATE tbl_automobiles
              SET car_model = '" . $car_model . "',
                  weight = " . $weight . ",
                  manufacture_year = '" . $manufacture_year . "',
                  sales_email = '" . $sales_email . "'
              WHERE automobile_id = " . $automobile_id . ";";

        // run SQL command to update table of automobiles
        if ($this->conn->query($sql) === TRUE) {
            echo "Successful";
        } else {
            echo "Error updating table: " . $this->conn->error;
        }
      }

      public function deleteCar($automobile_id){
        return $this->conn->query("DELETE FROM tbl_automobiles WHERE automobile_id=" . $automobile_id . ";");
      }

      public function addCar($car_model, $weight, $manufacture_year, $sales_email){
        $sql="INSERT INTO tbl_automobiles (car_model, weight, manufacture_year, sales_email)
        VALUES
        ('$car_model','$weight','$manufacture_year','$sales_email')";

        // run SQL command to update table of automobiles
        if ($this->conn->query($sql) === TRUE) {
            echo "One record has been added";
          } else {
            echo "Error updating table: " . $this->conn->error;
        }
      }
  }
