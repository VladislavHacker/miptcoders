<?php
  if (isset($_GET['sect'])) {
    switch ($_GET['sect']) {
      case 'in':
          include('modules/in.php');
        break;
      case 'up':
          include('modules/up.php');
        break;
      default:
          include('modules/in.php');
        break;
    }
  } else {
    include('modules/in.php');
  }
 ?>
