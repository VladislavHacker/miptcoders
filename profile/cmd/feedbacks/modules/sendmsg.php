<?php
  if (isset($_GET['feed']) && isset($_POST['msg'])) {
    $msg = htmlspecialchars($_POST['msg']);
    $datetime = date('Y-m-d H:i:s');
    $feed_id = (int)$_GET['feed'];
    $query = "INSERT INTO `messages` (`id`, `feedback`, `sender`, `datetime`, `text`)
              VALUES (NULL, '{$feed_id}', '{$_SESSION[$CONFIG['host']]['id']}', '{$datetime}', '{$msg}')";
    $mysqli->query($query);
  }
 ?>
