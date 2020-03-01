<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Eduq </title>
      <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" type="text/css" href="./assets/css/login.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/forms.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="sign-form">
      <div class="form-logo">
        Edaq - <span>Авторизация</span>
      </div>
      <form enctype="multipart/form-data" action="./?cmd=sign&act=in" method="post">
        <div class="form-group">
          <input type="email" name="email" placeholder="Почта phystech.edu">
        </div>
        <div class="form-group">
          <input type="password" name="password" placeholder="Пароль">
        </div>
        <div class="form-group">
          <input type="submit" value="Войти">
        </div>
        <a href="./?view=sign&sect=up">Нет аккаунта? Зарегистрируйтесь!</a>
      </form>
    </div>
  </body>
</html>
