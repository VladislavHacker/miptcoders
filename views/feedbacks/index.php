<?php
  if (isset($_GET['sect'])) {
    switch ($_GET['sect']) {
      case 'list':
          include('modules/list.php');
        break;
      case 'new':
          include('modules/view.php');
        break;
      default:
          include('modules/list.php');
        break;
    }
  } else {
    include('modules/list.php');
  }
 ?>
