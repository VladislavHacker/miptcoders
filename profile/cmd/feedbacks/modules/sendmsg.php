<?php
  if (isset($_GET['feed']) && isset($_POST['msg'])) {
    $msg = htmlspecialchars($_POST['msg']);
    $query = "INSERT INTO `feedbacks` (`id`, `author`, `answerer`, `teacher`, `status`)
              VALUES (NULL, '{$_SESSION[$CONFIG['host']]['id']}', '0', '{$teacher}', '0')";
    $mysqli->query($query);
    $feed_id = $mysqli->insert_id;
    $msg = $_POST['feedback'];
    $datetime = date('Y-m-d H:i:s');
    $query = "INSERT INTO `messages` (`id`, `feedback`, `sender`, `datetime`, `text`)
              VALUES (NULL, '{$feed_id}', '{$_SESSION[$CONFIG['host']]['id']}', '{$datetime}', '{$feedback}')";
    $mysqli->query($query);
  }
 ?>
