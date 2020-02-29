<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Eduq </title>
    <link rel="stylesheet" type="text/css" href="./assets/css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="sign-form">
      <div class="form-logo">
        Edaq - <span>Авторизация</span>
      </div>
      <form enctype="multipart/form-data" action="./?cmd=sign&act=in" method="post">
        <div class="form-group">
          <input type="email" name="email" placeholder="email">
        </div>
        <div class="form-group">
          <input type="password" name="password" placeholder="password">
        </div>
        <div class="form-group">
          <input type="submit" value="Войти">
        </div>
      </form>
    </div>
  </body>
</html>
