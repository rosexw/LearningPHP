
<?php
  require 'db.php';
  require 'validation.php';

  require 'MVC/controller/controller.php';
  require 'MVC/models/model.php';

  $model = new Model($conn);
  $controller = new Controller($model);

  require 'MVC/view/edit-complete.php';

  // echo $view->output();
?>
