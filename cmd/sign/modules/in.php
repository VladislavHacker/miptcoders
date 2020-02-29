<?php
  if (isset($_POST['email']) && isset($_POST['password'])){
    $email = htmlspecialchars($_POST['email']);
    $password = md5(md5(htmlspecialchars($_POST['password'])));
    $query = 'SELECT `id`,`access`,`password` FROM `users` WHERE `access` != "0" AND `email` = "'.$email .'" LIMIT 1';
    $res = $mysqli->query($query);
    if ($res->num_rows != 0){
      $row = $res->fetch_assoc();
      if ($row['password'] == $password){
        $_SESSION[$CONFIG['host']]['id'] = $row['id'];
        $_SESSION[$CONFIG['host']]['access'] = $row['access'];
      }
    }
  }
 ?>
