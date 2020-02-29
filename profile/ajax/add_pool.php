<?php
    require_once('../config/config.php');

    if ($CONFIG['mode'] == 'dev') {
      ini_set('error_reporting', E_ALL);
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
    }

    require_once('../db/db.php');

    session_start();
    if (isset($_POST['data']) && isset($_SESSION[$CONFIG['host']]['id']) && $_SESSION[$CONFIG['host']]['access'] == 255) {
      $start = date('Y-m-d');
      $end = date('Y-m-d');
      $query = "INSERT INTO `pools` (`id`, `name`, `start_time`, `end_time`, `tech_school`, `faculty`, `direction`, `course`)
                VALUES (NULL, 'Плановый опрос', '{$start}', '{$end}', '1', '1', '1','1')";
      print $query;
      $mysqli->query($query);
      $pool_id = $mysqli->insert_id;
      $data = json_decode($_POST['data']);
      foreach ($data as $key => $value) {
        $sub_query = "INSERT INTO `pool_questions` (`id`, `pool`, `teacher`) VALUES (NULL, '{$pool_id}', '{$value->name}')";
        $mysqli->query($sub_query);
      }
    }

 ?>
