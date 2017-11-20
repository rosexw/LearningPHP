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
          echo "Error selecting: " . $conn->error;
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
            echo "Error updating table: " . $conn->error;
        }
      }
  }
