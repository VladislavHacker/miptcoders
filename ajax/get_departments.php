<?php
  header('Content-Type: application/json');
  $query = 'SELECT * FROM `departments`';
  $res = $mysqli->query($query);
?>
