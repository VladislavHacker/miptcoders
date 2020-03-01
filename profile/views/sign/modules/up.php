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
        Edaq - <span>Регистрация</span>
      </div>
      <form enctype="multipart/form-data" action="./?cmd=sign&act=up" method="post" onsubmit="return check()">
        <div class="form-group">
          <input type="email" id="email" name="email" placeholder="Почта phystech.edu" required>
        </div>
        <div class="form-group">
          <input type="password" id="pass1" name="password" placeholder="Пароль" required>
        </div>
        <div class="form-group">
          <input type="password" id="pass2" name="password_check" placeholder="Повторите пароль" required>
        </div>
        <div class="form-group">
          <input type="submit" value="Зарегистрироваться">
        </div>
        <div id="error-log">
            <?php
              if (isset($_GET['status'])) {
                switch ($_GET['status']) {
                  case '1':
                      print 'Адрес занят!';
                    break;

                  default:
                    
                    break;
                }
              }
            ?>
        </div>
      </form>
      <a href="./?view=sign&sect=in">Уже есть аккаунт? Войдите!</a>
    </div>
    <script src="./assets/js/check.js"></script>
  </body>
</html>
