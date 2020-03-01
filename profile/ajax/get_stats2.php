<?php
  require_once('../config/config.php');

  if ($CONFIG['mode'] == 'dev') {
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
  }

  require_once('../db/db.php');
  header('Content-Type: application/json');
  $avgs = array();
  $names = array();
  $query = 'SELECT * FROM `pool_questions` WHERE `teacher`="'.(int)$_GET['teacher'].'"';
  $res = $mysqli->query($query);
  $i = 1;
  if ($res->num_rows != 0) {
    while ($row = $res->fetch_assoc()) {
      $query = 'SELECT AVG(`pool_answers`.`mark`) AS `avg`
                FROM `pool_questions`
                RIGHT OUTER JOIN `pool_answers` ON `pool_questions`.`id` = `pool_answers`.`question`
                WHERE `pool_questions`.`pool`="'.$row['pool'].'" AND `pool_questions`.`teacher`="'.(int)$_GET['teacher'].'"';
      $res2 = $mysqli->query($query);
      $row2 = $res2->fetch_assoc();

      array_push($avgs, $row2['avg']);
      array_push($names, 'Опрос '.$i);
      $i++;
    }
  }
  $result['avgs'] = $avgs;
  $result['names'] = $names;
  print json_encode($result);
?>
