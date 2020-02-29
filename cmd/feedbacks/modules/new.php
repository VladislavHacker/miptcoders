<?php
  if (isset($_POST['department']) && isset($_POST['teacher']) && $_POST['feedback']) {
    $department = (int)$_POST['department'];
    $teacher = (int)$_POST['teacher'];
    $feedback = htmlspecialchars($_POST['feedback']);
    $query = "INSERT INTO `feedbacks` (`id`, `author`, `answerer`, `teacher`, `status`)
              VALUES (NULL, '{$_SESSION[$CONFIG['host']]['id']}', '0', '{$teacher}', '0')";
    print $query;
    $mysqli->query($query);
  }
 ?>
