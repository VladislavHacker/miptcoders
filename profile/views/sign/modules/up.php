<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Eduq </title>
    <link rel="stylesheet" type="text/css" href="./assets/css/login.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/forms.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="sign-form">
      <div class="form-logo">
        Edaq - <span>Регистрация</span>
      </div>
      <form enctype="multipart/form-data" action="./?cmd=sign&act=in" method="post">
        <div class="form-group">
          <input type="email" name="email" placeholder="Почта phystech.edu" required>
        </div>
        <div class="form-group">
          <input type="password" name="password" placeholder="Пароль" required>
        </div>
        <div class="form-group">
          <input type="password" name="password_check" placeholder="Повторите пароль" required>
        </div>
        <div class="form-group">
          <input type="submit" value="Зарегистрироваться">
        </div>
      </form>
      <a href="./?view=sign&sect=in">Уже есть аккаунт? Войдите!</a>
    </div>
  </body>
</html>
