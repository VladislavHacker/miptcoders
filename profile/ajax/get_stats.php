<?php
  require_once('../config/config.php');

  if ($CONFIG['mode'] == 'dev') {
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
  }

  require_once('../db/db.php');
  header('Content-Type: application/json');
  $result = array();
  for ($i = 1; $i <= 10; $i++) {
    $query = 'SELECT COUNT(*) AS `count`
              FROM `pool_questions`
              RIGHT OUTER JOIN `pool_answers` ON `pool_questions`.`id` = `pool_answers`.`question`
              WHERE `pool_questions`.`teacher`="'.(int)$_GET['teacher'].'"
              GROUP BY `pool_answers`.`mark`
              HAVING `mark`="'.(10 - $i).'"';
    $res = $mysqli->query($query);
    if ($res->num_rows != 0) {
        $row = $res->fetch_assoc();
        array_push($result, $row['count']);
    } else {
        array_push($result, 0);
    }
  }
  print json_encode($result);
?>
