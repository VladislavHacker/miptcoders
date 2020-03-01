<?php
if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_check'])){
  $email = htmlspecialchars($_POST['email']);
  $password = md5(md5(htmlspecialchars($_POST['password'])));
  $password_check = md5(md5(htmlspecialchars($_POST['password_check'])));
  $query = 'SELECT `id`,`access`,`password` FROM `users` WHERE `access` != "0" AND `email` = "'.$email .'" LIMIT 1';
  $res = $mysqli->query($query);
  if ($res->num_rows == 0){
    if ($password_check == $password){
      $query = "INSERT INTO `users` (`id`, `email`, `password`, `access`) VALUES (NULL, '{$email}', '{$password}', '3')";
      $mysqli->query($query);
      header('Location: ./?view=sign&sect=in');
    }
  } else {
      header('Location: ./?view=sign&sect=up&status=1');
      exit;
  }
}
?>
