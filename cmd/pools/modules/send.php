<?php
  if (isset($_GET['id'])) {

    $i = 0;
    foreach ($_POST['comment'] as $key => $value) {
      $answer_array[$i++]['comment'] = $value;
    }
    $i = 0;
    foreach ($_POST['mark'] as $key => $value) {
      $answer_array[$i++]['mark'] = $value;
    }

    $query = 'SELECT
                    *
              FROM `pool_questions`
              WHERE `pool`="'.(int)$_GET['id'].'"';
    $res = $mysqli->query($query);
    $i = 0;
    if ($res->num_rows != 0) {
      while ($row = $res->fetch_assoc()) {
        $sub_query = "INSERT INTO `pool_answers` (`id`, `user`, `pool`, `question`, `mark`, `comment`)
                      VALUES (NULL, '{$_SESSION[$CONFIG['host']]['id']}', '{$_GET['id']}', '{$row['id']}',
                      '{$answer_array[$i]['mark']}', '{$answer_array[$i]['comment']}')";
        $i++;
        $mysqli->query($sub_query);
      }
    }
  }
 ?>
