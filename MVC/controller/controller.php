<?php
class Controller
{
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function editCar($car_model, $weight, $manufacture_year, $sales_email, $automobile_id){
      $this->model->editCar($car_model, $weight, $manufacture_year, $sales_email, $automobile_id);
    }

    public function deleteCar($automobile_id){
      return $this->model->deleteCar($automobile_id);
    }

    public function addCar($car_model, $weight, $manufacture_year, $sales_email){
      return $this->model->addCar($car_model, $weight, $manufacture_year, $sales_email);
    }
}
