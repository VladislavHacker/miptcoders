function check() {
  let email = document.getElementById('email').value;
  let esplit = email.split('@');
  let pass1 = document.getElementById('pass1').value;
  let pass2 = document.getElementById('pass2').value;

  if (esplit[1] == 'phystech.edu') {
    if (pass1 == pass2) {
       return true;
    } else {
      document.getElementById('error-log').innerHTML = 'Пароли разные';
      return false;
    }
  } else {
    document.getElementById('error-log').innerHTML = 'Почта должна быть phystech.edu';
    return false;
  }
}
