
<?php
  require 'db.php';

  require 'MVC/controller/controller.php';
  require 'MVC/models/model.php';

  $model = new Model($conn);
  $controller = new Controller($model);

?>
