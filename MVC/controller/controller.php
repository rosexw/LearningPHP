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
}
