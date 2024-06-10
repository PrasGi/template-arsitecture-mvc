<?php

namespace View;

use Controllers\UserController;

$controller = new UserController();
$datas = $controller->index()['data'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Try</title>
</head>

<body>
  <?php
    foreach ($datas as $index => $data) {
      echo "<p>{$data->name}</p>";
      echo "<p>{$data->email}</p>";
      echo "<p>{$data->password}</p>";
    }
  ?>

</body>

</html>