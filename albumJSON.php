<?php
  include __DIR__ . '/db-logic.php';

  header("Content-Type: application/json");


  echo json_encode($database);


?>